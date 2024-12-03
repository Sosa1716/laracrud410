@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Cliente</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
       <div class="error">
        {{$e}}
       </div>
    @endforeach
@endif
    
<div class="container-sm">
    <form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <label for=""> Nombre del Cliente </label >
        <input type="text" name="name" value="{{$client->name}}">
    
        <label for=""> Apellido Paterno </label>
        <input type="text" name="last_name" value="{{$client->last_name}}">
    
        <label for=""> Apellido Materno </label> <br>
        <input type="text" name="second_last_name" value="{{$client->second_last_name}}">
    
        <label for=""> Email </label>
        <input type="email" name="email" value="{{$client->email}}">
    
        <label for=""> Telefono </label>
        <input type="number" name="phone" value="{{$client->phone}}"> 
    
        <button type="submit"> Guardar </button>
       
    </form>
    
</div>

@endsection