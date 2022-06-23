<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = paciente::all();
        // var_dump($categorias); OK

        return view('pacientes.index')
        //definir una var y le damos un valor para retornar los datos
        ->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/pacientes/crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ///llevar los valores de los campos del formulario a un modelo
        $pacientes = new paciente([
            'documento' => $request->get('documento'),
            'tipoDOcumento' => $request->get('tipoDOcumento'),
            'nombres' => $request->get('nombres'),
            'apellidos' => $request->get('apellidos'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'genero' => $request->get('genero'),
            'fechaNacimiento' => $request->get('fechaNacimiento'),
            'estadoCivil' => $request->get('estadoCivil'),
            

        ]);
        $pacientes->save();//guarda en la tabla de la base de datos
        return redirect('/pacientes')->with('success','El paciente ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
         $pacientes = Paciente::findOrFail($id); //consultar por un registro por un id con eloquent
         //var datos buscados
return view('pacientes.editar',compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pacientes = paciente::findOrFail($id); //consultar por un registro por un id con eloquent
        //actualizar los datos en el modelo
        $pacientes->documento = $request->documento;
        $pacientes->tipoDOcumento = $request->tipoDOcumento;
        $pacientes->nombres = $request->nombres;
        $pacientes->apellidos = $request->apellidos;
        $pacientes->direccion = $request->direccion;
        $pacientes->telefono = $request->telefono;
        $pacientes->genero = $request->genero;
        $pacientes->fechaNacimiento = $request->fechaNacimiento;
        $pacientes->estadoCivil = $request->estadoCivil;
       //actualizar en la base de datos
        $pacientes->update();

        //redirigir hacia el metodo index del controlador()
        return redirect('/pacientes'); //route
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $pacientes)
    {
          //borrar fisicamente el registro
         $pacientes->delete();
          return redirect('/pacientes');
         
    }
}

