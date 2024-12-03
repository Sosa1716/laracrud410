@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-secondary" href="{{route('clients.index')}}"> Regresar</a>
        <br>
        <br>

        <table class="table">
            <thead>
                <th> Calle </th>
                <th> Numero Interior </th>
                <th> Numero Exterior </th>
                <th> Vecindario </th>
                <th> Ciudad </th>
                <th> Estado </th>
                <th> Pais </th>
                <th> Codigo Postal </th>
                <th> Referencias </th>
                <th> ID CLiente </th>
                <th> Acciones </th>
            </thead>
        
            <tbody>
                @foreach ( $addresses as $a)
                <tr>
                    <td>{{$a->street}}</td>
                    <td>{{$a->internal_num}}</td>
                    <td>{{$a->external_num}}</td>
                    <td>{{$a->neighborhood}}</td>
                    <td>{{$a->town}}</td>
                    <td>{{$a->state}}</td>
                    <td>{{$a->country}}</td>
                    <td>{{$a->postal_code}}</td>
                    <td>{{$a->references}}</td>
                    <td>{{$a->client_id}}</td>                
                  
                    <td>
                        <a class="btn btn-info" href="{{route("addresses.show", $a)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{route("addresses.edit", $a)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("addresses.delete", $a)}}"><i class="fa-solid fa-trash"></i></i> </a>                  
                      </td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>
</div>
@endsection