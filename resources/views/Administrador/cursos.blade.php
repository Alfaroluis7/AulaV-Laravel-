@extends('layouts.layouts')

@section('content')

@include('alerts.admin')

@if(@Auth::user()->tipoUsuario_id == 3)
<div class="container-fluid">
      <div class="row">
        @include('layouts.admin')
        <main role="main" class="col-xs-4 col-sm-10 col-md-10 col-lg-10  px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cursos</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0 mr-5">
                <button class="btn btn-outline-secondary " type="button" data-toggle="modal" data-target="#example" data-whatever="@mdo">Agregar Curso</button>
            </div>
          </div>
          
          <div class="container">
          <div class="row">
          <table class="table table-hover">
              <thead>
                  <tr>
                  <th scope="col">Curso</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Costo</th>
                  <th scope="col">Fecha Inicio</th>
                  <th scope="col">Fecha Finalizacion</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                  </tr>
              </thead>
              @foreach($cursos as $curso)
              <tbody>
                  <tr>
                  <td>{{ $curso->nombre }}</td>
                  <td>{{ $curso->Descripcion }}</td>
                  <td>{{$curso->costo}}</td>
                  <td>{{ $curso->Fecha_Inicio}}</td>
                  <td>{{ $curso->Fecha_Fin}}</td>
                  <td>
                    <form action="{{route('Curso.Edit', $curso->id)}}">
                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#example2" data-whatever="@mdo" value="{{$curso->id}}">
                    @csrf
                        <svg id="i-edit" viewBox="0 0 32 32" width="19" height="19" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" /> 
                        </svg>
                    </button>
                    </form>
                  </td>

                  <td><a href="{{route('EliminarCurso', $curso->id)}}" onclick="return confirm('¿Seguro Desea Eliminar este Curso?')">
                        <button  type="button" class="btn btn-danger">
                          <svg id="i-trash" viewBox="0 0 32 32" width="19" height="19" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                          <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
                          </svg>
                        </button>
                      </a>
                  </td>
                  </tr>
              </tbody>
              @endforeach()
              </table>
              </div>
                <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                <li class="page-item">{{ $cursos->links() }}</li>
                </ul>
                </nav>
              </div>
      </div>
  </div>
           
          
    @endif
   
@include('Administrador.modal')

@endsection

@section('editarC')
<script src="{{asset('js/EditarCurso.js')}}"></script>
@endsection