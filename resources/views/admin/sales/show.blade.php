
@extends('layout.main_template')

@section('content')

<div class="container-sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h2 class="text-center"> Ventas Registro </h2>
            <p class="card-text"> ID cliente: {{$sale->client_id}}</p>
            <p class="card-text"> ID Producto: {{$sale ->product_id}}</p>
            <p class="card-text"> Fecha de Venta: {{$sale ->sales_date}}</p>
        </div>
       
    </div>


</div>

@endsection