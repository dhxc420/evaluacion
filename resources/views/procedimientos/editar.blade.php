@extends('prueba');

@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Editar procedimiento</h2>
    </div>

    <div class="col-lg-1">
        <a  class="btn btn-success" href="procedimientos/">Atras</a>
    </div>
</div>
<form action="{{ url('/procedimientos/actualizar', $procedimientos->id) }}" method="POST">
    <!-- ´para que laravel haga insercion
    (proteger falsificacion de peticiones en sitio en sitio cruzados= otro form igual no puede hacer peticion)-->
    @csrf
    
    <div class="form-group">
        <label for="nombre">nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digitar nombre" value="{{ $procedimientos->nombre }}">
    </div>
    <div class="form-group">
        <label for="precio">precio:</label>
        <input type="text" class="form-control" id="precio" name="precio" placeholder="Digitar precio" value="{{ $procedimientos->precio }}">
    </div>
    
    

    
    @method('post')
    <button type="submit" class="btn  btn-danger">actualizar</button>
</form>
@endsection