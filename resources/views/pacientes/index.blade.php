<!-- //carpeta plantilla , pages , examples, projects.html y cortar y pegar solo tabla -->

<!-- //aplicar herencia -->
<!-- (incluir todo de la plantilla que se esta usando) -->

@extends('prueba')

<!-- //toma valor yield -->
@section('contenido')

<div class="row">
    <div class="col-lg-11">
        <h2>Listado de pacientes</h2>
    </div>

    <div class="col-lg-1">
        <a href="/pacientes/crear" class="btn btn-success">Registrar</a>
    </div>
</div>

<table class="table table-striped projects">
              <thead>
                  <tr>
                     
                      <th >
                          documento
                      </th>
                      <th >
                          tipo documento
                      </th>
                      <th>
                          nombre
                      </th>
                      <th>
                        apellidos
                      </th>
                      <th>
                        direccion
                      </th>
                      <th>
                        telefono
                      </th>
                      <th>
                        genero
                      </th>
                      <th>
                        fechaNacimiento
                      </th>
                      <th>
                        estado civil
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
                  @foreach($pacientes as $paciente)
                <tr>
                  <td>{{$paciente->documento}}</td>
                  <td>{{$paciente->tipoDOcumento}}</td>
                  <td>{{$paciente->nombres}}</td>
                  <td>{{$paciente->apellidos}}</td>
                  <td>{{$paciente->direccion}}</td>
                  <td>{{$paciente->telefono}}</td>
                  <td>{{$paciente->genero}}</td>
                  <td>{{$paciente->fechaNacimiento}}</td>
                  <td>{{$paciente->estadoCivil}}</td>
                 

                      <td class="project-actions text-right">
                          <form action="{{ url('/pacientes/eliminar',$paciente) }}" method="POST">
                          @csrf
                          <a class="btn btn-info btn-sm" href="{{ url('/pacientes/editar',$paciente->id) }}">
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