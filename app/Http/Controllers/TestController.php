<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class TestController extends Controller
{
    function test(){
        // 1.- Conectar con el modelo que conecta a la base de datos

        $client = Client::find(1);
        // var_dump($client); //imprimir todos los datos

        // 2.- retornar una vista con la informacion del modelo
        return view('testdb', ['client' => $client]);
    }
}
