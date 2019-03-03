<button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modalNuevo">Nuevo Producto <i class="fa fa-plus-circle"></i> </button>

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <form method="POST" action="{{ route('producto/post') }}">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo</h5>
                @csrf
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                  <div class="row">
                    <label class="col-sm-3 text-right">Categoría</label>
                    <div class="col-sm-9">
                        <input id="categoria" name="categoria" type="text" class="form-control" placeholder="Ej: Lácteos" required autofocus>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Código</label>
                    <div class="col-sm-9">
                        <input id="codigo" name="codigo" type="text" class="form-control" placeholder="Ej: L123" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Nombre</label>
                    <div class="col-sm-9">
                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ej: Yogurt" required >
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Marca</label>
                    <div class="col-sm-9">
                        <input id="marca" name="marca" type="text" class="form-control" placeholder="Ej: Gloria" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Modelo</label>
                    <div class="col-sm-9">
                        <input id="modelo" name="modelo" type="text" class="form-control" placeholder="Ej: Fresa" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Descripción</label>
                    <div class="col-sm-9">
                      <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required></textarea>
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