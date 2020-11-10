<?php
    class UsersController{
        var $UserModel;
        public function __construct(){
            require_once('models/UsersModel.php');
            $this -> UserModel = new UsersModel();
        }
        public function login(){
            $userData = json_decode(file_get_contents('php://input'));

            if(isset($userData->user) && isset($userData->password)){
                    $this -> UserModel -> getUser($userData->user);
                    $result = $this -> UserModel -> getConsult();
                    if($line = $result -> fetch_assoc()){
                        if($line['password'] == $userData->password){
                            //devolvo um token
                            $token = $this -> createJWT($line);
                            header('Content-Type: application/json');
                            echo json_encode('{"access": "true","token" : "'.$token.'"}');
                        }else{
                            print ("senha incorreta");
                        }
                    }else{
                        print ("usuario nao existe");
                    }
            }

            
        }
        public function createJWT($user){
            $header = [
                'alg' => 'HS256',
                'typ' => 'JWT'
             ];
             $header = json_encode($header);
             $header = base64_encode($header);
             $header = str_replace(['+', '/', '='], ['-', '_', ''], $header); //base64url
             
             $payload = [
                'iss' => 'localhost',
                'name' => "{$user['name']}",
                'user' => "{$user['user']}",
                'admin' => "{$user['admin']}"
             ];
             $payload = json_encode($payload);
             $payload = base64_encode($payload);
             $payload = str_replace(['+', '/', '='], ['-', '_', ''], $payload); //base64url
             
             $signature = hash_hmac('sha256',"$header.$payload",'minha-senha',true);
             $signature = base64_encode($signature);
             $signature = str_replace(['+', '/', '='], ['-', '_', ''], $signature); //base64url
             
             
             $token = $header . "." . $payload . "." . $signature;
            return $token;
        }

        public function checkJWT($headers){

            if($headers ['Authorization']){
                $headers = apache_request_headers();
                $token = $headers['Authorization'];

                $token = str_replace("Bearer ", "", $token); //se tiver o prefixo "Bearer" remover

               

                $part = explode(".",$token);
                $header = $part[0];
                $payload = $part[1];
                $signature = $part[2];
                $paylod = base64_decode($payload);

                $valid = hash_hmac('sha256',"$header.$payload",'minha-senha',true);
                $valid = base64_encode($valid);
                $valid = str_replace(['+', '/', '='], ['-', '_', ''], $valid); //base64url

                if($signature == $valid){
                return true;
                }else{
                return false;
                } 
                
           }

        }

        public function isAdmin(){

            $headers = apache_request_headers();

            if($this -> checkJWT($headers)){
                $token = $headers['Authorization'];
                $token = str_replace("Bearer ", "", $token);

                $part = explode('.', $token);
                $playload = $part[1];
                $playload = base64_decode($playload);
                $playload = json_decode($playload);

                if($playload -> admin == 1){
                    return true;
                }else{
                    return false;
                }

            }else{
                return false;
            }
        }

            
    }

?>