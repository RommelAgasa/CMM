<?php

namespace App\Interfaces;

interface  IClientService{

    public function getAllClient();
    public function addNewClient(array $data);
    public function updateClient($id, array $data);
    public function deleteClient($id);

    // For Bunos Point
    // Filter by status
    public function filterByStatus($status);
}