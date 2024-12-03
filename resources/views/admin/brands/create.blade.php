@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<div class="container mt-5">
    <br>
    <h1 class="text-center mb-4">Registar Marcas</h1>
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


<form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label for=""> Nombre de la marca </label>
    <input type="text" name="brand">


    <button type="submit"> Registrar </button>
   
</form>
</div>
@endsection