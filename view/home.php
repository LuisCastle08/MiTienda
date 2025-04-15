<?php
    $title = "Home";
    $fondo = '';
    require_once __DIR__ . '/shared/header.php';
?>    
<div class="container-fluid">
    <!-- Navbar -->
    <?php
        require_once __DIR__ . '/shared/navbar.php';
    ?> 
    <!-- Fin Navbar -->

    <!-- Buscador -->
    <div class="container-fluid">
        <div class="row mt-4 justify-content-center">
            <div class="col-12 text-center">
                <h4>Buscar Tiendas Cercanas</h4>
            </div>
            <div class="col-12">
                <form class="d-flex justify-content-center" role="search">
                    <input class="form-control me-2 w-50" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-warning" type="submit" id="btn_buscar">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-3 d-flex justify-content-center align-items-center">
        <ol class="list-group list-group-numbered p-0 col-lg-6 justify-content-center">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Abarrotes San Diego</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 232323
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Six San Manuel</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Super Sánchez</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Super Sánchez</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Super Sánchez</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Super Sánchez</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start align-items-center">
                <button type="button" class="btn d-flex justify-content-center align-items-center"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Super Sánchez</div>
                    Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
                </div>
            </li>
        </ol>
    </div>
    <!-- Fin Buscador -->

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
    require_once __DIR__ . '/shared/footer.php';
?> 
