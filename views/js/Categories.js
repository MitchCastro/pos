/** 
 * EDITAR CATEGORIA
*/

$('.btnEditarCategoria').click(function() {
    var idCategorie = $(this).attr('idCategoria')

    var datos = new FormData()
    datos.append('idCategorie', idCategorie)

    $.ajax({
        url: 'ajax/categories.ajax.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta){
            $('#editarCategoria').val(respuesta['categorie'])
            $('#idCategoria').val(respuesta['id'])
        }
    })
})

/** 
 * ELIMINAR CATEGORIA
*/

$('.btnEliminarCategoria').click(function() {
    var idCategorie = $(this).attr('idCategoria')

    swal({
        title: '¿Estas seguro de borrar la categoria?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar categoria!'
    }).then((result) => {
        if (result.value) {
            window.location = 'index.php?ruta=categories&idCategorie='+idCategorie
        }
    })
})