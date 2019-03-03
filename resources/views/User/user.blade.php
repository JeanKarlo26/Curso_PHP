@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-9">Registro <strong>USUARIOS</strong></div>
                        
                        <div class="col-sm-3">
                            @include('User.nuevo')
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-bordered">
              <thead class="thead-dark">
                <tr>
                  
                  <th>NOMBRE</th>
                  <th>CORREO</th>
                  <th width="22%">ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($us as $user) { ?>                          
                    <tr>
                      <td><?php echo $user->name; ?></td>
                      <td><?php echo $user->email; ?></td>
                      <td>
                        <div class="row">
                            <div class="col-4">
                                @include('User.ver')
                            </div>
                            <div class="col-4">
                                @include('User.editar')
                            </div>
                            <div class="col-4">
                                @include('User.eliminar')
                            </div>
                        </div>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
