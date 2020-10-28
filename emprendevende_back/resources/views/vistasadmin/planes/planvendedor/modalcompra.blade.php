    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter-{{ $p->idPLAN }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{ route('planes.escogerplan', $p->idPLAN) }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="exampleModalLongTitle">Elige tu plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div style="text-align: center">
                            <h1>
                                <font color="#004D7F" size=6>COMPRA TU PLAN</font>
                            </h1>
                        </div>
                        <div style="text-align: center">
                            <h2>
                                <font color="#004D7F" size=6>{{ $p->nombrePlan }}</font>
                            </h2>
                        </div>
                        <div style="text-align: center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="facturacion" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Facturación Mensual S/.</label>
                                <label class="form-check-label" for="inlineRadio1">{{ $p->costoMensual }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="facturacion" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Facturación Anual S/.</label>
                                <label class="form-check-label" for="inlineRadio1">{{ $p->costoAnual }}</label>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <h2>
                                <font color="#004D7F" size=4>Elige tu Método de Pago</font>
                            </h2>
                        </div>
                        <div style="text-align: center">
                            <!--<div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Tarjeta</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">PayPal</label>
                        </div> -->
                            @foreach ($metodo as $m)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="metodos" id="inlineRadio1"
                                        value="{{ $m->idMETODO_PAGO }}">
                                    <label class="form-check-label" for="inlineRadio1">{{ $m->tipo }}</label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
