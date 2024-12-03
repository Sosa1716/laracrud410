<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\UpdateRequest;
use App\Http\Requests\Clients\StoreRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(3);       
        return view('admin/clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $clients=Client::pluck('id', 'name');
         return view('admin/clients/create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Client::create($request->all());
        return to_route('clients.index') -> with('status', 'Cliente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->all());
        return to_route('clients.index') -> with('status', 'Informacion Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Client $client)
    {
        echo view('admin/clients/delete', compact('client'));
    }

    public function destroy(Client $client)
    {
        $client -> delete();
        return to_route('clients.index')-> with('status', 'Cliente Eliminado');
    }
}
