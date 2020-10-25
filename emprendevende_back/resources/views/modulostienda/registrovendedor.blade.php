@extends('plantillas.ptienda')
@section('titulo', 'Registro de Vendedor')

@section('contenido')
    <!-- banner-2 -->
    <div class="container justify-content-center">
        <img src="images/banner-vende-con-nosotros.png" alt="">
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <hr>
            </div>
            <div ALIGN=center class="col-md-4">
                <span class="">Vende Con Nosotros</span>
            </div>
            <div class="col-md-4">
                <hr>
            </div>
        </div>
    </div>
    <div class="ads-grid  py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <form>

                <h5 class="h5">Datos de la Empresa</h5>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Número de RUC</label>
                    <div class="col-sm-3">
                        <input type="text" id="ruc" class="form-control" name="ruc" placeholder="Ingresa tu ruc" required>
                    </div>
                    <span onClick="obtenerruc()" id="btn-ruc" type="button" class="btn btn-primary"
                        value="Verificar">Verificar</span>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Razón Social</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="razonsocial" placeholder="" disabled required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre Comercial</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Categoria</label>
                    <div class="col-sm-3">
                        <div class="form-row align-items-center">
                            <div class="col-auto my-1">
                                <label class="mr-sm-4 sr-only" for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select mr-sm-4" id="inlineFormCustomSelect">
                                    <option selected disabled>Seleccione una Categoria</option>
                                    @foreach ($rubros as $r)
                                        <option value="{{ $r->idRubro }}">{{ $r->nombreRubro }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="h5">Datos del Contacto</h5>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Número de DNI</label>
                    <div class="col-sm-3">
                        <input type="text" id="dni" class="form-control" id="inputEmail3" placeholder="Ingresa tu DNI" required>
                        <span>Recuerda ser mayor de edad</span>
                    </div>
                    <span onclick="obtenerdni();" class="btn btn-primary">Verificar</span>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombres Completos</label>
                    <div class="col-sm-4">
                        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="" readonly required>
                    </div>

                </div>
                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Apellidos Completos</label>
                    <div class="col-sm-4">
                        <input type="text" id="apel" name="apel" class="form-control" placeholder="" readonly required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="inputPassword3" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Teléfono" required>
                    </div>
                </div>
                <h5>Adquiere Un plan</h5>

                <div class="form-group row">
                    <div class="col-sm-12">
                        @foreach ($planes as $p)
                        <div class="form-check form-check-inline">
                            <div class="card" style="width: 18rem;">      
                                <div class="card-body">
                                <h5 class="card-title">{{$p->nombrePlan}}</h5>
                                  <p class="card-text">{{$p->detalle}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">Costo: S/. {{$p->costoMensual}}</li>
                                  
                                  <li class="list-group-item">Costo Anual: S/. {{$p->costoAnual}}</li>
                                </ul>
                                <div class="card-body">
                                    <input class="form-check-input" type="radio" name="estado" id="opcion1" value="1">
                                <label class="form-check-label" for="inlineRadio1">{{$p->nombrePlan}}</label>
                                </div>
                              </div>
                            
                        </div>
                        @endforeach
                        
                       <!-- <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="estado" id="opcion2" value="0">
                            <label class="form-check-label" for="inlineRadio2">Rey Emprendedor</label>
                        </div>-->
                    </div>
                </div>
                <h5 class="h5">Antes que nada</h5>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label>&nbsp;&nbsp;&nbsp;</label>
                        <label class="form-check-label" for="invalidCheck">
                            He leído la Política de Privacidad de EmprendeVende y
                            autorizo expresamente el uso y tratamiento de mis datos
                            personales.
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label>&nbsp;&nbsp;&nbsp;</label>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>


                <div class="container justify-content-center">
                    <!--<div class="form-group row">-->
                    <!--<div class="col-sm-10">-->
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <!--</div>-->
                    <!--</div> -->
                </div>
            </form>
        </div>
    </div>
    <!-- //banner-2 -->
    <!-- page  -->

@endsection
@section('scripts')

    <!-- Ejemplo -->
    <script>
        function Get(yourUrl) {
            var Httpreq = new XMLHttpRequest(); // a new request
            Httpreq.open("GET", yourUrl, false);
            Httpreq.send(
                'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsZXhpc2FydGVhZ2FjYXJodWFAZ21haWwuY29tIn0.AokSweNFXNQ0BKJIHgbwS_ZROipNFkSJihVCg5Eqy3c'
            );
            if (Httpreq.responseText) {
                return Httpreq.responseText;
            } else {
                return "error";
            }

        }

        function obtenerruc() {
            var ruc = $("#ruc").val();

            var url = "https://dniruc.apisperu.com/api/v1/ruc/";
            var token =
                "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsZXhpc2FydGVhZ2FjYXJodWFAZ21haWwuY29tIn0.AokSweNFXNQ0BKJIHgbwS_ZROipNFkSJihVCg5Eqy3c";
            var urltotal = url + ruc + token;
            try {
                var datos = JSON.parse(Get(urltotal));
            } catch (e) {
                $("#razonsocial").val(' ');
                alert('El RUC es inválido.');
            }
            if (datos) {
                $("#razonsocial").val(datos.razonSocial);
            }



        }

        function obtenerdni() {
            var dni = $("#dni").val();
            var pasar = Get('https://dniruc.apisperu.com/api/v1/dni/' + dni +
                '?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImFsZXhpc2FydGVhZ2FjYXJodWFAZ21haWwuY29tIn0.AokSweNFXNQ0BKJIHgbwS_ZROipNFkSJihVCg5Eqy3c'
            );
            try {
                var datos = JSON.parse(pasar);
            } catch (e) {
                $("#nombres").val(' ');
                $("#apel").val(' ');
                alert('El DNI es inválido o es de un menor de edad.');
            }
            if (datos) {
                $("#nombres").val(datos.nombres);
                var apellidos = datos.apellidoPaterno + " " + datos.apellidoMaterno;
                console.log(apellidos)
                $("#apel").val(apellidos);
            }

        }
        //console.log("this is the author name: " + datos.ruc);*/

        // consulta Sunat usando número de RUC
        //}
        // fetch('https://api.sunat.cloud/ruc/10743543675')
        //.then(response => console.log(response))
        /* .then(response => response.json())
         .then(json => console.log(json))*/

    </script>

@endsection
