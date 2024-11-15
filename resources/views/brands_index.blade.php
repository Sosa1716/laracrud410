@extends('layout.main_template')

@section('content')
<button><a href="{{route('products.index')}}"> Regresar</a></button>

<table>
    <thead>
        <th> Marca </th>
        <th> descripcion </th>
        <th> Accioness </th>
    </thead>

    <tbody>
        @foreach ( $brand as $b)
        <tr>
            <td>{{$b->brand}}</td>
            <td>{{$b->descripcion}}</td>
          
            <td>
                
                <button><a href="{{route("brands.edit", $b)}}">Editar</a></button>
                <form action="{{route("brands.destroy", $b)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit"> Eliminar </a></button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>

@endsection