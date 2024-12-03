@extends('layout.main_template')

@section('content')
<h2>Ventas</h2>

<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-outline-primary" href="{{route('sales.create')}}"> Crear Ventas</a>

<br>
<br>

<table class="table table-bordered border-primary">
    <thead>
        <th> ID Venta </th>
        <th> ID Cliente </th>
        <th> Id Producto </th>
        <th> Fecha de venta </th>
        <th> Accioness </th>
    </thead>

    <tbody>
        @foreach ($sales as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->client_id}}</td>
            <td>{{$s->product_id}}</td>
            <td>{{$s->sales_date}}</td>
            
            <td>
                <a class="btn btn-info" href="{{route("sales.show", $s)}}"><i class="fa-solid fa-eye"></i></a>
                <a class="btn btn-warning" href="{{route("sales.edit", $s)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-danger" href="{{route("sales.delete", $s)}}"><i class="fa-solid fa-trash"></i></i> </a>                  
              </td>
           
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$sales->links()}}<!--Genera los enlaces de cada pagina-->
    
    </div>
</div>
@endsection