@extends('layout.main_template')

@section('content') 

@include('fragments.formstyles')

<div class="container mt-5"> 
    <br>
    <h1 class="text-center mb-4">Registrar Clientes</h1>
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
       
    <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for=""> Nombre del Cliente</label>
        <input type="text" name="name">
    
        <label for=""> Apellido Paterno </label> <br>
        <input type="text" name="last_name">
    
        <label for=""> Apellido Materno </label>
        <input type="text" name="second_last_name">
    
        <label for=""> Email </label>
        <input type="email" name="email">
        
        <label for=""> Telefono </label>
        <input type="number" name="phone">
    
        <button class="btn btn-secondary" type="submit"> Registrar </button>
       
    </form>
 </div> 
@endsection