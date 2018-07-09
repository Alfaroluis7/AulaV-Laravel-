 <!--Inicio del Modal Agregar -->
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
                      <input class="rounded border border-secondary" type="date" name="Inicio">
                      <br>
                      <label for="input_01">Fecha Finalizacion:</label>
                      <input class="rounded border border-secondary" type="date" name="Finalizacion">
                      <br>
                      <label for="input_01">Costo</label>
                      <input id="costo" type="text" class="border border-secondary form-control{{ $errors->has('costo') ? ' is-invalid' : '' }}" name="costo"  required autofocus>
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
   <!--Fin del Modal Agregar -->
  
  <!--Inicio del Modal Editar-->
      <div class="modal fade bd-example-modal-lg" id="example2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{route('Curso.Add')}}">
                    @csrf
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Nombre del Curso:</label>
                      <input id="nameEdit" type="text" class="border border-secondary form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $curso->nombre}}" required autofocus>
                      </div>
                      <label for="input_01">Fecha Inicio:</label>
                      <input class="rounded border border-secondary" type="date" name="Inicio" id="fechaI">
                      <br>
                      <label for="input_01">Fecha Finalizacion:</label>
                      <input class="rounded border border-secondary" type="date" name="Finalizacion" id="fechaF">
                      <br>
                      <label for="input_01">Costo</label>
                      <input id="costo2" type="text" class="border border-secondary form-control{{ $errors->has('costo') ? ' is-invalid' : '' }}" name="costo" value="{{$curso->costo}}"  required autofocus>
                      <div class="form-group">
                      <label for="message-text" class="col-form-label">Descripcion:</label>
                      <input class="border border-secondary form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{$curso->Descripcion}}" required autofocus id="descripcion2" rows="3"></input>
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