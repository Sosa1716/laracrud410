@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Informacion de Ventas</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
       <div class="error">
        {{$e}}
       </div>
    @endforeach
@endif

<form action="{{route('sales.update', $sale->id)}}" method="POST">
    @csrf
    @method('PUT')

    
    <label for=""> ID Cliente </label>
    <input type="text" name="client_id" value="{{$sale->client_id}}">

    <label for=""> ID Productos </label>
    <input type="number" name="product_id" value="{{$sale->product_id}}">
    
    <label for=""> Fecha de Venta </label>
    <input type="date" name="sales_date" value="{{$sale->sales_id}}">
    
    
    <button type="submit"> Registrar </button>
   
</form>

@endsection