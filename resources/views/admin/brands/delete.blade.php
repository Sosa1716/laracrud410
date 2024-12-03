@extends('layout.main_template')

@section('content')

<style>
    button{
        width: 120px;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: inline-block;
        color: #fff;
        background-color: #000;
    }

    h3{
        width: 100%;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
        margin-bottom: 20px;
    }

</style>

<div class="container mt-5">
    
    <h3 class="text-center">¿Estas seguro que quieres eliminar
        la Marca {{$brand->brand}}?</h3>    
   
       <div class="d-flex justify-content-center gap-3">
        
        <form action="{{route("brands.index")}}">
            <button type="submit" class="btn btn-success">No</button>
        </form>
       
        <form action="{{route("brands.destroy", $brand->id)}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn btn-info"> Si</button> <!-- redireccionamos a destroy y elimina -->
        </form>
        </div> 
</div>




@endsection