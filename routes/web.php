<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EmpleadoController;
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
//esta vista accede a welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});
/*de esta manera difinimos una vista en el navegador
Route::get('/la ruta de nuestro archivo',function(){
    return view('ruta del archivo.nombre del archivo ');
// });*/
// Route::get('/empleado/',function(){
//     return view('empleado.index');
// });
// //para acceder directamente una vez que hemos 
// //definido la ruta en nuestro controlador

// Route::get("/empleado/create",[EmpleadoController::class, "create"]);
//Para acceder a todas las rutas del controlador de una manera
//mas facil se hace de la siguiente manera.
Route::resource("empleado",EmpleadoController::class);