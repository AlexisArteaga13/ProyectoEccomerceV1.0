@extends('vistasadmin.indexadmin')
@section('tituloadmin', 'Rubros')
@section('contenidoadministrable')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rubros</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('administrable')}}">Inicio</a></li>
                            <li class="breadcrumb-item active">Rubros</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                    <button type="button" class="btn btn-success"> + Agregar Nuevo</button>
                  </div>
                 
              </div>
          </div><!-- /.container-fluid -->
      </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Rubros</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre de Rubro</th>
                                            <th>Detalles</th>
                                            <th>Opciones</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <tr>
                                        <td>Rubro 1</td>
                                        <td>Mrubro 1 de pruebaa</td>
                                        <td><button type="button" class="btn btn-outline-warning">Editar</button>
                                          <button type="button" class="btn btn-outline-danger">Eliminar</button>
                                        </td>
                                        
                                      </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                          <th>Nombre de Rubro</th>
                                          <th>Detalles</th>
                                          <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@include('vistasadmin.modulosadmin.llamadoscript.scripttable')
@endsection
