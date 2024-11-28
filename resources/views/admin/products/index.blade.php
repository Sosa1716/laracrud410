@extends('layout.main_template')

@section('content')
<h2> Index Productos</h2>

<button><a href="{{route('products.create')}}"> Crear Productos</a></button>
<button><a href="{{route('brands.create')}}"> Registrar Marcas</a></button>
<button><a href="{{route('brands.index')}}"> Ver Marcas</a></button>

<br>
<br>

<table>
    <thead>
        <th> Nombre del productos </th>
        <th> Marca </th>
        <th> Descripcion</th>
        <th> Cantidad </th>
        <th> Precio </th>
        <th> Imagen </th>
        <th> Accioness </th>
    </thead>

    <tbody>
        @foreach ( $products as $p)
        <tr>
            <td>{{$p->nameProduct}}</td>
            <td>{{$p->brand->brand}}</td>
            <th>{{$p->brand->descripcion}}</th>
            <td>{{$p->stock}}</td>
            <td>{{$p->unit_price}}</td>
            <td><img src="/image/products/{{$p ->imagen}}" width="60" alt="producto"></td>
            <td>
                <button><a href="{{route("products.show", $p)}}">Mostrar</a></button>
                <button><a href="{{route("products.edit", $p)}}">Editar</a></button> 
                <button> <a href="{{route("products.delete", $p)}}"> Eliminar </a></button>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{$products->links()}}<!--Genera los enlaces de cada pagina-->
    
@endsection