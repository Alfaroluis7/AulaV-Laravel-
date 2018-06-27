@extends('layouts')

@section('content')

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                  <div class="card rounded2 ">
                  
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Cursos
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example" data-whatever="@mdo">Agergar Curso</button>
                            <table class="table table-hover">
                                              <thead>
                                                  <tr>
                                                
                                                  <th scope="col">Curso</th>
                                                  <th scope="col">Descripcion</th>
                                                  <th scope="col">Editar</th>
                                                  <th scope="col">Eliminar</th>
                                                  </tr>
                                              </thead>
                                              @foreach($cursos as $curso)
                                              <tbody>
                                                  <tr>
                                            
                                                  <td>{{ $curso->nombre }}</td>
                                                  <td>{{ $curso->Descripcion }}</td>
                                                  <td><button type="button" class="btn btn-warning">Warning</button></td>
                                                  <td><button type="button" class="btn btn-danger">Danger</button></td>
                                                  </tr>
                                              </tbody>
                                              @endforeach()
                                              </table>
                                      </div>
                                      <nav aria-label="Page navigation example">
                                      <ul class="pagination justify-content-end">
                                      <button id="collappse"></button>
                                      <li>{{ $cursos->links() }}</li>
                                      </ul>
                                    </nav>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               Profesores
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>        
            </div>
          </div>
    
   


      <div class="row ml-5 mt-5">
      <!-- <a class="btn btn-primary" href="{{ url('/') }}">Agergar Curso</a> -->
   

    <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
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
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Descripcion:</label>
                <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion') }}" required autofocus>
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
    </div>
</div>

<script>$(document).ready(function(){
    $("#collappse").click(function(){
        $("#collapseOne").removeClass("show");
    });
});
</script>
@endsection
