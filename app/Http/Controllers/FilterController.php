<?php

namespace App\Http\Controllers;

use App\Interfaces\IClientService;
use App\Models\User;
use Illuminate\Http\Request;


class FilterController{

    protected $clientService;

    public function __construct(IClientService $clientService){
        $this->clientService = $clientService;
    }

    public function index(Request $request)
    {
        $status = $request->input('status'); // 'active', 'inactive', or null

        if ($status && in_array($status, ['active', 'inactive'])) {
            $clients = $this->clientService->filterByStatus($status);
        } else {
            $clients = $this->clientService->getAllClient();
        }

        return view('filterclient', [
            'clients' => $clients,
            'status' => $status,
        ]);
    }

}