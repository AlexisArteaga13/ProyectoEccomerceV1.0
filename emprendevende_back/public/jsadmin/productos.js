$('#ModalEditar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id') 
    var nombre = button.data('nombre') 
    var estado = button.data('estado') 
    var empresaid = button.data('empresaid')
    var descripcion = button.data('descripcion') 
    var precio = button.data('precio')
    var marca = button.data('marca')
    var imgfrontal = button.data('imgfrontal')
    var imgposterior = button.data('imgposterior')
    var imgizquierda = button.data('imgizquierda')
    var imgderecha = button.data('imgderecha')
    var imgfrontal = button.data('imgfrontal')
    var imgfrontal = button.data('imgfrontal')
    var peso = button.data('peso')
    var stock = button.data('stock')
    var unidad = button.data('unidad')
    var vistas = button.data('vistas')
    var calificacion = button.data('calificacion')
    var empresanombre = button.data('empresanombre')
    var modal = $(this)
   // console.log(id);
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #empresanombre').val(empresanombre);
    modal.find('.modal-body #descripcion').val(descripcion);
    modal.find('.modal-body #precio').val(precio);
    modal.find('.modal-body #marca').val(marca);
    modal.find('.modal-body #imgfrontal').attr("data-initial-preview",imgfrontal);
    modal.find('.modal-body #imgposterior').attr("data-initial-preview",imgposterior);
    modal.find('.modal-body #imgizquierda').attr("data-initial-preview",imgizquierda);
    modal.find('.modal-body #imgderecha').attr("data-initial-preview",imgderecha);
    modal.find('.modal-body #imgsuperior').attr("data-initial-preview",imgsuperior);
    modal.find('.modal-body #imginferior').attr("data-initial-preview",imginferior);
    modal.find('.modal-body #peso').val(peso);
    modal.find('.modal-body #stock').val(stock);
    modal.find('.modal-body #unidad').val(unidad);
    modal.find('.modal-body #vistas').val(vistas);
    modal.find('.modal-body #calificacion').val(calificacion);
    modal.find('.modal-body #empresaid').val(empresaid);
    if(estado == '1'){
        modal.find('.modal-body #opcion1').attr("checked",true);
       
    }
    else{
        modal.find('.modal-body #opcion2').attr("checked","true");
    }
    
    
})