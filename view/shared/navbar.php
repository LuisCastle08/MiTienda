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
                            <a class="nav-link active" aria-current="page" href="'.BASE_URL.'"><i class="fa-sharp-duotone fa-solid fa-house"></i> Home</a>
                        </li>';

                            $rol = isset($_SESSION['TiendaId']);
                            switch($rol){
                                case true:
                                    echo '
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="'.BASE_URL.'ListaProductos"><i class="fa-solid fa-list"></i> Lista Productos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="'.BASE_URL.'InventarioTienda"><i class="fa-solid fa-window-restore"></i> Inventario de Tienda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="'.BASE_URL.'LoginTienda"><i class="fa-solid fa-store"></i> Login Tienda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="'.BASE_URL.'DetalleTienda"><i class="fa-solid fa-circle-info"></i> Detalle Tienda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-danger" aria-current="page" href="'.BASE_URL.'"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
                                    </li>
                                    ';
                                    break;
                                default:
                                    echo '
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="'.BASE_URL.'LoginTienda"><i class="fa-solid fa-store"></i> Login Tienda</a>
                                    </li>   
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="'.BASE_URL.'AgregarTienda"><i class="fa-solid fa-square-plus"></i> Nueva Tienda</a>
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