@extends('vistasadmin.indexadmin')
@section('titulo', 'planes')
@section('contenidoadministrable')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tus Planes</h1>
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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->
                        <h5>Adquiere Un plan</h5>
                        <div class="form-group row">
                                @foreach ($planes as $p)
                                <div class="col-sm-6">
                                    <form action="{{ route('planes.escogerplan', $p->idPLAN) }}" method="POST">
                                        @csrf
                                        <div class="form-check form-check-inline">
                                            <div class="card" style="width: 18rem;">
                                                
                                                @if (Auth::user()->idPlan== $p->idPLAN)
                                                    <h1 class="badge badge-primary ">Plan Actual</h1>
                                                @else
                                                <h1 class="badge badge-warning">{{ $p->nombrePlan }}</h1>
                                                @endif
                                                <div class="card-body badge-success">
                                                    <h1 class="card-title">{{ $p->nombrePlan }}</h1>
                                                    <br>
                                                    <hr>
                                                    <p class="card-text">{{ $p->detalle }}</p>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li style="background-color: yellow" class="list-group-item">Costo: S/.
                                                        {{ $p->costoMensual }}
                                                    </li>

                                                    <li class="list-group-item">Costo Anual: S/. {{ $p->costoAnual }}</li>
                                                </ul>
                                                <div class="card-body" style="background-color: coral">
                                                   
                                                    <button class="btn btn-warning">Quiero este plan</button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-{{$p->idPLAN}}">
                                                    Prueba
                                                    </button>
                                                    @include('vistasadmin.planes.planvendedor.modalcompra')
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
   
                                @endforeach

                                <!-- <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="estado" id="opcion2" value="0">
                                            <label class="form-check-label" for="inlineRadio2">Rey Emprendedor</label>
                                        </div>-->

                          
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
