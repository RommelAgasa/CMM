<?php

namespace App\Http\Controllers;

use App\Interfaces\IClientService;
use App\Models\Client;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(IClientService $clientService){
        $this->clientService = $clientService;
    }

    /**
     * Answer to Question #3
     */

    public function storeClientDetails(Request $request)
    {
        try{
            // Validate request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:clients,email',
                'status' => 'required|string|in:active,inactive',
            ]);

            // Add new client
            $client = $this->clientService->addNewClient($validated);

            return response()->json([
                'success' => 'Client created successfully!',
                'data' => $client,
            ], 201);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
            ], 422);
        }
        catch(\Exception $e){
            Log::error('Unexepected error: ' . $e->getMessage());
            return response()->json([
                'message' => 'An unexpected error occured',
            ]);
        }

    }

    // -------------------------------------------------------------------------------------    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = $this->clientService->getAllClient();
        return response()->json([
            'success' => true,
            'data' => $clients
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            // Validate request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:clients,email',
                'status' => 'required|string|in:active,inactive',
            ]);

            // Add new client
            $client = $this->clientService->addNewClient($validated);

            return response()->json([
                'message' => 'Client created successfully!',
                'data' => $client,
            ], 201);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
            ], 422);
        }
        catch(\Exception $e){
            Log::error('Unexepected error: ' . $e->getMessage());
            return response()->json([
                'message' => 'An unexpected error occured',
            ]);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
             $validated = $request->validate([
                'name' => 'sometimes|string|max:255',
                'email' => 'sometimes|email|unique:clients,email,' . $id,
                'status' => 'required|string|in:active,inactive',
            ]);

            $updated = $this->clientService->updateClient($id, $validated);

            return response()->json([
                'message' => 'Client updated successfully!',
                'data' => $updated,
            ], 200);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $e->errors(),
            ], 422); // Status : Unprocessable Entity
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->clientService->deleteClient($id);
        return response()->json(['message' => 'Client deleted successfully'], 200);
    }
}
