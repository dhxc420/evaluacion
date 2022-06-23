@extends('prueba');
@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Agregar Nuevo procedimiento</h2>
    </div>

    <div class="col-lg-1">
        <a href="procedimientos/crear" class="btn btn-success">Atras</a>
    </div>
</div>



<form action="" method="post">
    <!-- ´para que laravel haga insercion
    (proteger falsificacion de peticiones en sitio en sitio cruzados= otro form igual no puede hacer peticion)-->
    @csrf
   
    <div class="form-group">
        <label for="nombre">nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digitar nombre" >
    </div>
    <div class="form-group">
        <label for="precio">precio:</label>
        <input type="text" class="form-control" id="precio" name="precio" placeholder="Digitar precio" >
    </div>

    
   
    @method('post')
    <button type="submit" class="btn  btn-danger">Registrar</button>
</form>
@endsection