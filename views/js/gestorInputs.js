 $(".tablaInputs").on("click", ".btnActivar"), function(){


  var idInput = $(this).attr("idInput");

  var estadoInput = $(this).attr("estadoInput");


  var datos = new FormData();
  datos.append("activarId", idInput);
  datos.append("activarInput", estadoInput);


 	$.ajax({

 		url: "ajax/inputs.ajax.php",
 		method: "POST",
 		data: datos,
 		cache: false,
 			contentType: false,
 			processData: false,
 			success: function(respuesta){
 				console.log("respuesta", respuesta);
 			}

 	})



 



 }