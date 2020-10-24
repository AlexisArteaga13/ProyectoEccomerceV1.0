$('#ModalEditar').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var id = button.data('id') 
    var nombre = button.data('nombre') 
    var estado = button.data('estado') 
    var modal = $(this)
   // console.log(id);
    modal.find('.modal-body #nombre').val(nombre);
    modal.find('.modal-body #id').val(id);
    if(estado == '1'){
        modal.find('.modal-body #opcion1').attr("checked",true);
       
    }
    else{
        modal.find('.modal-body #opcion2').attr("checked","true");
    }
    
    
})