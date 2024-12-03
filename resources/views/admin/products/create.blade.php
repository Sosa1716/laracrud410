@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Create de Productos</h1>
    <br>

    @if ($errors->any())
    <div class="alert alert-warning mb-3" role="alert">
       <ul>
        @foreach ($errors->all() as $e)
        <li>{{$e}}</li>
        @endforeach
       </ul> 
     </div>
@endif

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label for=""> Nombre del Producto </label>
    <input type="text" name="nameProduct">
    <br>
    
    <label for=""> Marca </label> 
    <select name="brand_id">
        <option value="">Selecciona. . .</option>
        @foreach ( $brands as $brand => $id )
        <option value="{{$id}}">{{$brand}}</option>
        @endforeach
       
    </select> <br> <br>

    <label for=""> Cantidad </label> <br>
    <input type="number" name="stock">

    <label for=""> Precio Unitadio </label>
    <input type="text" name="unit_price">

    <label for=""> Imagen </label>
    <input type="file" name="imagen">

    <button type="submit"> Registrar </button>
   
</form>
</div>    
@endsection