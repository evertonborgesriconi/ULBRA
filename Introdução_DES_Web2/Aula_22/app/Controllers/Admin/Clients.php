<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Models\ClientsModel;

class Clients extends Controller{

    public function listClients(){
        $clients = new ClientsModel();

        $data = [
            'clients' => $clients -> getClients()
        ];
        echo view('admin/templates/header');
        echo view('admin/clients/list', $data);
        echo view('admin/templates/footer');

    }

    public function detailsClient($idClient){
        $clients = new ClientsModel();

        $data = [
            'client' => $clients -> getClients($idClient)
            
        ];

        echo view('admin/templates/header');
        echo view('admin/clients/details',$data);
        echo view('admin/templates/footer');
        
    }

    public function insert(){
        echo view('admin/templates/header');
        echo view('admin/clients/insert');
        echo view('admin/templates/footer');

    }

    public function insertAction(){

        $clients = new ClientsModel();

        $data = [
            'name' => $this -> request -> getVar('name'),
            'email' => $this -> request -> getVar('email'),
            'phone' => $this -> request -> getVar('phone'),
            'address' => $this -> request -> getVar('address') 
        ];

        $clients -> insert($data);
        return redirect() -> route('admin/clients');

    }

    public function update($idClient){
        $clients = new ClientsModel();

        $data = [
            'client' => $clients -> getClients($idClient)
            
        ];

        echo view('admin/templates/header');
        echo view('admin/clients/update',$data);
        echo view('admin/templates/footer');
    }
    public function updateAction($idClient){

        $clients = new ClientsModel();

        $data = [
            'name' => $this -> request -> getVar('name'),
            'email' => $this -> request -> getVar('email'),
            'phone' => $this -> request -> getVar('phone'),
            'address' => $this -> request -> getVar('address') 
        ];

        $clients -> update($idClient, $data);
        return redirect() -> route('admin/clients');

    }

    public function delete($idClient){
        $clients = new ClientsModel();
        $clients -> delete($idClient);
        return redirect() -> route('admin/clients');
    }

}

?>