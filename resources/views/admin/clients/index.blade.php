@extends('layout.main_template')

@section('content')
<h2>Clients</h2>

<div class="container mt-5">
    <div class="container mt-5">

<a class="btn btn-outline-primary" href="{{route('clients.create')}}"> Registro Clientes</a></button>
 <a class="btn btn-outline-success" href="{{route('addresses.create')}}"> Registrar Dirección</a>
<a class="btn btn-outline-danger" href="{{route('addresses.index')}}"> Ver Direcciones</a>

<br>
<br> 


<table class="table table-bordered border-primary">
    <thead>
        <th> Nombre del Cliente </th>
        <th> Apellido Paterno </th>
        <th> Apellido Materno </th>
        <th> Email </th>
        <th> Telefono </th>
        <th> Acciones </th>
    </thead>

    <tbody>
        @foreach ($clients as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->last_name}}</td>
            <td>{{$c->second_last_name}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->phone}}</td>
            <td>
                <a class="btn btn-info" href="{{route("clients.show", $c)}}"><i class="fa-solid fa-eye"></i></a>
                <a class="btn btn-warning"href="{{route("clients.edit", $c)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-danger" href="{{route("clients.delete", $c)}}"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$clients->links()}}<!--Genera los enlaces de cada pagina-->
    
@endsection