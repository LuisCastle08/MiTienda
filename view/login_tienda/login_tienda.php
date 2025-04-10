<?php
    $title = "Iniciar Sesión";
    $fondo = 1;
    require_once __DIR__ . '/../shared/header.php';
?>    
<div class="container-fluid">
    <!-- Navbar -->
    <?php
        require_once __DIR__ . '/../shared/navbar.php';
    ?> 
    <!-- Fin Navbar -->

    <!-- Login -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-5">
                <div class="card">
                    <div class="card-header headLog d-flex justify-content-center">
                        <h5>Inicio de Sesión</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                        <img src="<?php echo IMAGENES_URL . 'login.png'; ?>" alt="Imagen de login" width="100" height="100">
                        </div>
                        <div class="mb-3 mt-3 col-12">
                            <label for="exampleFormControlInput1" class="form-label text-center col-12"><h6>USUARIO</h6></label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="exampleFormControlInput1" class="form-label text-center col-12"><h6>CONTRASEÑA</h6></label>
                            <input type="password" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3 mt-3 col-12 d-flex justify-content-center">
                            <a href="<?php echo BASE_URL; ?>DetalleTienda" class="btn btn-warning col-12 d-flex justify-content-center align-items-center">
                                <h6 class="mb-1 mt-1">Login</h6>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div>
                                <h6><p>¿Aún no registras tu tienda?</p></h6>
                                <p><a class="d-flex justify-content-center align-items-center" href="<?php echo BASE_URL; ?>LoginTienda">Registrarse</a></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    
    <!-- Fin Login -->
</div>

<?php
    require_once __DIR__ . '/../shared/footer.php';
?> 
