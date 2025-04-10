<?php
    $title = "Home";
    require_once __DIR__ . '/shared/header.php';
?>    
    <!-- Navbar -->
    <div class="row">
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-store-alt ms-2 me-2"></i> Mi Tienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>ListaProductos">Lista Productos</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </div>
    <!-- Fin Navbar -->

<?php
    require_once __DIR__ . '/shared/footer.php';
?>  
    <!-- Buscador -->
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-12 text-center">
                <h4>Buscar Tiendas Cercanas</h4>
            </div>
            <div class="col-12">
                <form class="d-flex justify-content-center" role="search">
                    <input class="form-control me-2 w-50" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <ol class="list-group list-group-numbered ms-1">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <button type="button" class="btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-image"></i></button>
                <div class="ms-2 me-auto">
                <div class="fw-bold">Abarrotes San Diego</div>
                Fracc. San Manuel Parrilla II Mza 20 Lt 22 CP. 86284
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
        <div class="modal-dialog">
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


    <script src="https://kit.fontawesome.com/33f535655a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
