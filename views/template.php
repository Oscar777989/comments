<?php
 

/*=============================================
Iniciar variables de sesión
=============================================*/

ob_start();



/*=============================================
Variable Path
=============================================*/ 

$path = "http://localhost/com/web/";

/*=============================================
Capturar las rutas de la URL
=============================================*/ 

$routesArray = explode("/",$_SERVER["REQUEST_URI"]); 
array_shift($routesArray);

foreach ($routesArray as $key => $value) { 
  $routesArray[$key] = explode("?",$value)[0];
}




?>

<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="comments_proyect">
  <meta property="og:description" content="Comments">
  <meta property="og:url" content="n/a">
  <meta name="keywords" content="n/a">

  <link rel="icon" href="<?php echo $path ?>views/assets/img/Favicon.svg">


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- JDSlider -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/jdSlider/jdSlider.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/adminlte/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/global.css">
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/community/community.css">    




  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/fonts/fonts.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.js" integrity="sha512-RjvSEaeDqPCfUVQ9kna2/2OqHz/7F04IOl1/66LmQjB/lOeAzwq7LrbTzDbz5cJzlPNJ5qteNtHR56XaJSTNWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- JS -->
  <script src="<?php echo $path ?>views/assets/js/module/module.js"></script>
  <!-- jQuery -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap -->
  <script src="<?php echo $path ?>views/assets/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 
 <script src="<?php echo $path ?>views/assets/js/alerts/alerts.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JDSlider 
  https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>

  <!-- Knob -->
  <script src="<?php echo $path ?>views/assets/js/plugins/knob/knob.js"></script> 
    <script src="<?php echo $path ?>views/js/chart.js/Chart.js"></script> 

  <script src="<?php echo $path ?>views/assets/js/plugins/sweetalert/sweetalert.min.js"></script>

</head>

<div class="wrapper">

  <?php 
session_start(); 

  // echo '<pre>'; print_r($_SESSION["user"]->state_user); echo '</pre>';
      if (isset($_SESSION) && $_SESSION['user']->state_user == 1) {
        include "pages/comunidad/comunidad.php"; 
      } else {
        include "modules/login.php";
      }

  ?>

</div>

<!-- AdminLTE App -->
<script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
<script src="<?php echo $path ?>views/assets/js/products/products.js"></script>
<!-- AdminLTE App -->

<script src="<?php echo $path ?>views/js/gestorInputs.js"></script>
<!-- <script src="<?php echo $path ?>views/dist/js/adminlte.min.js"></script> -->
</body>
</html>



