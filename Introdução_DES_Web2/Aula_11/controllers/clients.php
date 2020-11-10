<?php

class clientsController{

public function register()
{
    require_once('views/templates/header.php');
    require_once('views/clients/register.php');
    require_once('views/templates/footer.php');

}
public function registerView(){
    $client = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'interest' => $_POST['interest'],
        'password' => $_POST['password'],
        'vehicle1' => $_POST['vehicle1'],
        'birthday' => $_POST['birthday'],
        'gender' => $_POST['gender'],
        'cars' => $_POST['cars']
        
    );
    
    require_once('views/templates/header.php');
    require_once('views/clients/registerView.php');
    require_once('views/templates/footer.php');
}

public function listClient(){
    require_once('models/clientsModel.php');
    $client = new clientsModel();
    $client -> listClients();
    $result = $client -> getConsult();

    $arrayClients = array();

    while($line = $result -> fetch_assoc()){
        array_push($arrayClients, $line);
    }

    require_once('views/templates/header.php');
    require_once('views/clients/listClients.php');
    require_once('views/templates/footer.php');
}


}
?>