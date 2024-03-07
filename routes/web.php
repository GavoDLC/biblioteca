<?php
use App\Models\Empleado;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EmpleadoController;
use Illuminate\Http\Request;


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


Route::get('/empleado/administrar', function (Request $request) {
    $texto=trim($request->get('texto'));

//consultar la informacion de la base de datos en la vista index
//de esta manera agarramos los datos de nuestra BD
//La tabla de la bd se llama empleados
//El modelo Empleado es el que conecta con la tabla 
//de esta manera recupera los datos de la bd
// Obtener el texto de búsqueda
$texto = request()->get('texto', '');

// Obtener la página actual de la consulta
$currentPage = request()->get('page', 1);

// Consultar empleados por nombre o autor
$empleados = Empleado::where('nombre', 'LIKE', '%'.$texto.'%')
            ->orWhere('autor', 'LIKE', '%'.$texto.'%')
            ->orWhere('editorial', 'LIKE', '%'.$texto.'%')
            ->paginate(10, ['*'], 'page', $currentPage);

    //     return view("empleado.index", $datos);
    return view("empleado.administrar", compact(  'empleados','texto'));
});

Route::resource("/empleado",EmpleadoController::class);
