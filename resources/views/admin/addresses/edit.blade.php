@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Direcciones</h1>

@if ($errors->any())
    @foreach ($errors->all() as $e)
       <div class="error">
        {{$e}}
       </div>
    @endforeach
@endif

<form action="{{route('addresses.update', $address->id)}}" method="POST">
    @csrf
    @method('PUT')

    <label for=""> Calle </label>
    <input type="text" name="street" value="{{$address->street}}">

    <label for=""> Numero Interior </label>
    <input type="number" name="internal_num" value="{{$address->internal_num}}">
    
    <label for=""> Numero Exterior </label>
    <input type="number" name="external_num" value="{{$address->external_num}}">
    
    <label for=""> Vecindario </label>
    <input type="text" name="neighborhood" value="{{$address->neighborhood}}">
    
    <label for=""> Ciudad </label>
    <input type="text" name="town" value="{{$address->town}}">
    
    <label for=""> Estado </label>
    <input type="text" name="state" value="{{$address->state}}">
    
    <label for=""> Pais </label>
    <input type="text" name="country" value="{{$address->country}}">
    
    <label for=""> Codigo Postal </label>
    <input type="number" name="postal_code" value="{{$address->postal_code}}">
    
    <label for=""> Referencias </label>
    <input type="text" name="references" value="{{$address->references}}">
    
    <label for=""> Cliente </label>
    <input type="text" name="client_id" value="{{$address->client_id}}">
   
    <button type="submit"> Registrar </button>
   
</form>

@endsection