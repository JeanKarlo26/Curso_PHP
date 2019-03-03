<button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modalNuevo">Nuevo Usuario <i class="fa fa-plus-circle"></i> </button>

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <form method="POST" action="{{ route('user/post') }}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo</h5>
                @csrf
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                  <div class="row">
                    <label class="col-sm-3">Nombre</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                      </div>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Ej: Juan Pérez" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3">Correo</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-at "></i> </span>
                      </div>
                      <input id="email" type="email" placeholder="Ej: Juan123@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3">Contraseña</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                      </div>
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="******" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3">Confirme Contraseña</label>
                    <div class="input-group col-sm-9">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                      </div>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-primary" value="Guardar"></input>
            </div>
        </form>
    </div>
  </div>
</div>