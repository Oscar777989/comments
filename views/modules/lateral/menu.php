
  <!-- Main Sidebar Container -->
  <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black !important;"> -->
  <aside class="main-sidebar  elevation-4">
<!--   <aside class="main-sidebar  elevation-4"> -->
    <!-- Brand Logo -->
    <a href="level" class="brand-link">
    <span class="brand-text font-weight-light"></span>
      <img src="vistas/dist/img/logoblancodoradoOpt.png" height="70" width="70" alt="Soy High Ticket" class="brand-image  elevation-3" >
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php  
          //  echo '<a href="cursos" class="d-block">'.$_SESSION['nombre'].'</a>';
          ?>
          
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- ===============   AGENCIA  ==================== -->
          <!-- ====== ========================================================================================== -->
<!-- ====== ================ZONA DE ADMINISTRACION =================================================== -->
<!-- ====== ========================================================================================== -->

  <?php

   if($_SESSION["perfil"] == "administrador"){

    echo ' <H3>ADMINISTRACION</H3>

            <li class="nav-item">
                <a href="usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>GESTOR USUARIOS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="perfiles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADMINISTRAR PERFILES</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADMINISTRAR CURSOS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cuestionarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CUESTIONARIOS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ADMINISTRAR PAGOS</p>
                </a>
              </li><br><br>';

  }

  ?>
           


<!-- ====== ========================================================================================== -->
<!-- ====== ================ZONA DE ADMINISTRACION =================================================== -->
<!-- ====== ========================================================================================== -->


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th "></i>
              <p>
                GRUPO PRIVADO
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="perfil" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>perfil</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    NOTIFICACIONES
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
            </ul>
          </li>




              <!-- <li class="nav-item menu">
                <a href="estadisticas" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    ESTADISTICAS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                
                </ul>

              </li> -->


<!--                 <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mis Notas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tools</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proyecto</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Noticias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PROMOCIONES</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SUGERENCIAS</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="perfil" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PERFIL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>NOTIFICACIONES</p>
                </a>
              </li>


<!--               <hr>
              <li class="nav-item">
                <a href="fases" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="n1_100k">NIVEL 1: 100K</p>
                </a>
              </li>
              <hr> -->


              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SALA HT100K</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ACCIONOMETRO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CHA-CHINGS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAVORITOS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MERCH</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CAPICOINS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>AFILIADOS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOPORTE</p>
                </a>
              </li>
  
            </ul>
          </li>
          <!-- ===================fin  ESTRATEGIA ====================================== -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  
<style>
  *{
    font-family: 'chaneyultra_extended';
    color: #c2c2c2 !important;
  }
  .n1_100k{
    color: #CCB178 !important;
  }
  hr{
    height: 1px;
    background-color: #ccc;
    width: 100%;
  }
  .main-sidebar{
    border-right: 1px solid #ccc;
    z-index: 10;
    box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.5) !important;
  }
  .main-sidebar, .sidebar, .brand-link, .nav-item, ul, li{
   background-color: black !important; 
   /* width: 600px; */
  }
  .nav-link{
    width: 100% !important;
  }
  .main-sidebar, .main-sidebar::before {
    transition: margin-left .3s ease-in-out,width .3s ease-in-out;
    width: 320px;
}
      body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
              margin-left: 320px;
      }

</style>