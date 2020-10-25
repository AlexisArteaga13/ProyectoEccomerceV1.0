@extends('vistasadmin.indexadmin')
@section('tituloadmin', 'Empresas')
@section('styles')
<!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you 
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x. You can also use the bootstrap js 
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js"></script>
<!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/fa/theme.js"></script>
<!-- optionally if you need translation for your language then include  locale file as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/locales/es.js"></script>
<script>
//$("#logo2").fileinput();

// with plugin options
$("#logo2").fileinput({ 
    showUpload:false, initialPreviewData: true, previewFileType:'any'});

</script>
@endsection
@section('contenidoadministrable')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Empresas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('administrable') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Empresas</li>
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
                                <h3 class="card-title">Empresas</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Nombre de Empresa</th>
                                            <th>Cuenta Transferencia</th>
                                            <th>Descripción</th>
                                            <th>Visión</th>
                                            <th>Misión</th>
                                            <th>Logo</th>
                                            <th>RUC</th>
                                            <th>Telefono</th>
                                            <th>Razón Social</th>
                                            <th>Fecha de Registro</th>
                                            <th>Calificación</th>
                                            <th>Rubro</th>
                                            <th>Encargado</th>
                                            <th>Situación</th>
                                            <th>Opciones</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($empresas as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->nombreEmpresa }}</td>
                                                <td>{{ $value->cuenta_transferencia }}</td>
                                                <td>{{ $value->descripcion }}</td>
                                                <td>{{ $value->vision }}</td>
                                                <td>{{ $value->mision }}</td>
                                                <td>
                                                <img src="{{asset('../storage/app/'.$value->logo_img_empresa)}}" class="img-fluid img-thumbnail" alt="">
                                                
                                                <!--<img src="{{Storage::url($value->logo_img_empresa)}}" class="img-fluid img-thumbnail" alt="">-->
                                               
                                                </td>
                                                <td>{{ $value->ruc }}</td>
                                                <td>{{ $value->telefono }}</td>
                                                <td>{{ $value->razonSocial }}</td>
                                                <td>{{ $value->fechaRegistro }}</td> 
                                                <td>{{ $value->calificacion }}</td> 
                                                <td>{{ $value->nombreRubro }}</td> 
                                            <td>{{ $value->name }} {{$value->apellidos}}</td> 
                                                <td>
                                                    @if ($value->estado == '1')
                                                        <button class="btn btn-success">Activo</button>
                                                    @else
                                                        <button class="btn btn-danger">Inactivo</button>
                                                    @endif 

                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-warning"
                                                        data-toggle="modal" data-id="{{ $value->idEmpresa }}"
                                                        data-nombre="{{ $value->nombreEmpresa }}"
                                                        data-estado="{{ $value->estado }}"
                                                        data-cuenta="{{ $value->cuenta_transferencia }}"
                                                        data-descripcion="{{ $value->descripcion }}"
                                                        data-vision="{{ $value->vision }}"
                                                        data-mision="{{ $value->mision }}"
                                                        data-logo="{{ $value->logo_img_empresa }}"
                                                        data-ruc="{{ $value->ruc }}"
                                                        data-telefono="{{ $value->telefono }}"
                                                        data-razonsocial="{{ $value->razonSocial}}"
                                                        data-fecha="{{ $value->fechaRegistro }}"
                                                        data-calificacion="{{ $value->calificacion }}"
                                                        data-rubro="{{ $value->idRubro }}"
                                                        data-encargado="{{ $value->name }} {{$value->apellidos}}"
                                                        data-target="#ModalEditar">Editar</button>
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#ModalEliminar-{{ $value->idEmpresa }}">Eliminar</button>
                                                </td>

                                            </tr>
                                            @include('vistasadmin.empresas.modal')
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
    <!-- Modal Agregar-->
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Rubro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('empresas.update') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Encargado</label>
                            <div class="col-sm-10">
                                <input type="text" name="encargado" class="form-control" id="encargado" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Cuenta</label>
                            <div class="col-sm-10">
                                <input type="text" name="cuenta" class="form-control" id="cuenta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion" class="form-control" id="descripcion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Visión</label>
                            <div class="col-sm-10">
                                <input type="text" name="vision" class="form-control" id="vision">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Mision</label>
                            <div class="col-sm-10">
                                <input type="text" name="mision" class="form-control" id="mision">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input type="file" name="logo" data-initial-preview="{{Storage::url($value->logo_img_empresa)}}" class="form-control" id="logo2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">RUC</label>
                            <div class="col-sm-10">
                                <input type="text" name="ruc" class="form-control" id="ruc">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                                <input type="text" name="telefono" class="form-control" id="telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Razon Social</label>
                            <div class="col-sm-10">
                                <input type="text" name="razonsocial" class="form-control" id="razonsocial">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Fecha Registro</label>
                            <div class="col-sm-10">
                                <input type="text" name="fecha" class="form-control" id="fecha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Calificación</label>
                            <div class="col-sm-10">
                                <input type="text" name="calificacion" class="form-control" id="calificacion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Rubro</label>
                            <div class="col-sm-10">
                                <select id="rubro" name="rubro" class="form-control">
                                    @foreach ($rubros as $r)
                                        <option value="{{$r->idRubro}}">{{$r->nombreRubro}}</option>
                                    @endforeach
                                   
                                  </select>
                                <!--<input type="text" name="rubro" class="form-control" id="rubro">-->
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
    <script src="{{ asset('jsadmin/empresa.js') }}"></script>
    
@endsection
