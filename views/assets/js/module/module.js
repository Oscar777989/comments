  // const buttonexpand = document.querySelector("#expand-text");
  // const heightext = document.querySelector(".carrusel-item__details");
  // const buttoncontrae = document.querySelector("#contrae-text");


  // buttonexpand.addEventListener("click", function () {
  //    heightext.style.height = 'auto';
  //    buttoncontrae.style.display = 'block';
  //    buttonexpand.style.display = 'none';
  //   });

  //   buttoncontrae.addEventListener("click", function () {
  //    heightext.style.height = '150px';
  //    buttoncontrae.style.display = 'none';
  //    buttonexpand.style.display = 'block';
  //   });


  //  $(document).ready(function() {
  //     $(".saveVideo").click(function(e) {
  //       e.preventDefault();
  //       var id = $(this).data("id");
  //       var valor = $(this).data("valor");
  //       $.ajax({
  //         type: "POST",
  //         url: "../views/ajax/path_video.php",
  //         data: { session_variable_id: id, session_variable_valor: valor },
  //         success: function(response) {
  //           console.log("Variable de sesión grabada");
  //           window.location = "video";
  //         }
  //       });
  //     });
  //   });
 

// $(document).ready(function() {
//   // Función para manejar el enlace de carrusel superior
//   $('.savePrevModule').click(function(e) {
//     e.preventDefault();
//     var id = $(this).data('id');
//     var valor = $(this).data('valor');
//     $.ajax({
//       type: 'POST',
//       url: '../views/ajax/path_module.php',
//       data: {id: id, valor: valor}
//     })
//     .done(function() {
//       location.reload();
//     });
//   });

//   // Función para manejar el enlace de carrusel inferior
//   $('.saveNextModule').click(function(e) {
//     e.preventDefault();
//     var id = $(this).data('id');
//     var valor = $(this).data('valor');
//     $.ajax({
//       type: 'POST',
//       url: '../views/ajax/path_module.php',
//       data: {id: id, valor: valor}
//     })
//     .done(function() {
//       location.reload();
//     });
//   });
// });