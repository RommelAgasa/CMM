<?php


namespace App\Repositories;

use App\Interfaces\IClientRepository;
use App\Models\Client;
use App\Models\User;

class ClientRepository implements IClientRepository{


    /**
     * Get Client in a query builder
     * @return \Illuminate\Database\Eloquent\Builder<Client>
     */
    public function getAllClient(){
        return Client::query(); // I make it query builder for flexible fetching data depends on the requirement
    }

    /**
     * Add / store new client
     * @param array $data
     * @return Client
     */
    public function addNewClient(array $data){
        return Client::create($data);
    }

    /**
     * Update Client
     * @param mixed $id
     * @param array $data
     * @return User|\Illuminate\Database\Eloquent\Collection<int, User>
     */
    public function updateClient($id, array $data){
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }


    /**
     * Delete the client in database
     * @param mixed $id
     * @return void
     */
    public function deleteClient($id){
        User::destroy($id);
    }
}