@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-9">Registro <strong>PRODUCTOS</strong></div>
                        
                        <div class="col-sm-3">
                            @include('Producto.nuevo')
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-bordered">
              <thead class="thead-dark">
                <tr>
                  
                  <th>CATEGORÍA</th>
                  <th>CÓDIGO</th>
                  <th>NOMBRE</th>
                  <th>MARCA</th>
                  <th>MODELO</th>
                  <th>DESCRIPCIÓN</th>
                  <th width="22%">ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($producto as $produc) { ?>                          
                    <tr>
                      <td> {{$produc->categoria}} </td>
                      <td> {{$produc->codigo}} </td>
                      <td> {{$produc->nombre}} </td>
                      <td> {{$produc->marca}} </td>
                      <td> {{$produc->modelo}} </td>
                      <td> {{$produc->descripcion}} </td>
                      <td>
                        <div class="row">
                            <div class="col-4">
                                @include('Producto.ver')
                            </div>
                            <div class="col-4">
                                @include('Producto.editar')
                            </div>
                            <div class="col-4">
                                @include('Producto.eliminar')
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
