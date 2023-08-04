<?php 

class UsersController{

  public function login(){
  		
					if(isset($_POST["ingEmail"])){

						if(preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["ingEmail"])){

					  		$url =  "users?login=true&suffix=user";
					  		$method = "POST";
					  		$fields = array(
					  			"email_user" => $_POST["ingEmail"],
					  			"password_user" => $_POST["ingPassword"] 
					  		);

					  	  $login = CurlController::request($url,$method,$fields);

					  	  if($login->status == 200){

														if($login->results[0]->state_user == 1){

																$_SESSION["user"] = $login->results[0];

																	setcookie("correo", $_POST["ingEmail"], time() + 324000); // Caduca en 30 dias

																//	setcookie("correo", $_POST["ingEmail"], PHP_INT_MAX); // No caduca- indefinido

																	echo '
														  	  	<script>
														  	  			window.location = "comunidad"; 
														  	  	</script>
														  	  	';
															
														}
														
					  	  }


					  } 

					}
  }

}



