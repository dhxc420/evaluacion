<?php

namespace App\Http\Controllers;

use App\Models\procedimiento;
use Illuminate\Http\Request;

class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimiento = procedimiento::all();
        // var_dump($categorias); OK

        return view('procedimientos.index')
        //definir una var y le damos un valor para retornar los datos
        ->with('procedimientos', $procedimiento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/procedimientos/crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $procedimiento = new procedimiento([
            
            'nombre' => $request->get('nombre'),
            'precio' => $request->get('precio')
        ]);
        $procedimiento->save();//guarda en la tabla de la base de datos
        return redirect('/procedimientos')->with('success','El procedimiento ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //visualizar la vista editar
         $procedimientos = procedimiento::findOrFail($id); //consultar por un registro por un id con eloquent
         //var datos buscados
return view('procedimientos.editar',compact('procedimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $procedimiento = procedimiento::findOrFail($id); //consultar por un registro por un id con eloquent
        //actualizar los datos en el modelo
       
        $procedimiento->nombre = $request->nombre;
        $procedimiento->precio = $request->precio;
         //actualizar en la base de datos
         $procedimiento->update();

         //redirigir hacia el metodo index del controlador()
         return redirect('/procedimientos'); //route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\procedimiento  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(procedimiento $procedimientos)
    {
         //borrar fisicamente el registro
         $procedimientos->delete();
          return redirect('/procedimientos');
    }
}
