@extends('vistasadmin.indexadmin')
@section('tituloadmin', 'Facturación')

@section('contenidoadministrable')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Facturación</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('administrable') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Facturación</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
       <!-- <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAgregar"> +
                            Agregar Nuevo</button>
                    </div>

                </div>
            </div>
             /.container-fluid
        </section> -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">FACTURACIÓN</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Codigo Factura</th>
                                            <th>Plan</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin</th>
                                            <th>Estado</th>
                                            <th>Importe</th>
                                            <th>Detalle</th>
                                            <th>Descuento</th>
                                            <th>Metodo Pago</th>
                                            <th>Empresa</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($facturacion as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->codigoLetra}} {{ $value->codigoFactura}} </td>
                                                <td>{{ $value->nombrePlan}}</td>
                                                <td>{{ $value->fechaEmision }}</td>
                                                <td>{{ $value->fechaPago }}</td>
                                                <td>
                                                    
                                                    @if ( $value->estado == '1')
                                                        <span class="badge badge-success">En curso</span>
                                                    
                                                    @endif
                                                    @if ( $value->estado == '2')
                                                    <span class="badge badge-danger">En deuda</span>
                                                    @endif
                                                   </td>
                                                <td>{{ $value->importe }}</td>
                                                <td>{{ $value->detalle }}</td>
                                                <td>{{ $value->descuento }}</td>
                                                <td>{{ $value->tipo }}</td>
                                                <td>{{ $value->nombreEmpresa }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                       <!-- <tr>
                                            <th style="width:10px">#</th>
                                            <th>Nombre de Rubro</th>
                                            <th>Detalles</th>
                                            <th>Opciones</th>
                                        </tr> -->
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
    <!--Modales -->
    <!-- Modal Agregar
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Agregar Nuevo Rubro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('rubros.store') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" id="formGroupExampleInput"
                                    placeholder="Ingrese el nombre del rubro" required>
                            </div>
                        </div>-->
                        <!--<div class="form-group row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Estado</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="opcion" id="inlineRadio1"
                                                            value="1" active>
                                                        <label class="form-check-label" for="inlineRadio1">Activo</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="opcion" id="inlineRadio2"
                                                            value="0">
                                                        <label class="form-check-label" for="inlineRadio2">Inactivo</label>
                                                    </div>
                                                </div>
                                            </div> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Editar-->

    <!--Modal Elimiar -->

    @include('vistasadmin.modulosadmin.llamadoscript.scripttable')
   <!-- <script src="{{ asset('jsadmin/empresa.js') }}"></script>-->
    
@endsection