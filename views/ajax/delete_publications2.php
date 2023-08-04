<?php 

session_start(); 
require_once "../../controllers/curl.controller.php"; 
 


         
             date_default_timezone_set('America/Bogota');
             $date_now = time();
             $now = date('Y-m-d', $date_now);

 
 

// =========================== BORRAR PUBLICACIONES  en la base de datos===========================

if (isset($_POST["delete_publication"])) {

          $url_delete = "publications?id=".$_POST['delete_publication']."&nameId=id_publication&token=no&table=publications&suffix=publication&except=content_publication";
          $method_delete = "PUT";
          $fields_delete = "verif_publication=0&admin_publication=0&date_updated_publication=".$now;
          $publication_delete = CurlController::request($url_delete,$method_delete,$fields_delete);

          if ($fields_delete->status == 200) {
              echo "Borrado exitoso";
          }else{
            echo "Error, No guardado";
          }
}
























// $url_comments = "comments?select=id_comment,id_user_comment,id_publication_comment,content_comment,date_updated_comment&linkTo=verif_comment&equalTo=1";
// $method_comments = "GET";
// $fields_comments = array();
// $result_comments = CurlController::request($url_comments, $method_comments, $fields_comments);
// $comments_result = $result_comments->results;



// $url_answers = "answers?select=id_answer,id_user_answer,id_publication_answer,content_answer,verif_answer,date_updated_answer&linkTo=verif_answer&equalTo=1";
// $method_answers = "GET";
// $fields_answers = array();
// $result_answers = CurlController::request($url_answers, $method_answers, $fields_answers);
// $answers_result = $result_answers->results;


// $url_communitylikes = "communitylikes?select=id_communitylike,id_user_communitylike,id_publication_communitylike,content_communitylike,verif_communitylike,date_updated_communitylike&linkTo=verif_communitylike&equalTo=1";
// $method_communitylikes = "GET";
// $fields_communitylikes = array();
// $result_communitylikes = CurlController::request($url_communitylikes, $method_communitylikes, $fields_communitylikes);
// $communitylikes_result = $result_communitylikes->results;


?>

