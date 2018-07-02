@extends('layouts')

@section('content')
     @if (session('status'))
            <div class="alert alert-success"  data-dismiss="alert">
                {{ session('status') }}
            </div>
        @endif

<div class="container-fluid">
      <div class="row">
        <nav class="col- col-sm-2 col-md-2 col-lg-2 d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('Cursos.Admin') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Cursos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('examenes.Admin') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Examenes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profesores.Admin') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Profesores
                </a>
              </li>
            </ul>
          </div>
        </nav>
  
                     
                
        <main role="main" class="col-xs-2 col-sm-10 col-md-10 col-lg-10  px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
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
                  <td>{{ $curso->Fecha_Inicio}}</td>
                  <td>{{ $curso->Fecha_Fin}}</td>
                  <td><button type="button" class="btn btn-warning">Editar</button></td>
                  <td><button type="button" class="btn btn-danger">Eliminar</button></td>
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

          


    <div class="modal fade bd-example-modal-lg" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nuevo Curso</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{route('Curso.Add')}}">
                    @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nombre del Curso:</label>
                      <input id="name" type="text" class="border border-secondary form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    <label for="input_01">Fecha Inicio:</label>
                    <input class="rounded border border-secondary" type="date" name="bday">
                    <br>
                    <label for="input_01">Fecha Finalizacion:</label>
                    <input class="rounded border border-secondary" type="date" name="bday">
                      <div class="form-group">
                      <label for="message-text" class="col-form-label">Descripcion:</label>
                      <textarea class="border border-secondary form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required autofocus id="descripcion" rows="3"></textarea>
                     
                 
                     
                        
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary">Guardar Curso</button>
                    </div>
                    </div>
                </form>
                
              </div>
        </div>
      </div>
   </div>

  
  


@endsection
