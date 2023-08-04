<?php 

session_start(); 
require_once "../../controllers/curl.controller.php"; 
 


         
             date_default_timezone_set('America/Bogota');
             $date_now = time();
             $now = date('Y-m-d', $date_now);

 
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
            print_r($comment->status);
          }else {
            print_r($comment->status);
          }

          
} else {


                    echo '<script>
                            fncSweetAlert("error", "Error, no ingresar caracteres especiales: '.$error.'","/comunidad");
                        </script>'; 
}          





            // return $Chaching;
// echo json_encode($_POST["content"]);
// echo '<pre>'; print_r($fields); echo '</pre>';
         // print_r($_POST["content"]);
// if ($publication->status == 200) {
//     // Obtener la lista actualizada de registros después de guardar el nuevo registro
//     $url_publications = "publications?select=id_publication,id_user_publication,content_publication,date_updated_publication&linkTo=verif_publication&equalTo=1";
//     $method_publications = "GET";
//     $fields_publications = array();
//     $result_publications = CurlController::request($url_publications, $method_publications, $fields_publications);
//     $publications_result = $result_publications->results;

//     // Imprimir los registros actualizados en formato HTML
//     foreach ($publications_result as $key => $value) {
//         echo "<p>Contenido: " . $value->content_publication . "</p>";
//     }
// } else {
//     // Manejar errores si es necesario
//     echo "Error: " . $publication->status;
// }




















 ?>