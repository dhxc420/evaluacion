@extends('prueba');
@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Agregar Nuevo paciente</h2>
    </div>

    <div class="col-lg-1">
        <a href="pacientes/crear" class="btn btn-success">Atras</a>
    </div>
</div>



<form action="" method="post">
    <!-- ´para que laravel haga insercion
    (proteger falsificacion de peticiones en sitio en sitio cruzados= otro form igual no puede hacer peticion)-->
    @csrf
    <div class="form-group">
        <label for="documento">documento:</label>
        <input type="text" class="form-control" id="documento" name="documento" placeholder="Digitar docuemento" >
    </div>
    <div class="form-group">
        <label for="tipoDOcumento">tipoDOcumento:</label>
        <input type="text" class="form-control" id="tipoDOcumento" name="tipoDOcumento" placeholder="Digitar tipoDOcumento" >
    </div>
    <div class="form-group">
        <label for="nombres">nombres:</label>
        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Digitar nombres" >
    </div>
    <div class="form-group">
        <label for="apellidos">apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Digitar apellidos" >
    </div>
    <div class="form-group">
        <label for="direccion">direccion:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Digitar direccion" >
    </div>
    <div class="form-group">
        <label for="telefono">telefono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Digitar telefono" >
    </div>
   
    <div class="form-group">
        <label for="genero">genero:</label>
        <input type="text" class="form-control" id="genero" name="genero" placeholder="Digitar genero" >
    </div>
    <div class="form-group">
        <label for="fechaNacimiento">fechaNacimiento:</label>
        <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Digitar fechaNacimiento" >
    </div>
    <div class="form-group">
        <label for="estadoCivil">estadoCivil:</label>
        <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" placeholder="Digitar estadoCivil" >
    </div>
    
   
    @method('post')
    <button type="submit" class="btn  btn-danger">Registrar</button>
</form>
@endsection