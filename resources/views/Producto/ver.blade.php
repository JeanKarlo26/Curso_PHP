<button type="button" class="btn btn-outline-info"  data-toggle="modal" data-target="#modalVer{{$produc->id}}" ><span class="fa fa-eye"></span></button>

<div class="modal fade" id="modalVer{{$produc->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">  
              <div class="row">
                <label class="col-3">Categoría: </label>
                <p class="col-9"><strong>{{$produc->categoria}}</strong></p>
              </div>
              <div class="row">
                <label class="col-3">Código: </label>
                <p class="col-9"><strong>{{$produc->codigo}}</strong></p>
              </div>
              <div class="row">
                <label class="col-3">Nombre: </label>
                <p class="col-9"><strong>{{$produc->nombre}}</strong></p>
              </div>
              <div class="row">
                <label class="col-3">Marca: </label>
                <p class="col-9"><strong>{{$produc->marca}}</strong></p>
              </div>
              <div class="row">
                <label class="col-3">Modelo: </label>
                <p class="col-9"><strong>{{$produc->modelo}}</strong></p>
              </div>
              <div class="row">
                <label class="col-3">Descripción: </label>
                <p class="col-9"><strong>{{$produc->descripcion}}</strong></p>
              </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
        
      </div>
    </div>
</div>
