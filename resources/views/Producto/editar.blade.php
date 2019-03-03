<button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modalEditar{{$produc->id}}" ><span class="fa fa-edit"></span></button>

<div class="modal fade" id="modalEditar{{$produc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
        <form method="POST" action="{{ route('producto/update', $produc) }}">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">            
                @csrf @method('PUT')
                  <div class="row">
                    <label class="col-sm-3 text-right">Categoría</label>
                    <div class="col-sm-9">
                        <input id="categoria_e" name="categoria_e" type="text" class="form-control" value="{{$produc->categoria}}" placeholder="Ej: Lácteos" required autofocus>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Código</label>
                    <div class="col-sm-9">
                        <input id="codigo_e" name="codigo_e" type="text" class="form-control" value="{{$produc->codigo}}" placeholder="Ej: L123" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Nombre</label>
                    <div class="col-sm-9">
                        <input id="nombre_e" name="nombre_e" type="text" class="form-control" value="{{$produc->nombre}}"placeholder="Ej: Yogurt" required >
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Marca</label>
                    <div class="col-sm-9">
                        <input id="marca_e" name="marca_e" type="text" class="form-control" value="{{$produc->marca}}" placeholder="Ej: Gloria" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Modelo</label>
                    <div class="col-sm-9">
                        <input id="modelo_e" name="modelo_e" type="text" class="form-control" value="{{$produc->modelo}}" placeholder="Ej: Fresa" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <label class="col-sm-3 text-right">Descripción</label>
                    <div class="col-sm-9">
                      <textarea id="descripcion_e" name="descripcion_e" class="form-control" rows="3" required>{{$produc->descripcion}}</textarea>
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