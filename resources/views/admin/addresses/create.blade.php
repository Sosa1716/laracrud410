@extends('layout.main_template')

@section('content') 

@include('fragments.formstyles')

<div class="container mt-5"> 
    <br>
    <h1 class="text-center mb-4">Registrar Direccion del Cliente</h1>
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
       
    <form action="{{route('addresses.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for=""> Calle</label>
        <input type="text" name="street">
    
        <label for=""> Numero Interior </label> <br>
        <input type="number" name="internal_num">
    
        <label for=""> Numero Exterior</label>
        <input type="number" name="external_num">
    
        <label for=""> Vecindario </label>
        <input type="text" name="neighborhood">
        
        <label for=""> Ciudad </label>
        <input type="text" name="town">
        
        <label for=""> Estado </label>
        <input type="text" name="state">
        
        <label for=""> Pais </label>
        <input type="text" name="country">
        
        <label for=""> Codigo Postal </label>
        <input type="number" name="postal_code">
        
        <label for=""> Referencias </label>
        <input type="text" name="references">

        <label for=""> ID Cliente </label>
        <select name="client_id">
            <option value="">Selecciona. . .</option>
            @foreach ( $clients as $client => $id )
            <option value="{{$id}}">{{$id}}</option>
            @endforeach
           
        </select> 
    
        <button type="submit"> Registrar </button>
       
    </form>
 </div> 
@endsection