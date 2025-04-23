<?php

class ProductoController {

    public function listar() {
        // Cargar la vista de lista de productos
        $pdo = require_once __DIR__ . '/../core/Database.php';
        require_once __DIR__ . '/../model/Categorias.php';

        $loginModel = new Categorias($pdo);
        // Insertar el nuevo usuario en la base de datos
        $result = Categorias::categorias();
        #var_dump($result);
        $listaCategorias='';
        foreach ($result as $cat) {
            #echo $cat['CategoriaId'] . ' - ' . $cat['CategoriaNom'] . '<br>';
            $listaCategorias.='
                <div class="col-6 mt-2">
                    <a href="ListaProductos1?c='.$cat['CategoriaId'].'" class="text-decoration-none">
                        <div class="card overflow-hidden card_menu h-100">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="text-center">
                                    <div class="profile-photo">
                                        <img src="'.IMG_CAT. $cat['CategoriaId'].'.png"  width="100" class="img-fluid " alt="">
                                    </div>
                                    <h3 class="mt-4 mb-1 text-wrap">'.$cat['CategoriaNom'].'</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ';
        }
        #echo $listaCategorias;

        require_once './view/productos_tienda/productos_tienda2.php';
    }

    public function listaPro() {
        $pdo = require_once __DIR__ . '/../core/Database.php';
        require_once __DIR__ . '/../model/Categorias.php';

        $categoria= $_GET["c"];

        $productosModel = new Productos($pdo);
        // Insertar el nuevo usuario en la base de datos
        $result = Productos::listaProd($categoria);
        #var_dump($result);
        $listaProductos='';
        if (!empty($result)) {
            foreach ($result as $prod) {
                #echo $cat['CategoriaId'] . ' - ' . $cat['CategoriaNom'] . '<br>';
                $listaProductos.='
                    <div class="row justify-content-center mt-4">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-1 me-3">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1sWioeP5ize3TyZRnLFmMuqx4HpRHkwmGw&s"
                                            alt="" style="object-fit:contain; border-radius: 5px" width="50" height="50" class="me-2">
                                        </div>
                                        <div class="col-8 justify-content-center text-center ms-1">
                                            <label style="font-weight:bold">'.$prod["ProductoNom"].'</label>
                                        </div>
                                        <div class="col-2 me-1 pe-3 ps-0 ms-0 pe-1">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><h6>Editar</h6></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-auto">
                                            <label class="fw-bold mb-0">Piezas: 25u</label>
                                        </div>
                                        <div class="col-auto">
                                            <label class="fw-bold mb-0">Precio: $12.50</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }else{
            $listaProductos='
                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-6">
                        <p>Sin productos asociados a esta categoría</p>
                    </div>
                </div>
            ';
        }

        // Cargar la vista de lista de productos
        require_once './view/productos_tienda/productos_tienda.php';
    }

}

?>