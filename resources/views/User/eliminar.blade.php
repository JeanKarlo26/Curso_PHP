<button type="button" class="btn btn-outline-danger"  data-toggle="modal" data-target="#modalEliminar{{$user->id}}" ><span class="fa fa-trash"></span></button>

<div class="modal fade" id="modalEliminar{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <form method="POST" action="{{ route('user/destroy', $user) }}">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">  
              @csrf @method('DELETE')
              <div class="row">  
                <div class="text-danger col-12 text-center"><i class="fa fa-exclamation-triangle" style="height: 100%;"></i> ¿Desea Eliminar al Usuario {{$user->name}}?</div>  
                
              </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>
      </form>
        
      </div>
    </div>
</div>
