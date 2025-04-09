<?php

class ProductoController {
    public function ver() {
        // Cargar la vista de productos
        require_once './view/productos.php';
    }

    public function listar() {
        // Cargar la vista de lista de productos
        require_once './view/productos_tienda/productos_tienda.php';
    }
}

?>