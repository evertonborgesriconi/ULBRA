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
}

?>