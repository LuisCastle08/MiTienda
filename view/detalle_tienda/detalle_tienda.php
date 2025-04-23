<?php
    $title = "Iniciar Sesión";
    require_once __DIR__ . '/../shared/header.php';
?>    
<div class="container-fluid">
    <!-- Navbar -->
    <?php
        require_once __DIR__ . '/../shared/navbar.php';
    ?> 
    <!-- Fin Navbar -->
    <!-- Detalle de ls Tienda -->
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-5">
            <div class="input-group mb-3 mt-3">
                <button type="button" class="btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-image"></i></button>
                <input type="text" class="form-control" style="font-weight: bold;" value="<?php echo $_SESSION['TiendaNom'] ?>" aria-label="Recipient's username" aria-describedby="button-addon2" disabled>
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-edit"></i></button>
            </div>
        </div>
    </div>
    <!-- Fin Detalle de la Tienda -->

    <!-- Herramientas -->
    <div class="row d-flex justify-content-between align-items-start">
        <div class="col-6 mt-2">
            <a href="#" class="text-decoration-none">
                <div class="card overflow-hidden card_menu h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="https://cdn-icons-png.flaticon.com/512/1330/1330833.png"  width="100" class="img-fluid " alt="">
                            </div>
                            <h3 class="mt-4 mb-1 text-wrap">1500 Vistas</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 mt-2">
            <a href="<?php echo BASE_URL; ?>InventarioTienda" class="text-decoration-none">
                <div class="card overflow-hidden card_menu h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="https://cdn-icons-png.flaticon.com/512/2674/2674486.png"  width="100" class="img-fluid " alt="">
                            </div>
                            <h3 class="mt-4 mb-1 text-wrap">Inventario</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 mt-3">
            <a href="#" class="text-decoration-none">
                <div class="card overflow-hidden card_menu h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="https://cdn-icons-png.flaticon.com/512/9580/9580634.png"  width="100" class="img-fluid " alt="">
                            </div>
                            <h3 class="mt-4 mb-1 text-wrap">Soporte a Usuarios</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!--<label for="exampleFormControlInput1" class="form-label text-center col-12"><h5>Herramientas</h5></label>
        <div class="col-12 d-flex justify-content-center">
            <a href="#" class="text-decoration-none text-dark w-100 d-flex justify-content-center">
                <div class="card col-10 col-lg-5 mb-3" style="background-color: #FFC107">
                    <div class="card-body text-center">
                        <h6><i class="fas fa-eye me-2"></i></i>150 Vistas</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a href="<?php /*echo BASE_URL;*/ ?>InventarioTienda" class="text-decoration-none text-dark w-100 d-flex justify-content-center">
                <div class="card col-10 col-lg-5 mb-3" style="background-color: #FFC107">
                    <div class="card-body text-center">
                        <h6><i class="fas fa-box me-2"></i>Inventario</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a href="#" class="text-decoration-none text-dark w-100 d-flex justify-content-center">
                <div class="card col-10 col-lg-5 mb-3" style="background-color: #FFC107">
                    <div class="card-body text-center">
                        <h6><i class="fas fa-cart-plus me-2"></i>Nuevo Producto</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a href="#" class="text-decoration-none text-dark w-100 d-flex justify-content-center">
                <div class="card col-10 col-lg-5 mb-3" style="background-color: #FFC107">
                    <div class="card-body text-center">
                        <h6><i class="fas fa-user me-2"></i>Soporte de Usuarios</h6>
                    </div>
                </div>
            </a>
        </div>-->
    </div>
    <!-- Fin Herramientas -->

    <!-- Modal Imagen -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Imagen de la Tienda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://comercialtrevino.com/images/uploads/donde-puedo-surtir-mi-tienda-de-abarrotes.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal Imagen -->

</div>

<?php
    require_once __DIR__ . '/../shared/footer.php';
?> 
