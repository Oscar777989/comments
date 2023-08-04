<?php 

session_start(); 
require_once "../../controllers/curl.controller.php"; 



// $url_publications = "publications?select=id_publication,id_user_publication,content_publication,date_updated_publication&linkTo=verif_publication&equalTo=1";
// $method_publications = "GET";
// $fields_publications = array();
// $result_publications = CurlController::request($url_publications, $method_publications, $fields_publications);
// $publications_result = $result_publications->results;


// // echo '<pre>'; print_r($publications_result); echo '</pre>';

// foreach ($publications_result as $key => $value) {
// 	echo "<p>Contenido: ".$value->content_publication."</p>";
// }
























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

