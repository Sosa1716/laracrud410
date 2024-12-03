@extends('layout.main_template')

@section('content')
<div class="container mt-5">
    <div class="container mt-5">
        <a class="btn btn-secondary" href="{{route('products.index')}}"> Regresar</a>
        <br>
        <br>

        <table class="table">
            <thead>
                <th class="text-center"> Marca </th>
                <th class="text-center">  Accioness </th>
            </thead>
        
            <tbody>
                @foreach ( $brand as $b)
                <tr>
                    <td class="text-center">{{$b->brand}}</td>
                    
                  
                    <td  style="display: flex; gap: 5px;" >
                    
                        <a class="btn btn-warning " href="{{route("brands.edit", $b)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("brands.delete", $b)}}"><i class="fa-solid fa-trash"></i></i> </a>

                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>

       
    </div>
</div>
@endsection