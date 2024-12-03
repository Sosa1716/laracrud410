<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\Brands\UpdateRequest;
use App\Http\Requests\Brands\StoreRequest;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::get(); // obtener  todos los datos de la tabla
        return view('admin/brands/index', compact('brand'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin/brands/create'); // llamar vista organizada
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Brand::create($request->all());
        return to_route('brands.index') -> with('status', 'Marca creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('admin/brands/show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
       
        echo view('admin/brands/edit', compact('brand')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brand $brand)
    {
        $brand->update($request->all()); // actualizamos los datos con la base de datos
        return to_route('brands.index') -> with('status', 'Todas las marcas');
    }

    /**
     * Remove the specified resource from storage.
     */

     public function delete(Brand $brand)
     {
         echo view('admin/brands/delete', compact('brand'));
     }

    public function destroy(Brand $brand)
    {
        $brand -> delete();
        return to_route('brands.index')-> with('status', 'Marca Eliminada');
    }  
}
