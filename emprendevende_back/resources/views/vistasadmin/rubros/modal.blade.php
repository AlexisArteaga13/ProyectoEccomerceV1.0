<div class="modal fade" id="ModalEliminar-{{ $value->idRubro }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="{{ route('rubros.delete', $value->idRubro) }}" method="post">
        {{ method_field('delete') }}
        {{ csrf_field() }}
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Desactivar Rubro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Esta seguro de seguir la operación</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Continuar</button>
                </div>
            </div>
        </div>
    </form>
</div>
