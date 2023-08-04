<?php 
        $img_user = $_SESSION['user']->img_user;
        $id_user = $_SESSION['user']->id_user;
 echo "<script>var path = '" . $path . "';</script>";  
?>



<div  style="min-height: 100vh;padding: 10vh 25vh;background-color: black;" >
        <div class="content-wrapper" style="background-color: transparent;">

              <div class="col-sm-12 my-4 club_my_txt_mobile">
                <div class="row">
                  <p class="text-center t_club f_white mont">PUBLICACIONES</p>
                </div>

              </div> 
                 
            <div>

                <section class="content">
                      <div class="container-fluid"> 
                        <a href="<?php echo $path ?>views/pages/salir/salir.php">SALIR</a>
                        <!-- Timelime example  -->
                        <div class="row">
                          <div class="col-md-12">
                            <!-- The time line -->


                                          <!-- ========================== NEW TOPIX - CONTAINER ======================================= -->
                                          <div style="background-color:transparent;padding: 0.5rem 1.2rem;">
                                            <!-- <i class="fas fa-envelope bg-blue"></i> -->
                                            <!-- <img class="com_user" src="<?php echo $path.'views/img/users/'.$id_user.'/'.$img_user ?>" alt="" width="50"> -->
                                            <div class="timeline-item" style="border-radius: 7px;">
                                              <div class="timeline-footer new_topic">
                                              <!-- ========================== NEW PUBLICATION FORM ======================================= -->
                                                    <div class="form_publication">
                                                        <div class="comment_input_container">
                                                            <textarea  
                                                                id="new_publication" 
                                                                class="comment_user" 
                                                                type="text" 
                                                                placeholder=""  
                                                                cols="30" 
                                                                rows="3" 
                                                                style="color:white"></textarea>
                                                            <!-- <input id="new_publication" class="comment_user" type="text" placeholder="Escribe aquí..."> -->
                                                            <a href="#" class="new_publication_btn"  onclick="postData(event)"><img class="" src="<?php echo $path ?>views/assets/img/comunidad/send.png" alt="" width="20"></a>
                                                        </div>
                                                    </div>
                                            <!-- ========================== END NEW PUBLICATION FORM ======================================= -->
                                              </div>
                                            </div>
                                          </div>
                                         <!-- ========================== END NEW TOPIC - CONTAINER  ======================================= -->


                            <div class="timeline" id="publications_list"> 
                            <!-- <div class="timeline"> -->
                                <div id="publications-container"></div>



                              <div>
                                <i class="fas fa-clock bg-gray"></i> 
                              </div>




                            </div>


                          </div>
                          <!-- /.col -->
                        </div>
                      </div>
                      <!-- /.timeline -->
                </section>
            </div>

        </div> 
</div>

<style>
.info_comment{
    margin-left: 5px !important;
}    
.answ_cont{
    box-shadow: 0 0 5px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,7.2);
}
.time {
    color: #999;
    float: right;
    font-size: 12px;
    padding: 10px;
}    
.timeline-item {
/*    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);*/
    border-radius: 0.5rem;
    background-color: #fff;
    color: #495057;
    margin-left: 60px;
    margin-right: 15px;
    margin-top: 0;
    padding: 0;
    position: relative;
}
.timeline-header{
    background-color: transparent;
    font-size: 10px;
    font-style: italic;
    font-weight: 600;
    color: #333333ff !important;
    border-radius: 7px 7px 0px 0px;
}
.timeline-body{
    padding: 0.5rem 1.5rem 0rem 1.5rem !important;
}
  .img_merch{
  width: 50%;
  margin-top: 0;
  margin-bottom: 3rem;
}
  .t_club{
    font-family: 'montserrat' !important;
    font-style: italic;
    font-size: 16px;
    font-weight: 600 !important;
    margin-bottom: -5px;
        margin-top: -56px;
  }
</style>
<!--  <style>
   
 </style> -->

<script>


const commentButtons = document.querySelectorAll('.comment_btn');
const commentForms = document.querySelectorAll('.form_publication.f_comm');

commentButtons.forEach((commentButton, index) => {
    commentButton.addEventListener('click', function(event) {
        // Evitar que el enlace actualice la página
        event.preventDefault();
        // Mostrar el formulario de comentario asociado al botón clickeado
        commentForms[index].style.display = 'block';
    });
});


// Agregar evento delegado para abrir el formulario de edición
document.querySelectorAll('.show_edit').forEach((editButton) => {
    editButton.addEventListener('click', function(event) {
        event.preventDefault();

        // Obtener el ID de la publicación a editar
        var publicationId = this.dataset.publicationId;

        // Mostrar el formulario de edición asociado al botón clickeado y ocultar la publicación
        var editForm = document.querySelector('.form_edit[data-publication-id="' + publicationId + '"]');
        var publicationContent = editForm.closest('.timeline-item').querySelector('.f_content');
        editForm.style.display = 'block';
        publicationContent.style.display = 'none';
    });
});
  // const commentAnsw = document.querySelector('.comment_comment');
  // const commentAnswButton = document.querySelector('.comment_comment_btn');

  // commentAnswButton.addEventListener('click', function(event) {
  //   // Evitar que el enlace actualice la página
  //   event.preventDefault();
  //   commentAnsw.style.display = 'block';
  // });
// =================================== ACTUALIZAR PUBLICACIONES ===============================================================

$(document).ready(function() {
  // Llamada inicial para obtener el JSON por defecto al cargar la página
  actualizarPublicaciones();

  function actualizarPublicaciones() {
    $.ajax({
      url: '../views/ajax/gestion_comunidad.php',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        // 'data' contendrá el JSON actualizado con las publicaciones.

        // Llamar a la función para mostrar las publicaciones en el HTML
        mostrarPublicaciones(data);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
      }
    });
  }

// =================================== NUEVA PUBLICACION ===============================================================

    $(document).ready(function() {
        // Agregar el evento click al botón "new_publication_btn"
        $('.new_publication_btn').click(function(e) {
            e.preventDefault(); // Prevenir comportamiento predeterminado del enlace

            // Obtener el contenido del input
            var content = $('#new_publication').val(); 

            // Realizar la petición AJAX con el contenido del comentario
            $.ajax({
                type: 'POST',
                url: '../views/ajax/save_publications.php', 
                data: { content: content }, // Enviar el contenido como un parámetro llamado "content"
                dataType: 'json', // Especificar el tipo de datos que esperas recibir de la respuesta
                success: function(response) {

                console.log(response);
                    // Por ejemplo, si el servidor responde con un objeto JSON que contiene un mensaje de éxito, podrías mostrar un mensaje de confirmación o actualizar la lista de comentarios, si corresponde.
                    $('#new_publication').val('');  
                    actualizarPublicaciones()
                },
                error: function(xhr, status, error) {
                    // Manejar errores si los hay
                    console.error(error);
                }
            });
        });
    });



// =================================== BORRAR PUBLICACION ===============================================================
$(document).ready(function() {
    $('.del_publication').click(function(e) {
        e.preventDefault(); // Prevenir comportamiento predeterminado del enlace

        var publicationId = $(this).data('id');

        $.ajax({
            type: 'POST',
            url: '../views/ajax/delete_publications2.php',
            data: { delete_publication: publicationId }, // Enviar el ID de la publicación a eliminar
            dataType: 'json', // Especificar el tipo de datos que esperas recibir de la respuesta
            success: function(response) {
                console.log(response);
                actualizarPublicaciones()
            },
            error: function(xhr, status, error) {
                // Manejar errores si los hay 
                console.error(error); 
            }
        });
    });
});


  function actualizarPublicaciones() {
    $.ajax({
      url: '../views/ajax/gestion_comunidad.php',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        // 'data' contendrá el JSON actualizado con las publicaciones.

        // Llamar a la función para mostrar las publicaciones en el HTML
        mostrarPublicaciones(data);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
      }
    });
  }    

function mostrarPublicaciones(jsonData) {
  var publicationsContainer = document.getElementById("publications-container");
  var htmlContent = '';

  // Recorrer las publicaciones en el JSON
  Object.keys(jsonData).forEach(function(publicationId) {
    var publication = jsonData[publicationId];
    var idPublicacion = publicationId;
    var fechaCompleta = publication.content.fecha;
    var fechaSinHorario = new Date(fechaCompleta).toLocaleDateString(); // Obtener la fecha sin hora
    var fotoUsuario = publication.user.foto
      ? `${path}views/img/users/${publication.user.id}/${publication.user.foto}`
      : `${path}views/img/perfiles/default/anonymous.png`;
    htmlContent += `
<!-- ================================ timeline item ======================================== -->

<!-- ================================ END timeline item ======================================== -->




<!--  DIV TIMELINE  ======================================================================== -->
<div>

        <img class="com_user" src="${fotoUsuario}" alt="Profile Image" width="50">

        <div class="timeline-item">

                                                <!-- ================================ BUTTON SHOW EDIT / DELETE PUBLICATION  =============================== -->                                    
                                                <span class="time">

                                                        <li class="nav-item dropdown">

                                                                <a class="nav-link" data-toggle="dropdown" href="#">
                                                                    <i class="fa fa-ellipsis-v time_color"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right menu_profile" style="background-color: #1a1a1a; padding: 10px;width: 100px !important;">

                                                                        <a href="#" class="dropdown-item show_edit" data-publication-id="${publication.user.id}">
                                                                            <span class="float-right text-muted text-sm mont-666" style="font-family: "montserrat";">
                                                                                Editar
                                                                            </span>
                                                                        </a>

                                                                        <a class="dropdown-item delet_btn del_publication" href="#" data-id="${idPublicacion}">
                                                                            <span class="float-right text-muted text-sm mont-666" style="font-family: "montserrat";">
                                                                                Eliminar
                                                                            </span>
                                                                        </a>

                                                                </div>
                                                        </li>

                                                </span> 

                                                 <!-- ================================ END BUTTON SHOW EDIT / DELETE  PUBLICATION  =============================== -->   

                                            <p class="timeline-header">${fechaSinHorario}</p>
 <!-- START BODY -->           <div class="timeline-body mont">

                                                      <p class="myb0 mont"><strong>${publication.user.nombre}</strong></p>
                                                      <p class="f_content">${publication.content.contenido}</p> 

                                                 <!-- ========================== EDIT PUBLICATION FORM ======================================= -->
                                                <div class="form_edit" data-publication-id="${idPublicacion}">
                                                    <div class="edit_input_container">

                                                             <textarea  class="comment_user edit_input" type="text" value="${publication.content.contenido}" data-publication-id="${idPublicacion}"  cols="30" rows="3" style="color:white">${publication.content.contenido}
                                                             </textarea>

                                                            <a href="#" class="edit_btn" data-publication-id="${idPublicacion}"><i class="fa fa-edit time_color"></i></a>
                                                    </div>
                                                </div>
                                               <!-- ========================== END EDIT PUBLICATION FORM ======================================= -->
                                               <!-- ========================== LIKES / COMMENT BOTTOM PUBLICATION ======================================= -->
<!-- END BODY -->             </div>


<!-- START FOOTER -->         <div class="timeline-footer">

                                                      <a href="#" class="likes_text likes_btn" data-id="${idPublicacion}">
                                                            <img class="" src="${path}views/assets/img/comunidad/corazon-icon.png" alt="" width="20"> 
                                                            ${publication.content.likes} Me gusta.
                                                      </a>

                                                      <a href="#" class="likes_text comment_btn">
                                                            <img class="comment_icon" src="${path}views/assets/img/comunidad/comment-icon.png" alt="" width="20"> 
                                                            Comentar.
                                                      </a>   
                                                        <!-- ========================== END LIKES / COMMENT BOTTOM PUBLICATION ======================================= -->


                                                        <!-- ========================== COMMENT CONTAINER  ======================================= -->
                                            
                                                        <div class="comment-results" data-publication-id="${idPublicacion}">

                                                              <!-- Bucle para generar los comentarios -->
                                                              ${publication.content.comments.map(function(comment) {
                                                                var fotoUsuarioComment = comment.user.foto
                                                                  ? `${path}views/img/users/${comment.user.id}/${comment.user.foto}`
                                                                  : `${path}views/img/perfiles/default/anonymous.png`;

                                                                return `
                                                                  <div class="answ_cont">
                                                                        <!-- <i class="fas fa-envelope bg-blue"></i> -->
                                                                        <div class="timeline-item info_comment">
                                                                              <!-- <span class="time_comment"><a href=""><i class="fa fa-ellipsis-v time_color"></i></a></span> -->
                                                                              <p class="timeline-header_answ">${comment.fecha}</p>
                                                                              <img class="com_user_answ" src="${fotoUsuarioComment}" alt="Profile Image" width="50">

                                                                              <div class="timeline-body_answ mont">
                                                                                    <p class="myb0_answ mont  f_white"><strong>${comment.user.nombre}.</strong></p>
                                                                                    <p class="f_content f_white">${comment.contenido}</p> 
                                                                              </div> 

                                                                              <div class="timeline-footer_answ">
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                `;

                                                              }).join('')}
                                                              <!-- Fin del bucle para generar los comentarios -->

                                                        </div>

                                                         <!-- ========================== END COMMENT FORM ======================================= -->
<!-- END FOOTER -->           </div>

            </div>
</div>
 <!-- END  DIV TIMELINE  ======================================================================== -->

      `;
    });

    publicationsContainer.innerHTML = htmlContent;
  }
});





// =================================== EDITAR PUBLICACION ===============================================================




$(document).ready(function() {
    $(document).on('click', '.edit_btn', function(e) {
        e.preventDefault(); // Prevenir comportamiento predeterminado del enlace

        var publicationId = $(this).data('publication-id');
        var inputContainer = $(this).closest('.form_edit');
        var content = inputContainer.find('.edit_input').val();

        $.ajax({
            type: 'POST',
            url: '../views/ajax/gestion_comunidad.php',
            data: { edit_content: content, id_publication: publicationId }, // Enviar el contenido y el ID de la publicación
            dataType: 'json', // Especificar el tipo de datos que esperas recibir de la respuesta
            success: function(response) {
                console.log(response);
                inputContainer.find('.comment_user').val(''); // Vaciar el input
            },
            error: function(xhr, status, error) {
                // Manejar errores si los hay
                console.error(error);
            }
        });

    }); 
// =================================== COMENTARIOOOOOO ===============================================================

    $('.send_comment').click(function(e) {
        e.preventDefault(); // Prevenir comportamiento predeterminado del enlace

        var publicationId = $(this).data('publication-id');
        var inputContainer = $(this).closest('.comment_container');
        var comment = inputContainer.find('.comment_input').val();

            $.ajax({
                type: 'POST',
                url: '../views/ajax/gestion_comunidad.php',
                data: { comment: comment, id_publication: publicationId }, // Enviar la respuesta y el ID de la publicación
                dataType: 'json', // Especificar el tipo de datos que esperas recibir de la respuesta
                success: function(response) {
                    console.log(response);
                    inputContainer.find('.new_comment').val(''); // Vaciar el input de respuesta
                },
                error: function(xhr, status, error) {
                    // Manejar errores si los hay
                    console.error(error);
                }
            });
    });
});




// =================================== GUARDAR LIKE ===============================================================
$(document).ready(function() {
    $('.likes_btn').click(function(e) {
        e.preventDefault(); 

        var publicationId = $(this).data('id');

        $.ajax({
            type: 'POST',
            url: '../views/ajax/gestion_comunidad.php',
            data: { likes: publicationId }, // Enviar el ID de la publicación a eliminar
            dataType: 'json', // Especificar el tipo de datos que esperas recibir de la respuesta
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Manejar errores si los hay
                console.error(error);
            }
        });
    });
});


</script>