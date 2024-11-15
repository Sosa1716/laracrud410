@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Registar Marcas</h1>

<form action="{{route('brands.store')}}" method="POST">
    @csrf
    
    <label for=""> Nombre de la marca </label>
    <input type="text" name="brand">

    <label for=""> Descripcion </label> <br>
    <input type="text" name="descripcion">

    <button type="submit"> Registrar </button>
   
</form>

@endsection