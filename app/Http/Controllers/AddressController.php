<?php

namespace App\Http\Controllers;

use App\Http\Requests\Addresses\StoreRequest;
use App\Http\Requests\Addresses\UpdateRequest;
use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses = Address::paginate(4);
        return view('admin/addresses/index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients=Client::pluck('id', 'name');
        return view('admin/addresses/create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Address::create($request->all());
        return to_route('addresses.index') -> with('status', 'Direccion Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('admin/addresses/show', compact('address'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        return view('admin/addresses/edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Address $address)
    {
        $address->update($request->all());
        return to_route('addresses.index') -> with('status', 'Informacion Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Address $address)
    {
        echo view('admin/addresses/delete', compact('address'));
    }
    
    public function destroy(Address $address)
    {
        $address -> delete();
        return to_route('addresses.index')-> with('status', 'Direccion Eliminada');
    } 

    
}
