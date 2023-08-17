<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/proyecto2_login/">
                <img src="<?= asset('./images/cit.png') ?>" width="35px'" alt="cit" >
                LOGIN PRUEBA
            </a>
            <div class="collapse navbar-collapse" id="navbarToggler">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: 0;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/ejemplo/"><i class="bi bi-house-fill me-2"></i>Inicio</a>
                    </li>
  
                    <div class="nav-item dropdown " >
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-gear me-2"></i>Dropdown
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-dark "id="dropwdownRevision" style="margin: 0;">
                            <!-- <h6 class="dropdown-header">Información</h6> -->
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>sub item</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>sub item</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>sub item</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>subitem</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>subitem</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>sub item</a>
                            </li>
                            <li>
                                <a class="dropdown-item nav-link text-white " href="/proyecto2_login/"><i class="ms-lg-0 ms-2 bi bi-plus-circle me-2"></i>subitem</a>
                            </li>
                    
                        
                        </ul>
                    </div> 

                </ul> 
                <div class="col-lg-1 d-grid mb-lg-0 mb-2">
                    <!-- Ruta relativa desde el archivo donde se incluye menu.php -->
                    <a  class="btn btn-danger" id="CerrarSesion"><i class="bi bi-arrow-bar-left"></i>CERRAR SESIÓN</a>
                </div>

            
            </div>
        </div>
        
    </nav>

    <script src="<?= asset('./build/js/menu/index.js') ?>"></script>