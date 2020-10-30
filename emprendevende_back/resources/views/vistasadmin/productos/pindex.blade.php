@extends('vistasadmin.indexadmin')
@section('tituloadmin', 'Productos')
@section('styles')
    <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" media="all"
        rel="stylesheet" type="text/css" />
    <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
    <!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you 
                                                wish to resize images before upload. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/piexif.min.js"
        type="text/javascript"></script>
    <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
                                                This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/sortable.min.js"
        type="text/javascript"></script>
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
        $("#imgfrontal").fileinput({
            showUpload: false,
            initialPreviewData: true,
            previewFileType: 'any'
        });
        $("#imgposterior").fileinput({
            showUpload: false,
            initialPreviewData: true,
            previewFileType: 'any'
        });
        $("#imgizquierda").fileinput({
            showUpload: false,
            initialPreviewData: true,
            previewFileType: 'any'
        });
        $("#imgderecha").fileinput({
            showUpload: false,
            initialPreviewData: true,
            previewFileType: 'any'
        });
        $("#imgsuperior").fileinput({
            showUpload: false,
            initialPreviewData: true,
            previewFileType: 'any'
        });
        $("#imginferior").fileinput({
            showUpload: false,
            initialPreviewData: true,
            previewFileType: 'any'
        });

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
                        <h1>Productos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('administrable') }}">Inicio</a></li>
                            <li class="breadcrumb-item active">Productos</li>
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
            </div>
            <!-- /.container-fluid -->
        </section>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Productos</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width:10px">#</th>
                                            <th>Producto</th>
                                            <th>Categoria</th>
                                            <th>Empresa</th>
                                            <th>Precio</th>
                                            <th>Marca</th>
                                            <th>Img. Frontal</th>
                                            <th>Img. Posterior</th>
                                            <th>Img. Izquiera</th>
                                            <th>Img. Derecha</th>
                                            <th>Img. Superior</th>
                                            <th>Img. Inferior</th>
                                            <th>Peso</th>
                                            <th>Stock</th>
                                            <th>Unidad</th>
                                            <th>Descripción</th>
                                            <th>Vistas</th>
                                            <th>Calificación</th>
                                            <th>Situación</th>
                                            <th>Opciones</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($productos as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $value->nombreProducto }}</td>
                                                <td>{{ $value->nombreCategoria }}</td>
                                                <td>{{ $value->nombreEmpresa }}</td>
                                                <td>{{ $value->precio }}</td>
                                                <td>{{ $value->marca }}</td>
                                                <td>
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_f) }}"
                                                        class="img-fluid img-thumbnail" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_p) }}"
                                                        class="img-fluid img-thumbnail" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_iz) }}"
                                                        class="img-fluid img-thumbnail" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_d) }}"
                                                        class="img-fluid img-thumbnail" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_s) }}"
                                                        class="img-fluid img-thumbnail" alt="">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('../storage/app/' . $value->imagen_in) }}"
                                                        class="img-fluid img-thumbnail" alt="">
                                                </td>
                                                <td>{{ $value->peso }}</td>
                                                <td>{{ $value->stock }}</td>
                                                <td>{{ $value->unidad }}</td>
                                                <td>{{ $value->descripcion }}</td>
                                                <td>{{ $value->vistas }}</td>
                                                <td>{{ $value->calificacion }}</td>
                                                <td>
                                                    @if ($value->estado == '1')
                                                        <button class="btn btn-success">Activo</button>

                                                        @if ($value->destacado == '0' || $value->destacado == NULL )
                                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#ModalDestacar-{{ $value->idPRODUCTO }}">Destacar</button>
                                                        @else
                                                            <button class="btn btn-success">Destacado</button>
                                                        @endif
                                                    @else
                                                        <button class="btn btn-danger">Inactivo</button>
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-warning"
                                                        data-toggle="modal" data-id="{{ $value->idPRODUCTO }}"
                                                        data-nombre="{{ $value->nombreProducto }}"
                                                        data-estado="{{ $value->estado }}"
                                                        data-precio="{{ $value->precio }}"
                                                        data-descripcion="{{ $value->descripcion }}"
                                                        data-marca="{{ $value->marca }}"
                                                        data-categoria="{{ $value->idCategoria }}"
                                                        data-empresaid="{{ $value->idEmpresa }}"
                                                        data-empresanombre="{{ $value->nombreEmpresa }}"
                                                        data-peso="{{ $value->peso }}" data-stock="{{ $value->stock }}"
                                                        data-unidad="{{ $value->unidad }}"
                                                        data-vistas="{{ $value->vistas }}"
                                                        data-calificacion="{{ $value->calificacion }}"
                                                        data-imgfrontal="{{ $value->imagen_f }}"
                                                        data-imgposterior="{{ $value->imagen_p }}"
                                                        data-imgizquierda="{{ $value->imagen_iz }}"
                                                        data-imgderecha="{{ $value->imagen_d }}"
                                                        data-imgsuperior="{{ $value->imagen_s }}"
                                                        data-imginferior="{{ $value->imagen_in }}"
                                                        data-target="#ModalEditar">Editar</button>
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                        data-target="#ModalEliminar-{{ $value->idPRODUCTO }}">Eliminar</button>
                                                </td>

                                            </tr>
                                            @include('vistasadmin.productos.modal')
                                            @include('vistasadmin.productos.mdestacar')
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Agregar Nuevo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('productos.store') }}" method="post" accept-charset="UTF-8"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" id="formGroupExampleInput"
                                    placeholder="Ingrese el nombre del producto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">
                                <select id="categoria" name="categoria" class="form-control">
                                    <option value="" selected disabled>Eliga una Categoria</option>
                                    @foreach ($categorias as $c)
                                        <option value="{{ $c->idCategoria }}">{{ $c->nombreCategoria }}</option>
                                    @endforeach
                                </select>
                                <!--<input type="text" name="rubro" class="form-control" id="rubro">-->
                            </div>
                        </div>
                        @can('administrador')
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Empresa</label>
                                <div class="col-sm-10">


                                    <select id="empresa" name="empresa" class="form-control">
                                        <option value="" selected disabled>Eliga una Empresa</option>
                                        @foreach ($empresas as $e)
                                            <option value="{{ $e->idEmpresa }}">{{ $e->nombreEmpresa }}</option>
                                        @endforeach
                                    </select>
                                    <!--<input type="text" name="rubro" class="form-control" id="rubro">-->
                                </div>
                            </div>
                        @endcan
                        @can('vendedor')
                            @foreach ($empresas as $e)
                                <input type="hidden" name="empresa" id="empresa" value="{{ $e->idEmpresa }}">
                            @endforeach
                            </select>
                        @endcan
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-6">
                                <input type="text" name="precio" class="form-control" id="precio"
                                    placeholder="Ingrese precio del producto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Marca</label>
                            <div class="col-sm-10">
                                <input type="text" name="marca" class="form-control" id="marca"
                                    placeholder="Ingrese marca del producto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Frontal</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgfrontal" class="form-control" id="imgfrontal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Posterior</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgposterior" class="form-control" id="imgposterior">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Izquierda</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgizquierda" class="form-control" id="imgizquierda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Derecha</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgderecha" class="form-control" id="imgderecha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Superior</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgsuperior" class="form-control" id="imgsuperior">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Inferior</label>
                            <div class="col-sm-10">
                                <input type="file" name="imginferior" class="form-control" id="imginferior">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Peso</label>
                            <div class="col-sm-10">
                                <input type="text" name="peso" class="form-control" id="peso"
                                    placeholder="Ingrese peso del producto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="number" name="stock" min="0" class="form-control" id="stock"
                                    placeholder="Ingrese stock del producto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Unidad</label>
                            <div class="col-sm-10">
                                <input type="text" name="unidad" class="form-control" id="unidad"
                                    placeholder="Ingrese unidad del producto" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion" class="form-control" id="descripcion"
                                    placeholder="Ingrese descripción del producto" required>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('productos.update') }}" method="post" accept-charset="UTF-8"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Categoria</label>
                            <div class="col-sm-10">
                                <select id="categoria" name="categoria" class="form-control">
                                    @foreach ($categorias as $c)
                                        <option value="{{ $c->idCategoria }}">{{ $c->nombreCategoria }}</option>
                                    @endforeach
                                </select>
                                <!--<input type="text" name="rubro" class="form-control" id="rubro">-->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" name="empresanombre" class="form-control" id="empresanombre" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-6">
                                <input type="text" name="precio" class="form-control" id="precio">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Marca</label>
                            <div class="col-sm-10">
                                <input type="text" name="marca" class="form-control" id="marca">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Frontal</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgfrontal" class="form-control" id="imgfrontal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Posterior</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgposterior" class="form-control" id="imgposterior">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Izquierda</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgizquierda" class="form-control" id="imgizquierda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Derecha</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgderecha" class="form-control" id="imgderecha">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Superior</label>
                            <div class="col-sm-10">
                                <input type="file" name="imgsuperior" class="form-control" id="imgsuperior">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Img Inferior</label>
                            <div class="col-sm-10">
                                <input type="file" name="imginferior" class="form-control" id="imginferior">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Peso</label>
                            <div class="col-sm-10">
                                <input type="text" name="peso" class="form-control" id="peso">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="text" name="stock" class="form-control" id="stock">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Unidad</label>
                            <div class="col-sm-10">
                                <input type="text" name="unidad" class="form-control" id="unidad">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="descripcion" class="form-control" id="descripcion"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Vistas</label>
                            <div class="col-sm-10">
                                <input type="text" name="vistas" class="form-control" id="vistas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Calificación</label>
                            <div class="col-sm-10">
                                <input type="text" name="calificacion" class="form-control" id="calificacion">
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
    <script src="{{ asset('jsadmin/productos.js') }}"></script>

@endsection
