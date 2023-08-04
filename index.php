<?php


/*=============================================
Depurar errores
=============================================*/

ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "c:/xampp/htdocs/com/web/php_error_log");




/*=============================================
Require
=============================================*/
require_once "controllers/user.controller.php";
// require_once "controllers/support.controller.php";
// require_once "controllers/path.controller.php";
require_once "controllers/template.controller.php";
require_once "controllers/curl.controller.php";

require_once "extensions/vendor/autoload.php";



$index = new TemplateController();
$index->index();
