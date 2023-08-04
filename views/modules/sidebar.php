
  <aside class="main-sidebar  elevation-4 menu-lateral"  style="background-color: rgb(2, 2, 2, 0.95);font-size: 0.7rem;color:#c2c2c2;font-weight: 400;">

            <div style="height: 30px;"></div> 


            <div class="sidebar">

              <nav class="mt-2" style="margin-left: 1rem;">
                
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- =================================================================================================================================================== -->
<!-- ========================     ZONA DE ADMINISTRACION  ============================================================================================== -->
<!-- =================================================================================================================================================== -->


<?php if ($_SESSION["user"]->profile_user == "admin" ){ 



      echo ' 
                              

                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <a href="/dashboard" class="nav-link">                 
                                  
                                    <h5>ZONA ADMIN</h5>
                                  
                                </a>
                              </li>
                                <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/perfil-prev.png" alt="User Image" width="18">
                                <a href="/dashboard" class="nav-link">                 
                                  <p>
                                    DASHBOARD
                                  </p>
                                </a>
                              </li>

                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/perfil-prev.png" alt="User Image" width="18">
                                <a href="/adm-users" class="nav-link">                 
                                  <p>
                                    USUARIOS
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/perfil-prev.png" alt="User Image" width="18">
                                <a href="/adm-perfiles" class="nav-link">                 
                                  <p>
                                    ADMINISTRADORES
                                  </p>
                                </a>
                              </li>

                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-levels" class="nav-link">                 
                                  <p>
                                    NIVELES
                                  </p>
                                </a>
                              </li>

                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-fases" class="nav-link">                 
                                  <p>
                                    FASES 
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-modules" class="nav-link">                 
                                  <p>
                                    MODULOS
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-videos" class="nav-link">                 
                                  <p>
                                    VIDEOS
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-frameworks" class="nav-link">                 
                                  <p>
                                    FRAMEWORKS
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-inputs" class="nav-link">                 
                                  <p>
                                    INPUTS
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-chachings" class="nav-link">                 
                                  <p>
                                    CHA-CHINGS
                                  </p>
                                </a>
                              </li>
                              <li class="nav-item adm_list" style="padding-top: 10px;" style="padding-bottom: 4rem;border-bottom: 5px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                                <a href="/adm-support" class="nav-link">                 
                                  <p>
                                    SOPORTE
                                  </p>
                                </a>
                              </li>

                              <div style="height:2px;margin-bottom: 1rem;margin-top: 1rem;background:white;"></div>
                              <h5>ZONA USUARIOS</h5>

                         ';



}
 ?>
  

<!-- =================================================================================================================================================== -->
<!-- ========================   FIN  ZONA DE ADMINISTRACION  =========================================================================================== -->
<!-- =================================================================================================================================================== -->
                 <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/HOME-DORADO-24.webp" alt="User Image" width="18">
                    <a href="/home" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "administradores"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        HOME
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <img src="<?php echo $path ?>views/assets/img/icons/perfil-prev.png" alt="User Image" width="18">
                    <a href="/profile" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "administradores"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        PERFIL 
                      </p>
                    </a>
                  </li>
                  
<!--                   <li class="nav-item" style="padding-bottom: 10px;border-bottom: 2px solid #4f5962;margin-right: 10px;">
                    <img  src="<?php echo $path ?>views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                    <a href="/group" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "administradores"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        GRUPO PRIVADO
                      </p>
                    </a>
                  </li> -->
                  <li class="nav-item"style="padding-bottom: 10px;border-bottom: 2px solid #4f5962;margin-right: 10px;">
                    <img  src="<?php echo $path ?>views/assets/img/icons/Comunidad.webp" alt="User Image" width="18">
                    <a href="/comunidad" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        COMUNIDAD
                      </p>
                    </a>
                  </li>





        <?php 

        if (isset($_SESSION["level"])) {
                   switch ($_SESSION["level"]) {
                      case '1':
                        echo ' 
                              <li class="nav-item" style="padding-top: 10px;padding-bottom: 10px;border-bottom: 2px solid #4f5962;margin-right: 10px;">
                                <img src="'.$path.'views/assets/img/icons/leve1-100k-sm.png" alt="User Image">
                                <a href="/fases" class="nav-link">
                                 
                                  <img  src="'.$path.'views/assets/img/icons/100k-side.webp"  height="10" alt="User Image">
                                </a>
                              </li>
                              <li class="nav-item" style="padding-top: 10px;">
                                <img src="'.$path.'views/assets/img/icons/SALA-HT100K-24.webp" alt="User Image" width="18">
                                <a href="/sala" class="nav-link">                 
                                  <p class="txt_sidebar">
                                    MENTORÍAS
                                  </p>
                                </a>
                              </li>
                         ';
                        break;
                      case '2':
                        echo ' 
                              <li class="nav-item" style="padding-top: 10px;padding-bottom: 10px;border-bottom: 2px solid #4f5962;margin-right: 10px;">
                                <img src="<?php echo $path ?>views/assets/img/icons/leve1-100k-sm.png" alt="User Image">
                                <a href="/fases" class="nav-link active">
                                 
                                  <img src="<?php echo $path ?>views/assets/img/icons/100k-side.webp" alt="User Image" height="10">
                                </a>
                              </li>
                         ';
                        break;
                          case '3':
                        echo ' 
                              <li class="nav-item" style="padding-top: 10px;padding-bottom: 10px;border-bottom: 2px solid #4f5962;margin-right: 10px;">
                                <img src="<?php echo $path ?>views/assets/img/icons/leve1-100k-sm.png" alt="User Image">
                                <a href="/fases" class="nav-link  active ">
                                 
                                  <img src="<?php echo $path ?>views/assets/img/icons/100k-side.webp" alt="User Image" height="10">
                                </a>
                              </li>
                         ';
                        break;
                      
                      default:
                        // code...
                        break;
                    }
        }

         ?>

     <!--             <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/face-sm.png" alt="User Image" width="18">
                    <a href="/chachings" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p>
                        ACCIONOMETRO
                      </p>
                    </a>
                  </li> -->








                 <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/Chaching-24.webp" alt="User Image" width="18">
                    <a href="/chachings" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        CHA-CHINGS
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/LeaderBoard-sm.webp" alt="User Image" width="18">
                    <a href="/leaderboard" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        LEADERBOARD
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/ServiciosHT-24.webp" alt="User Image" width="18">
                    <a href="/services" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        SERVICIOS HT
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/Hall_of_-fame-24.webp" alt="User Image" width="18">
                    <a href="/club" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        HT CLUB
                      </p>
                    </a>
                  </li>







                   <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/Merch-sm.webp" alt="User Image" width="18">
                    <a href="/merch" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        MERCH
                      </p>
                    </a>
                  </li> 


                  <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/AFILIADOS-24.webp" alt="User Image" height="18">
                    <a href="/affiliates" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        AFILIADOS
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <img  src="<?php echo $path ?>views/assets/img/icons/Soporte-24px.png" alt="User Image" width="18">
                    <a href="/support" class="nav-link <?php if (!empty($routesArray[1]) && $routesArray[1] == "chachings"): ?> active <?php endif ?>">
                     
                      <p class="txt_sidebar">
                        SOPORTE
                      </p>
                    </a>
                  </li>



        <!-- level1-100k-text-sm -->

                  <li class="nav-item">
                    <img src="<?php echo $path ?>views/assets/img/icons/logout-sm.png" alt="User Image" width="18">
                    <a href="/salir" class="nav-link">
                     
                      <p class="txt_sidebar">
                        SALIR
                      </p>
                    </a>
                  </li>
         
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->


                  <li class="nav-item last">
                    <!-- <img src="<?php echo $path ?>views/assets/img/icons/logout-sm--.png" alt="User Image" width="18"> -->
                    <a href="/faq" class="nav-link">
                      <p class="txt_sidebar">
                        FAQ
                      </p>
                    </a>
                  </li>
   
  </aside>


<style>

aside{
  border: none !important;
  margin-right: -1px;
}

.last{
  position: absolute;
  margin-left: 23px;
  bottom: 0;
}
::placeholder{
  font-family: 'montserrat' !important;
/*  font-size: 14px;
  width: 140px;*/
}

.txt_sidebar{
  font-family: 'knockout';
  font-size: 14px;
}
.adm_list{
  padding-top: 3px !important;
}

li{
  justify-content: start;
}
 .cerrar{
  margin-top: -7px;
 }   

/*::placeholder { 
  color: blue;
  font-size: 0.7em;
}*/

.btn-group-lg>.btn, .btn-lg {
/*    padding: 0.5rem 1rem;*/
    font-size: 0.7rem;
    line-height: 0;
    border-radius: 1rem;
    background-color: black;
    height: 1.4rem;
     border-color: #4f5962;
}

.fa-search{
  margin-top: -4px;
/*  background-color: #4f5962;*/
}

.form-control-sm {
    height: 1rem;
    padding: 0.25rem 0.5rem;
    font-size: .5rem;
    line-height: 1.2;
    border-radius: 1rem;
    border-color: #4f5962;
}

li{
  border-radius: 0px !important;
}

/*.main-sidebar, .main-sidebar::before {
    transition: margin-left .3s ease-in-out,width .3s ease-in-out;
    width: 35vw;
}*/
.menu-lateral {
  position: relative; /* para posicionar la línea en relación al menú */
  overflow: visible;
}

/*.right-border-image {
  position: absolute;
  top: 0;
  right: -15px;
  width: 15px;*/ /* o el ancho que desees */
  /*height: 100%;
  z-index: 1; /* para que la imagen esté encima del menú */
/*  margin-left: -30px;
}*/



/*.right-border-line {
  position: absolute;
  top: 0;
  right: 0;
  width: 1px;
  height: 100%;
  background-color: #afafaf;
}
*/


    .logo {
    height: auto;
    width: 4rem !important;
    }
    .nav-sidebar .nav-item>.nav-link {
        margin-bottom: 0rem !important;
    }


   .sidebar {
    height: 100vh !important;
   }


/*   @media (max-width: 576px){
    .last{
      position: absolute;
      margin-left: 20px;
      bottom: 0;
    }

   }*/

  </style>