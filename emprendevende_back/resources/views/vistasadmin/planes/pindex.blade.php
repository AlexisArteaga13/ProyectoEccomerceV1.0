@extends('vistasadmin.indexadmin')
@section('tituloadmin', 'Planes')
@section('contenidoadministrable')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Planes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('administrable') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Planes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAgregar"> +
                            Agregar Nuevo</button>
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
                                <h3 class="card-title">Planes</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Plan</th>
                                            <th>Slogan</th>
                                            <th>S/. Mensual</th>
                                            <th>S/. Anual</th>
                                            <th>detalle/th>
                                            <th>Situación</th>
                                            <th>Opciones</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($planes as $key=>$value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->nombrePlan }}</td>
                                                <td>{{ $value->slogan }}</td>
                                                <td>{{ $value->costoMensual }}</td>
                                                <td>{{ $value->costoAnual }}</td>
                                                <td>{{ $value->detalle }}</td>
                                                <td>
                                                    @if ($value->estado == '1')
                                                        <button class="btn btn-success">Activo</button>
                                                    @else
                                                        <button class="btn btn-danger">Inactivo</button>
                                                    @endif

                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-warning"
                                                        data-toggle="modal" data-id="{{ $value->idPLAN }}"
                                                        data-nombre="{{ $value->nombrePlan }}"
                                                        data-slogan="{{ $value->slogan }}"
                                                        data-mensual="{{ $value->costoMensual }}"
                                                        data-anual="{{ $value->costoAnual }}"
                                                        data-detalle="{{ $value->detalle }}"
                                                        data-estado="{{ $value->estado }}"
                                                        data-target="#ModalEditar">Editar</button>
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#ModalEliminar-{{ $value->idPLAN }}">Eliminar</button>
                                                </td>

                                            </tr>
                                            @include('vistasadmin.planes.modal')
                                        @endforeach

                                    </tbody>
                                   <!-- <tfoot>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Nombre de Rubro</th>
                                            <th>Detalles</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>-->
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
    <!-- Modal Agregar-->
    <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Agregar Nuevo Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('planes.store') }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" id="formGroupExampleInput"
                                    placeholder="Ingrese el nombre del plan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Slogan</label>
                            <div class="col-sm-10">
                                <input type="text" name="slogan" class="form-control" id="slogan"
                                    placeholder="Ingrese slogan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Detalle</label>
                            <div class="col-sm-10">
                                <input type="text" name="detalle" class="form-control" id="detalle"
                                    placeholder="Ingrese detalle del plan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">S/. Mensual</label>
                            <div class="col-sm-10">
                                <input type="text" name="mensual" class="form-control" id="mensual"
                                    placeholder="Ingrese costo mensual" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">S/. Anual</label>
                            <div class="col-sm-10">
                                <input type="text" name="anual" class="form-control" id="anual"
                                    placeholder="Ingrese costo anual" required>
                            </div>
                        </div>
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
    <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('planes.update') }}" method="post">

                        @csrf
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Slogan</label>
                            <div class="col-sm-10">
                                <input type="text" name="slogan" class="form-control" id="slogan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Detalle</label>
                            <div class="col-sm-10">
                                <input type="text" name="detalle" class="form-control" id="detalle">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">S/. Mensual</label>
                            <div class="col-sm-10">
                                <input type="text" name="mensual" class="form-control" id="mensual">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">S/. Anual</label>
                            <div class="col-sm-10">
                                <input type="text" name="anual" class="form-control" id="anual">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estado" id="opcion1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Activo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estado" id="opcion2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Inactivo</label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal Elimiar -->

    @include('vistasadmin.modulosadmin.llamadoscript.scripttable')
    <script src="{{ asset('jsadmin/plan.js') }}"></script>
@endsection