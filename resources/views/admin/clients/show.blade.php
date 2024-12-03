
@extends('layout.main_template')

@section('content')

<div class="container-sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h2 class="text-center"> Informacion del cliente </h2>
            <p class="card-text"> Nombre: {{$client ->name}}</p>
            <p class="card-text"> Apellido Paterno: {{$client ->last_name}}</p>
            <p class="card-text"> Apellido Materno: {{$client ->second_last_name}}</p>
            <p class="card-text"> Email: {{$client ->email}}</p>
            <p class="card-text"> Telefono: {{$client ->phone}}</p>
        </div>
       
    </div>


</div>

@endsection