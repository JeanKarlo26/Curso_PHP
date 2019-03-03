<button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modalEditar{{$user->id}}" ><span class="fa fa-edit"></span></button>

<div class="modal fade" id="modalEditar{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <form method="POST" action="{{ route('user/update', $user) }}">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
                
                @csrf @method('PUT')
                  <div class="row">
                    <label class="col-sm-3">Nombre</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                      <input type="text" class="form-control" id="name_e" placeholder="Nombre" value="{{ $user->name }}" name="name_e">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3">Correo</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-at "></i> </span>
                      </div>
                      
                      <input type="email" class="form-control" id="email_e" value="{{ $user->email }}" placeholder="Ej: Juan123@gmail.com" name="email_e">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3">Contraseña</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-key "></i> </span>
                      </div>
                      <input id="password_e" type="password" class="form-control" name="password_e" placeholder="******" >
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3">Confirmación</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-key "></i> </span>
                      </div>
                      
                      <input id="password-confirm_e" type="password" class="form-control" name="password_confirmation">
                    </div>
                  </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        </form>
          
        </div>
      </div>
</div>