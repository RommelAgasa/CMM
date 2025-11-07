<?php

namespace App\Interfaces;

interface  IClientRepository{

    public function getAllClient();
    public function addNewClient(array $data);
    public function updateClient($id, array $data);
    public function deleteClient($id);
}