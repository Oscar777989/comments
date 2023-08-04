<?php 

session_start(); 
require_once "../../controllers/curl.controller.php"; 


// Al principio del archivo, obtén el JSON inicial
$initialJson = getInitialJSON();

// Verifica si la solicitud es una solicitud AJAX
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    // Si es una solicitud AJAX, envía el JSON como respuesta
    header('Content-Type: application/json');
    echo $initialJson;
    exit;
} 


date_default_timezone_set('America/Bogota');
$date_now = time();
$now = date('Y-m-d', $date_now); 


function dataPublicationsUsers($verif,$level) {
    $url_publications_users = "relations?rel=publications,users&type=publication,user&select=id_publication,id_user,name_user,img_user,content_publication,date_updated_publication&linkTo=verif_publication,admin_publication&equalTo=".$verif.",".$level."&orderBy=id_publication&orderMode=DESC";
    $method_publications_users = "GET";
    $fields_publications_users = array();
    $result_publications_users = CurlController::request($url_publications_users, $method_publications_users, $fields_publications_users);
    if ($result_publications_users->status === 200) {
      return $result_publications_users->results;
    }else{
        return null; 
    } 
}

function dataCommentsUsers($verif,$level) {
    $url_comments_users = "relations?rel=comments,publications,users&type=comment,publication,user&select=id_publication,id_comment,id_user,name_user,img_user,content_comment,date_updated_comment&linkTo=verif_publication,admin_publication&equalTo=".$verif.",".$level."&orderBy=id_publication&orderMode=DESC";
    $method_comments_users = "GET";
    $fields_comments_users = array();
    $result_comments_users = CurlController::request($url_comments_users, $method_comments_users, $fields_comments_users);
    return $result_comments_users->results;
}
// echo '<pre>'; print_r(dataCommentsUsers()); echo '</pre>';
function dataLikesPublications() {
    $url_likes_publications = "relations?rel=communitylikes,publications,users&type=communitylike,publication,user&select=id_publication,id_user&orderBy=id_publication&orderMode=DESC";
    $method_likes_publications = "GET";
    $fields_likes_publications = array();
    $result_likes_publications = CurlController::request($url_likes_publications, $method_likes_publications, $fields_likes_publications);
    return $result_likes_publications->results;
}

// echo "<br><br><br><br>";
// echo '<pre>'; print_r(dataPublicationsUsers(0)); echo '</pre>';

function publicationObject($verif, $level, $newPublication, $editPublication, $deletePublication, $likePublication, $newComment, $likeComment, $existingJson = null){
    $dataPublicationUsers = dataPublicationsUsers($verif,$level);
    $dataComments = dataCommentsUsers($verif,$level);
    $dataLikes = dataLikesPublications();

        // Crear un objeto JSON para almacenar las publicaciones si no se proporciona uno existente
    if ($existingJson === null) {
        $objetoJSON = new stdClass();
    } else {
        $objetoJSON = $existingJson;
    }

    if ($dataPublicationUsers != null) {
            // Crear un objeto JSON para almacenar las publicaciones

           // Recorrer el array de objetos de publicaciones
            foreach ($dataPublicationUsers as $objeto) {
                // Crear un nuevo objeto JSON para la publicación
                $nuevaPublicacion = new stdClass();
                $nuevaPublicacion->content = new stdClass();
                $nuevaPublicacion->user = new stdClass();

                // Asignar los valores del objeto original al nuevo objeto JSON
                $nuevaPublicacion->content->contenido = $objeto->content_publication;
                $nuevaPublicacion->content->fecha = $objeto->date_updated_publication;
                $nuevaPublicacion->user->id = $objeto->id_user;
                $nuevaPublicacion->user->nombre = $objeto->name_user;
                $nuevaPublicacion->user->foto = $objeto->img_user;

                $jsonFinal = json_encode($objetoJSON, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                // Agregar comentarios a la publicación si existen
                $comentarios = array();
                if (is_array($dataComments)) {
                    foreach ($dataComments as $comment) {
                        if ($comment->id_publication === $objeto->id_publication) {
                            $comentario = new stdClass();
                            $comentario->id = $comment->id_comment;
                            $comentario->contenido = $comment->content_comment;
                            $comentario->fecha = $comment->date_updated_comment;
                            $comentario->user = new stdClass();
                            $comentario->user->id = $comment->id_user;
                            $comentario->user->nombre = $comment->name_user;
                            $comentario->user->foto = $comment->img_user;
                            $comentarios[] = $comentario;
                        }
                    }
                    
                }
                $nuevaPublicacion->content->comments = $comentarios;

                // Totalizar los likes por id_publication
                $totalLikes = 0;
                foreach ($dataLikes as $like) {
                    if ($like->id_publication === $objeto->id_publication) {
                        $totalLikes++;
                    }
                }
                $nuevaPublicacion->content->likes = $totalLikes;

                // Agregar la nueva publicación al objeto JSON principal utilizando el id_publication como clave
                $objetoJSON->{$objeto->id_publication} = $nuevaPublicacion;
            }

        // Convertir el objeto JSON principal en JSON válido
        $jsonFinal = json_encode($objetoJSON, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
header('Content-Type: application/json');
        // Retornar el resultado
        return $jsonFinal;

    } else{
        return "No hay publicaciones";
    }

} 

// =========================== CREAR EL OBJETO JSON POR DEFECTO para cargarlo en el DOM al ingresar a la pagina ===========================    
function getInitialJSON() {
    // Puedes usar valores predeterminados para $verif y $level, o como los necesites.
    $verif = 0;
    $level = 1;
    // Puedes inicializar $newPublication, $editPublication, $deletePublication, $likePublication, $newComment y $likeComment con valores vacíos o nulos, ya que esta llamada es solo para obtener el JSON inicial y no para una acción específica.
    $newPublication = null;
    $editPublication = null;
    $deletePublication = null;
    $likePublication = null;
    $newComment = null;
    $likeComment = null;
    // Puedes dejar $existingJson como null, ya que queremos generar el JSON por defecto desde cero.
    $existingJson = null;
    
    return publicationObject($verif, $level, $newPublication, $editPublication, $deletePublication, $likePublication, $newComment, $likeComment, $existingJson);
}
// =========================== GUARDAR PUBLICACIONES  en la base de datos===========================

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


// =========================== LIKE PUBLICACIONES en la base de datos===========================

if(isset($_POST["likes"])){

           $fields = array(
            "id_user_communitylike" => $_SESSION['user']->id_user,
            "id_publication_communitylike" => $_POST['likes'],
            "verif_communitylike" => 1,
            "date_updated_communitylike" => $now,
            "date_created_communitylike" => $now
           );

          $url = "communitylikes?token=no&table=communitylikes&suffix=communitylike&except=id_user_communitylike";
          $method = "POST";
          $communitylike = CurlController::request($url,$method,$fields);

          if ($communitylike->status == 200) {
                $likePublication = $fields;
                $updatedJson = publicationObject($verif, $level, $newPublication, $editPublication, $deletePublication, $likePublication, $newComment, $likeComment, $existingJson);

                    // Enviar el objeto JSON actualizado al cliente mediante AJAX
                echo json_encode($updatedJson);
          }
}

// =========================== GUARDAR COMENTARIOS  en la base de datos===========================
if (isset($_POST["comment"])) {

      if(preg_match('/^[A-Za-záéíóúÁÉÍÓÚñÑ\s:;,()$%@#¿?¡!&quot;]+$/',$_POST["comment"])){

                 $fields = array(
                  "id_publication_comment" => $_POST['id_publication'],
                  "id_user_comment" => $_SESSION['user']->id_user,
                  "content_comment" => $_POST["comment"],
                  "verif_comment" => 0,
                  "admin_comment" => 1,
                  "date_updated_comment" => $now,
                  "date_created_comment" => $now 
                 );

                $url = "comments?token=no&table=comments&suffix=comment&except=content_comment";
                $method = "POST";
                $comment = CurlController::request($url,$method,$fields);

                if ($comment->status == 200) {
                      $newComment = $fields;
                      $updatedJson = publicationObject($verif, $level, $newPublication, $editPublication, $deletePublication, $likePublication, $newComment, $likeComment, $existingJson);

                          // Enviar el objeto JSON actualizado al cliente mediante AJAX
                      echo json_encode($updatedJson);
                }
      }

} 


 ?>