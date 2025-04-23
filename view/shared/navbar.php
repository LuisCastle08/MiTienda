    <!-- Navbar -->
    <div class="row">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color:#000000; font-size: 20px; text-shadow: -1px -1px 0 #FFF, 1px -1px 0 #FFF, -1px 1px 0 #FFF, 1px 1px 0 #FFF;"><img src="<?php echo IMAGENES_URL; ?>logoCont1.png"
                alt="" style="object-fit:contain; border-radius: 5px" width="50" height="50" class="me-2"> MiTienda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php
                        echo '
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="'.BASE_URL.'">Home</a>
                        </li>';
                        $rol = 'tienda';
                        switch($rol){
                            case 'admin':
                                echo '
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="'.BASE_URL.'" AgregarTienda">Nueva Tienda</a>
                                </li>
                                ';
                                break;
                            case 'tienda':
                                echo '
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="'.BASE_URL.'ListaProductos">Lista Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="'.BASE_URL.'InventarioTienda">Inventario de Tienda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="'.BASE_URL.'LoginTienda">Login Tienda</a>
                                </li>
                                ';
                                break;
                            default:
                                echo '
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="'.BASE_URL.'">Home</a>
                                </li>                             
                                ';
                                break;
                        }
                    ?>





                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Fin Navbar -->