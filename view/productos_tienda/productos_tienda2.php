<?php
$title = "2Productos Tienda";
require_once __DIR__ . '/../shared/header.php';
?>

<div class="container-fluid">
    <!-- Navbar -->
    <?php require_once __DIR__ . '/../shared/navbar.php'; ?> 

    <!-- Info Tienda -->
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-11 col-md-6">
                <div class="card">
                    <img class="card-img-top mx-auto" style="max-width:300px;" src="<?php echo IMAGENES_URL ?>ejemplo-tienda.jpg" alt="Card image cap">
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


    <!-- Categorias -->
    <div class="row d-flex justify-content-center">
        <h4 class="mt-4 d-flex justify-content-center"><i class="fas fa-sitemap me-1"></i>Categorías</h4>
        <?php echo $listaCategorias; ?>
        <!--<div class="col-10 mt-2">
            <a href="ListaProductos1">
                <div class="card overflow-hidden card_menu">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="https://cdn-icons-png.freepik.com/512/8657/8657720.png"  width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">Bebidas</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-10 mt-2">
            <a href="ListaProductos1">
                <div class="card overflow-hidden card_menu">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="https://cdn-icons-png.freepik.com/512/8657/8657720.png"  width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">Botanas</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-10 mt-2">
            <div class="card overflow-hidden card_menu">
                <div class="card-body">
                    <div class="text-center">
                        <div class="profile-photo">
                            <img src="https://i.pinimg.com/564x/8a/90/70/8a9070cb7561e864b907d96d77fb788d.jpg"  width="100" class="" alt="">
                        </div>
                        <h3 class="mt-4 mb-1">Lacteos</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 mt-2">
            <div class="card overflow-hidden card_menu">
                <div class="card-body">
                    <div class="text-center">
                        <div class="profile-photo">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt6tEjFS5EYgPaRASHUbPx-FBJg8YvY4VZiw&s"  width="100" class="" alt="">
                        </div>
                        <h3 class="mt-4 mb-1">Galletas</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 mt-2">
            <div class="card overflow-hidden card_menu">
                <div class="card-body">
                    <div class="text-center">
                        <div class="profile-photo">
                            <img src="https://cdn-icons-png.flaticon.com/512/3790/3790052.png"  width="100" class="" alt="">
                        </div>
                        <h3 class="mt-4 mb-1">Panaderia</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 mt-2">
            <div class="card overflow-hidden card_menu">
                <div class="card-body">
                    <div class="text-center">
                        <div class="profile-photo">
                            <img src="https://cdn-icons-png.flaticon.com/512/7438/7438630.png"  width="100" class="" alt="">
                        </div>
                        <h3 class="mt-4 mb-1">Productos de LImpieza</h3>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="col-12 mb-3">

        </div>
    </div>

    
    <!-- Fin Categorias -->

    
</div>

<?php require_once __DIR__ . '/../shared/footer.php'; ?>

