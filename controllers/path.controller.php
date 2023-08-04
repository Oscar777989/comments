<?php

class PathController{
	static public function ctrPath(){

			if ($_POST["id_level_path"]) {
				date_default_timezone_set('America/Bogota');
				$date_now = time();
				$now = date('Y/m/d', $date_now);

				$datos = array("id_user_path"=>$_POST["id_user"],
										   "id_level_path"=>$_POST["id_level_path"],
										   "id_fase_path"=>$_POST["id_fase_path"],
										   "id_module_path"=>$_POST["id_module_path"],
										   "id_video_path"=>$_POST["id_video_path"],
										   "id_framework_path"=>$_POST["id_framework_path"],
										   "date_created_path"=>$now);
			}

					   // Verificar si el USUARIO ya tiene ruta
		        $url3 = "paths?select=id_user_path&linkTo=id_user_path&equalTo=".$_POST["id_user"];
		        $method3 = "GET";
		        $fields3 = array();
		        $path_verif = CurlController::request($url3,$method3,$fields3);

		        if ($path_verif->status == 200) {
					//SI EXISTE LO ACTUALIZA
						$tabla = "paths";
						$respuesta = ModelPath::mdlEditPath($datos);
						return $respuesta;

					// $url = "paths?id=".$_POST["id_user"]."&nameId=id_user_path&token=no&table=paths&suffix=path&except=id_path";
					// $url = "paths?token=no&id=1&nameId=id_user_path&table=users&suffix=user&except=id_path";
					// $method = "PUT";
				}else{
					//SI NO EXISTE LO CREA
					$url = "paths?token=no&table=paths&suffix=path&except=id_path";
					$method = "POST";
					$path = CurlController::request($url,$method,$fields);
				}

	
	}

}


