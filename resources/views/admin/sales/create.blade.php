@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Registro ventas</h1>
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

<form action="{{route('sales.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label for=""> ID Cliente </label> 
    <select name="client_id">
        <option value="">Selecciona. . .</option>
        @foreach ( $clients as $client => $id )
        <option value="{{$id}}">{{$id}}</option>
        @endforeach
       
    </select> <br> <br> 
    
    <label for=""> ID Producto </label> 
    <select name="product_id">
        <option value="">Selecciona. . .</option>
        @foreach ( $products as $product => $id )
        <option value="{{$id}}">{{$id}}</option>
        @endforeach
       
    </select> <br> <br>

    <label for=""> Fecha de Venta </label> <br>
    <input type="date" name="sales_date">

    <button type="submit"> Registrar </button>
   
</form>
</div>    
@endsection