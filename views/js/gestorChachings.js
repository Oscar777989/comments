/*=============================================
EDITAR PERFIL
=============================================*/
$(".tableChachings").on("click", ".btnEditarChachings", function(){

  var idChaching = $(this).attr("idChaching");
  
  var datos = new FormData();
  datos.append("idChaching", idChaching);

  $.ajax({

    url:"/views/ajax/chaching.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){ 

      $("#editarNombre").val(respuesta["nombre"]);
      $("#idChaching").val(respuesta["id"]);
      $("#editarEmail").val(respuesta["email"]);
      $("#editarPerfil").html(respuesta["perfil"]);
      $("#editarPerfil").val(respuesta["perfil"]);
      $("#fotoActual").val(respuesta["foto"]);
      $("#passwordActual").val(respuesta["password"]);

      if(respuesta["foto"] != ""){

        $(".previsualizar").attr("src", respuesta["foto"]);

      }

    }


  })


})

/*=============================================
ELIMINAR USUARIO
=============================================*/
$(".tableChachings").on("click", ".btnEliminarPerfil", function(){

  var idChaching = $(this).attr("idChaching");
  var fotoPerfil = $(this).attr("fotoPerfil");


  swal({
    title: '¿Está seguro de borrar el perfil?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar perfil!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=perfiles&idChaching="+idChaching+"&fotoPerfil="+fotoPerfil;

    }

  })

})