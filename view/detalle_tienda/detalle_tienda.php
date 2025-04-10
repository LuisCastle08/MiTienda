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
    <div class="row d-flex justify-content-between align-items-start">
        
        <div class="input-group mb-3 mt-3">
            <button type="button" class="btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-image"></i></button>
            <input type="text" class="form-control" value="La Fonda de Kiki" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-edit"></i></button>
        </div>
    </div>
    <!-- Fin Detalle de la Tienda -->

    <!-- Herramientas -->
    <div class="row d-flex justify-content-between align-items-start">
        <label for="exampleFormControlInput1" class="form-label text-center col-12"><h5>Herramientas</h5></label>
        <div class="col-12 d-flex justify-content-center">
            <div class="card col-10 mb-3" style="background-color: #FFC107">
                <div class="card-body text-center">
                    <i class="fas fa-box me-2"></i>Inventario
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="card col-10 mb-3" style="background-color: #FFC107">
                <div class="card-body text-center">
                <i class="fas fa-cart-plus me-2"></i>Nuevo Producto
                </div>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="card col-10 mb-3" style="background-color: #FFC107">
                <div class="card-body text-center">
                <i class="fas fa-user me-2"></i>Soporte de Usuarios
                </div>
            </div>
        </div>
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
