<?php

namespace App\Services;

use App\Interfaces\IClientRepository;
use App\Interfaces\IClientService;

class ClientService implements IClientService{

    protected $client_repo;

    public function __construct(IClientRepository $repository){
        $this->client_repo = $repository;
    }

    public function getAllClient(){
        // Execute the query and get a collection
        return $this->client_repo->getAllClient()->get();
    }

    public function addNewClient(array $data){
        return $this->client_repo->addNewClient($data);
    }


    public function updateClient($id, array $data){
        return $this->client_repo->updateClient($id, $data);
    }

    public function deleteClient($id){
        return $this->client_repo->deleteClient($id);
    }

    // For Bunos Point
    // The filter by status
    public function filterByStatus($status){
        return $this->client_repo->getAllClient()
        ->where('status', $status)
        ->get();
    }
}