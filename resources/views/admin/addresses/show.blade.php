
@extends('layout.main_template')

@section('content')

<div class="container-sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h2 class="text-center"> Direcciones </h2>
            <p class="card-text"> Calle: {{$address ->street}}</p>
            <p class="card-text"> Numero Interior: {{$address ->internal_num}}</p>
            <p class="card-text"> Numero Exterior: {{$address ->external_num}}</p>
            <p class="card-text"> Vecindario: {{$address ->neighborhood}}</p>
            <p class="card-text"> Ciudad: {{$address ->town}}</p>
            <p class="card-text"> Estado: {{$address ->state}}</p>
            <p class="card-text"> Pais: {{$address ->country}}</p>
            <p class="card-text"> Codigo Postal: {{$address ->postal_code}}</p>
            <p class="card-text"> Referencias: {{$address ->references}}</p>
            <p class="card-text"> ID Cliente: {{$address ->client_id}}</p>
        </div>
       
    </div>


</div>

@endsection