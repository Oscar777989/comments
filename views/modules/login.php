 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/login/login.css">
</head>
<body class="hold-transition login-page">

<!-- <div class="loader">
  <div class="loading"><img src="<?php echo $path ?>views/assets/img/dolarSign-3D-mini.gif" alt="loader" width="35"></div>
</div> -->


 <section class="section section-auth">
    <div class="auth-form">
        <div class="display-spacing display-spacing-plus">
            <div class="container-fluid background-style1 d-flex align-items-center bg-login" style="background-color: black;min-height: 100vh;">

                <!-- <header class="el-heading center"></header> -->
                    <div class="row wdt100 justify-content-center">
<!--                         <div>
                            <img src="<?php echo $path ?>views/assets/img/dolarSign-3D-mini.gif" alt="loader" width="35">
                        </div> -->
              

                        <div class="col-xl-12 form-container">
                            <div 
                              class="div-form" 
                              style="
/*                              background-image: url('views/img/auth/frame-border-gold-login.png'); */
                            border: solid;
                            border-width: 1px;
                            border-color: white;
                            border-radius: 10px;

                              background-repeat: no-repeat; 
                              background-position: center; 
                              background-size: 100% 100%;">
                                

                                        <!-- <form  [formGroup]="userForm" (ngSubmit)="onSubmit() class="form-3 max-w-576" method="post"> -->
                                          <form   

                                          class="form-3 max-w-576" 
                                          method="post" 
                                          class="needs-validation" 
                                          novalidate>

                                            <!-- --------------------- New Style ------------------------------------ -->
                                            <div class="form-group">
                                                <label for="">Correo electrónico*</label>
                                                <!-- <input formControlName="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Ingresa tu email"  required type="email" name=""> -->
                                                <input 
                                                onchange="validateJS(event, 'email')" 
                                                value="<?php echo isset($_COOKIE['correo']) ? $_COOKIE['correo'] : ''; ?>"
                                                type="email" 
                                                class="sex-input"  
                                                placeholder="Email" 
                                                name="ingEmail" 
                                                required>


                                                 <div class="valid-feedback">Válido.</div>
                                                 <div class="invalid-feedback">Campo inválido.</div>


                                            </div>
                                            <!-- --------------------- New Style ------------------------------------ -->
                                            <!-- --------------------- New Style ------------------------------------ -->
                                            <div class="form-group">
                                                <label for="">Contraseña*</label>
                                             <!--    <input formControlName="password"  class="form-control" id="" aria-describedby="passwordHelp" placeholder="Password"  required type="" name=""> -->
                                             <input 
                                             value=""
                                             type="password" 
                                             class="sex-input" 
                                             placeholder="Password" 
                                             name="ingPassword" 
                                             required>
                                                 <div class="valid-feedback">Válido.</div>
                                                 <div class="invalid-feedback">Campo inválido.</div>

                                            </div>
                                            <!-- --------------------- New Style ------------------------------------ -->
     <!--                                        <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-check form-check-inline icheck-primary">
                                                        <input type="checkbox" id="remember">
                                                        <label class="mont label_remember" for="remember">
                                                            Recordarme
                                                        </label>
                                                    </div> 
                                                </div>
                                            </div> -->


                                            <div class="form-item div-button">
                                                <button type="submit" class="button button-md button-block button-primary text-center  d-block mx-auto">
                                                    <span class="text text-center"><strong>ENTRAR</strong></span>
                                                </button>

                                            </div>
                                              <?php

                                               

                                                $login = new UsersController();
                                                $login -> login();
                                              ?>
 


                                        </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>




<!--=============================================== Modal ====================================================== -->


<div class="modal fade" id="resetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: black !important;">

                    <div class="row wdt100 justify-content-center">              

                        <div class="col-xs-12 form-container">
                            <div 
                              class="div-form_modal" 
                              style="
                            border: solid;
                            border-width: 1px;
                            border-color: white;
                            border-radius: 10px;

                              background-repeat: no-repeat; 
                              background-position: center; 
                              background-size: 100% 100%;">

                                
                                          <form   

                                          class="form-3 max-w-576" 
                                          method="post" 
                                          class="needs-validation" 
                                          novalidate>

                                            <!-- --------------------- New Style ------------------------------------ -->
                                            <div class="form-group">
                                                <label for="">Correo electrónico*</label>

                                                <input 
                                                onchange="validateJS(event, 'email')" 
                                                value="<?php echo isset($_COOKIE['correo']) ? $_COOKIE['correo'] : ''; ?>"
                                                type="email" 
                                                class="sex-input"  
                                                placeholder="Email" 
                                                name="ingEmail" 
                                                required>


                                                 <div class="valid-feedback">Válido.</div>
                                                 <div class="invalid-feedback">Campo inválido.</div>


                                            </div>
                                            <!-- --------------------- New Style ------------------------------------ -->
                                            <!-- --------------------- New Style ------------------------------------ -->
                                            <div class="form-group">
                                                <label for="">TOKEN*</label>

                                             <input 
                                             value=""
                                             type="text" 
                                             class="sex-input" 
                                             placeholder="Ingresa tu token personal, checa tu 1er correo." 
                                             name="ingToken" 
                                             required>
                                                 <div class="valid-feedback">Válido.</div>
                                                 <div class="invalid-feedback">Campo inválido.</div>

                                            </div>

                                            <div class="form-item div-button">
                                                <button type="submit" class="button button-md button-block button-primary text-center  d-block mx-auto">
                                                    <span class="text text-center"><strong>ENVIAR</strong></span>
                                                </button>

                                            </div>
                                              <?php

                                               

                                                $login = new UsersController();
                                                $login -> login();
                                              ?>
                                            <div class="form-item form-input-q ">
                                                <div class="row  justify-content-center">
                                            <!--         <div class="col text-right">
                                                    </div> -->
                                                        <a class="text-center links" href="https://whatsapp.com">Perdiste tu acceso? Comunicarme con Soporte</a><br>
                                                </div>

                                            </div>


                                        </form>
                            </div>
                        </div>
                    </div>

      </div>
<!--       <div class="modal-footer text-center justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
        <!-- <button type="button" class="btn btn-primary">Enviar</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>









</section>
<!-- ======================== FIN COL FORMULARIO =============================================  -->

   
<!-- ======================== FIN COL FORMULARIO =============================================  -->
<style>

/*.label_remember{
    font-family: 'montserrat' !important;
    margin-left: 10px;
    margin-top: 10px;
    font-weight: 300;
}
.mont{
    font-family: 'montserrat';
}
.bg-login{
    background-image: url('views/img/auth/login-1920x1080.webp');
}

    
  @media (max-width: 576px) {
    .bg-login{
        background-image: url('views/img/auth/414x896-movil.webp');
    }
  }


*/




</style>

<script src="<?php echo $path ?>views/assets/js/forms/forms.js"></script>
<script src="<?php echo $path ?>views/assets/js/loader/loader.js"></script>