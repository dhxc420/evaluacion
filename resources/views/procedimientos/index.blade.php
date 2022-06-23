<!-- //carpeta plantilla , pages , examples, projects.html y cortar y pegar solo tabla -->

<!-- //aplicar herencia -->
<!-- (incluir todo de la plantilla que se esta usando) -->

@extends('prueba')

<!-- //toma valor yield -->
@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Listado de procedimientos</h2>
    </div>

    <div class="col-lg-1">
        <a href="/procedimientos/crear" class="btn btn-success">Registrar</a>
    </div>
</div>

<table class="table table-striped projects">
              <thead>
                  <tr>
                     
                     
                      <th >
                          nombre
                      </th>
                      <th>
                          precio
                      </th>
                      
                      <!-- //no se usa -->
                      <!-- <th style="width: 8%" class="text-center">
                          Status
                      </th> -->
                      <th style="width: 28%">
                      </th>
                  </tr>
              </thead>
              <tbody>

              <!-- listar--------------------------------------- -->
                  @foreach($procedimientos as $procedimiento)
                <tr>
                  
                  <td>{{$procedimiento->nombre}}</td>
                  <td>{{$procedimiento->precio}}</td>

                      <td class="project-actions text-right">
                          <form action="{{ url('/procedimientos/eliminar',$procedimiento) }}" method="POST">
                          @csrf
                          <a class="btn btn-info btn-sm" href="{{ url('/procedimientos/editar',$procedimiento->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">
                             <i class="fas fa-trash"> Eliminar</i> 
                          </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>

@endsection