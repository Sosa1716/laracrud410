@extends('layout.main_template')

@section('content')

<div class="container sm">
    <br><br>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"> Detalles del producto </h1>
            <p class="card-text"> Producto: {{$product ->nameProduct}}</p>
            <p class="card-text"> Cantidad: {{$product ->stock}}</p>
            <p class="card-text"> Precio: {{$product ->unit_price}}</p>
            <p class="card-text"> Imagen: {{$product ->imagen}}</p>
        </div>
    </div>
</div>


<!--Todo show Image-->


@endsection