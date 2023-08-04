<?php 

session_start(); 
require_once "../../controllers/curl.controller.php"; 
 


         
             date_default_timezone_set('America/Bogota');
             $date_now = time();
             $now = date('Y-m-d', $date_now);

 
 


// =========================== EDITAR PUBLICACIONES  en la base de datos===========================

if (isset($_POST["edit_content"])) {

        if(preg_match('/^[A-Za-záéíóúÁÉÍÓÚñÑ\s:;,()$%@#¿?¡!&quot;]+$/',$_POST["edit_content"])){

                  $url_edit = "publications?id=".$_POST['id_publication']."&nameId=id_publication&token=no&table=publications&suffix=publication&except=content_publication";
                  $method_edit = "PUT";
                  $fields_edit = "content_publication=".$_POST["edit_content"]."&date_updated_publication=".$now;
                  $publication_edit = CurlController::request($url_edit,$method_edit,$fields_edit);

                  if ($fields_edit->status == 200) {
                        $editPublication = array(
                        "id_user_publication" => $_SESSION['user']->id_user,
                        "content_publication" => $_POST["edit_content"],
                        "verif_publication" => 0,
                        "admin_publication" => 1,
                        "date_updated_publication" => $now
                       );

                        $updatedJson = publicationObject($verif, $level, $newPublication, $editPublication, $deletePublication, $likePublication, $newComment, $likeComment, $existingJson);

                            // Enviar el objeto JSON actualizado al cliente mediante AJAX
                       echo json_encode($updatedJson);
                  }
        }      
}
