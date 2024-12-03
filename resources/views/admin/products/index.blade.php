@extends('layout.main_template')

@section('content')
<h2>Productos</h2>

<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-outline-primary" href="{{route('products.create')}}"> Crear Productos</a>
        <a class="btn btn-outline-success" href="{{route('brands.create')}}"> Registrar Marcas</a>
         <a class="btn btn-outline-danger" href="{{route('brands.index')}}"> Ver Marcas</a>

<br>
<br>


<table class="table table-bordered border-primary">
    <thead>
        <th> Nombre del productos </th>
        <th> Marca </th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Accioness </th>
    </thead>

    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{$p->nameProduct}}</td>
            <td>{{$p->brand->brand}}</td>
            <td>{{$p->stock}}</td>
            <td>{{$p->unit_price}}</td>
            <td><img src="/image/products/{{$p ->imagen}}" width="60" alt="producto"></td>
            <td>
                <a class="btn btn-info" href="{{route("products.show", $p)}}"><i class="fa-solid fa-eye"></i></a>
                <a class="btn btn-warning" href="{{route("products.edit", $p)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-danger" href="{{route("products.delete", $p)}}"><i class="fa-solid fa-trash"></i></i> </a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$products->links()}}<!--Genera los enlaces de cada pagina-->
    
    </div>
</div>
@endsection