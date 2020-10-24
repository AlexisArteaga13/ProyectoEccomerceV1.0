$('#ModalEditar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id') 
    var nombre = button.data('nombre') 
    var estado = button.data('estado') 
    var cuenta = button.data('cuenta')
    var descripcion = button.data('descripcion') 
    var vision = button.data('vision')
    var mision = button.data('mision')
    var logo = button.data('logo')
    var ruc = button.data('ruc')
    var telefono = button.data('telefono')
    var razonsocial = button.data('razonsocial')
    var fecha = button.data('fecha')
    var calificacion = button.data('calificacion')
    var rubro = button.data('rubro')
    var encargado = button.data('encargado')
    var modal = $(this)
   // console.log(id);
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #cuenta').val(cuenta);
    modal.find('.modal-body #descripcion').val(descripcion);
    modal.find('.modal-body #vision').val(vision);
    modal.find('.modal-body #mision').val(mision);
    modal.find('.modal-body #logo').val(logo);
    modal.find('.modal-body #ruc').val(ruc);
    modal.find('.modal-body #telefono').val(telefono);
    modal.find('.modal-body #razonsocial').val(razonsocial);
    modal.find('.modal-body #fecha').val(fecha);
    modal.find('.modal-body #calificacion').val(calificacion);
    modal.find('.modal-body #rubro').val(rubro);
    modal.find('.modal-body #encargado').val(encargado);
    if(estado == '1'){
        modal.find('.modal-body #opcion1').attr("checked",true);
       
    }
    else{
        modal.find('.modal-body #opcion2').attr("checked","true");
    }
    
    
})