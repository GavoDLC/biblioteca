<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //consultar la informacion de la base de datos en la vista index
        //de esta manera agarramos los datos de nuestra BD
        //La tabla de la bd se llama empleados
        //El modelo Empleado es el que conecta con la tabla 
        //de esta manera recupera los datos de la bd
        $datos['empleados']=Empleado::paginate(10);
        //pasarle los datos a la vista index
        return view("empleado.index", $datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("empleado.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleado = request()->all();
        //quitamos los datos que no vamos a ocupar 
        //en este case el token del formulario
        $datosEmpleado=request()->except("_token");
        //si existe una foto
        if($request->hasFile('portada')){
            //si hay fotografias alteramos el nombre de ese campo y lo insertamos en public/uploads
            $datosEmpleado['portada']=$request->file('portada')->store('uploads','public');
        }
        //Insertar los datos recibidos en la base de datos
        Empleado::insert($datosEmpleado);
        //de esta manera nos nuestra los datos que estamos enviando en
        //formato json
        return response()->json($datosEmpleado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //recuperar nuevamente los datos
        $empleado=Empleado::findOrFail($id);

        return view("empleado.edit", compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //borramos el id de la base
        Empleado::destroy($id);
        //redireccionamos a una vista despues de hacer el borrado
        return redirect('empleado');

    }
}
