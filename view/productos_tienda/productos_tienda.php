<?php
    $title = "Productos Tienda";
    require_once __DIR__ . '/../shared/header.php';
?>

    <!-- Navbar -->
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="fas fa-store-alt ms-2 me-2"></i> MiTienda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
    </div>
    <!-- Fin Navbar -->

<!-- Info Tienda -->
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6">
            <div class="card">
                <img class="card-img-top mx-auto" style="max-width:300px ;" src="https://comercialtrevino.com/images/uploads/donde-puedo-surtir-mi-tienda-de-abarrotes.jpg" alt="Card image cap">
                <div class="card-body text-center">
                    <h4 class="card-title">Bienvenido a "Nombre Tienda"</h4>
                    <p>
                        <a href="https://www.google.com/maps?q=Av.+Por+Ahi+no+se+en+donde+%23666" target="_blank" class="btn btn-link">Dirección: Av. Por Ahi no se en donde #666</a>
                    </p>
                    <p>
                        <a href="tel:+52993425233847" class="btn btn-link">Teléfono: 99-34-25-38-47</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin Info Tienda -->

<!-- Buscador -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form action="#" method="GET">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Buscar productos..." aria-label="Buscar productos">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Buscador -->

<div class="container mt-3">
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Responsive Horizontal Product Card with Bootstrap 4</h3>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-media">
                        <a href="#">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61pmrFT-M7L._AC_US218_.jpg" alt="product name">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#">
                                Fujifilm instax mini 9 Instant Film Camera (Cobalt Blue) + Fujifilm Instax Mini Twin Pack Instant Film (80 Shots) + Camera Case + AA Batteries + Accessory Bundle -
                            </a>
                        </h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional content.
                            <small>
                                FREE Shipping on eligible orders
                            </small>
                        </p>
                        <div class="card-footer">
                            <div class="card-price">
                                $ 199.99
                                <small>Small Text</small>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require_once __DIR__ . '/../shared/footer.php';
?>