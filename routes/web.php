<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// get - para obtener
// set - insertar
// ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// ruta de vista de testing
Route::get('/testview', function(){
    return view('testView');
});

Route::get('/texto', function(){

});

Route::get('/echo', function(){
    echo view ('test2');
});

Route::get('/MasRutas', function(){
    return "Podemos tener mas rutas tipo get,POST
    Delete, Patch";
});

Route::get('/custom', function(){
   $msj = "Mensaje desde el servidor";
   $id = "500";
   return view  ('custom', ['msj' => $msj, "identy " => $id, "A" => 29]);
});

Route::get('/contact', function(){
    return view('contacto');
 }) -> name('contact');
 

Route::get('/testdb', [TestController::class, 'test']);
