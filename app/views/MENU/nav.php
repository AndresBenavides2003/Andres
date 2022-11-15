
<?php
  $fecha = "";
  $login = new ControladorLogin();
  $datos= $login->DatosSolicitudes($fecha);
?>
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <i class="bi bi-list toggle-sidebar-btn d-sm-block d-lg-none"></i>
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="public/assets/img/logosena.png" alt="">&nbsp;&nbsp;
            <span class="d-sm-none d-none d-lg-block">SUB SEDE MALAMBO</span>
        </a>
     
    </div>

    <input type="hidden" value="" name="idSesionAp" id="idSesionAp">

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle" style="font-size:30px;"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php
              echo $datos["tipo"]." ". $datos["codigo"];
            ?>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
              <?php
                echo $datos["id_solicitud"];
              ?>
              </h6>

            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="perfilAprendiz">
                <i class="bi bi-person"></i>
                <span>Mi Perfil</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
                
            <li>
                <a class="dropdown-item d-flex align-items-center" href="carnet">
                    <i class="bi bi-person-badge"></i>
                    <span>Carnet</span>
                </a>
            </li>
            
            <li>
                <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="salir">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar Sesi��n</span>
              </a>
            </li>

          </ul>
        </li>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  