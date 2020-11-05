@extends('vistasadmin.indexadmin')
@section('tituloadmin', 'Mi cuenta')

@section('contenidoadministrable')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mi cuenta</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('administrable') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Mi cuenta</li>
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
                                <h3 class="card-title">Configuración de mi cuenta</h3>
                            </div>

                            <!-- /.card-header -->

                            <!-- /.card-body -->
                        </div>
                        <div class="container badge badge-warning">
                            <div class="row">
                                <div class="col-sm-4">
                                    <span> Nombres del usuario: </span>
                                    <p class="text-wrap">{{ $usuario->name }}</p>
                                </div>
                                <div class="col-sm-4">
                                    <span> Apellidos del usuario: </span>
                                    <p class="text-wrap">{{ $usuario->apellidos }}</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <span>Correo electrónico: </span>
                                    <p class="text-wrap">{{ $usuario->email }}</p>
                                </div>
                                <div class="col-sm-4">
                                    <span>DNI: </span>
                                    <p class="text-wrap">
                                        @if ($usuario->dni)
                                            {{ $usuario->dni }}
                                        @else
                                            No hay registro
                                        @endif

                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <span>Tipo de usuario: </span>
                                    <p class="text-wrap">{{ Auth::user()->tieneRol()[0] }}</p>
                                </div>
                                <div class="col-sm-4">
                                    <span>Celular: </span>
                                    <p class="text-wrap">
                                        @if ($usuario->celular)
                                            {{ $usuario->celular }}
                                        @else
                                            No hay registro
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <span>Dirección: </span>
                                    <p class="text-wrap">
                                        @if ($usuario->direccion)
                                            {{ $usuario->direccion }}
                                        @else
                                            No hay registro
                                        @endif
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <span>Fecha de creación: </span>
                                    <p class="text-wrap">
                                        @if ($usuario->created_at)
                                            {{ $usuario->created_at }}
                                        @else
                                            No hay registro
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <span>Foto de perfil: </span>
                                    <p class="text-wrap">
                                        @if ($usuario->avatar)
                                            <div class="text-center">
                                                <img src="{{ $usuario->direccion }}" class="rounded" alt="...">
                                            </div>
                                        @else
                                            No hay registro
                                        @endif
                                    </p>
                                </div>
                                @can('vendedor')


                                    <div class="col-sm-4">
                                        <span>Plan de usuario: </span>
                                        <p class="text-wrap">

                                        <p class="text-wrap">
                                            @if ($usuario->idPlan)
                                                @foreach ($planes as $p)
                                                    @if ($usuario->idPlan == $p->idPLAN)
                                                        {{ $p->nombrePlan }}
                                                    @endif
                                                @endforeach

                                            @else
                                                No hay registro
                                            @endif

                                        </p>
                                        </p>
                                        <a href="{{ route('planes.index') }}" class="badge badge-primary"> Ir a Planes
                                        </a>
                                    </div>
                                @endcan
                            </div>
                           
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
    <!-- Modal Agregar -->
    <div class="modal fade" id="Modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar </h5>
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
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="opcion" id="inlineRadio1" value="1"
                                        active>
                                    <label class="form-check-label" for="inlineRadio1">Activo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="opcion" id="inlineRadio2" value="0">
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
    
    <!-- Modal Editar-->

    <!--Modal Elimiar -->

    @include('vistasadmin.modulosadmin.llamadoscript.scripttable')
    <!-- <script src="{{ asset('jsadmin/empresa.js') }}"></script>-->

@endsection
