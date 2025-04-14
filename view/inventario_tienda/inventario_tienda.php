<?php
    $title = "Inventario";
    $fondo = '';
    require_once __DIR__ . '/../shared/header.php';
?>    
<div class="container-fluid">
    <!-- Navbar -->
    <?php
        require_once __DIR__ . '/../shared/navbar.php';
    ?> 
    <!-- Fin Navbar -->

    <!-- Buscador -->
    <div class="container-fluid">
        <div class="row mt-4 justify-content-center">
            <div class="col-12 text-center">
                <h4>Mi Inventario</h4>
            </div>
            <div class="col-12">
                <form class="d-flex justify-content-center" role="search">
                    <input class="form-control me-2 w-50" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-warning" type="submit" id="btn_buscar">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Fin Buscador -->

    <!-- Lista de Productos -->
    <!--<div class="row justify-content-center mt-4">
        <div class="col-11 col-md-6">
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ3WGkjfgAjRfMWvG89rJI47XXwjjxyizJXhJ2fGkE7nmf8nZ2782HqRIUldIx-_IcHdej0Z5HGc0JD3V96lmAboYn5Y1loczvam20qbLj7-0mgOPYpov4FAQ"
                        alt="" style="object-fit:contain;" width="50" height="50" class="me-2">
                </span>
                <input type="text" class="form-control" value="GANSITO" style="font-weight:bold">
                <span class="input-group-text">+99 pz</span>
            </div>
        </div>
    </div>-->
<?php for($i = 0; $i < 5; $i++): ?>
    <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1 me-3">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1sWioeP5ize3TyZRnLFmMuqx4HpRHkwmGw&s"
                            alt="" style="object-fit:contain; border-radius: 5px" width="50" height="50" class="me-2">
                        </div>
                        <div class="col-8 justify-content-center text-center">
                            <label style="font-weight:bold">GANSITO MARINELA BIMBO DE LA BIMBO BIMBO</label>
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
<?php endfor; ?>
    <!-- Fin Lista de Productos -->

<!-- Modal Editar Producto -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-11">
                        <label style="font-weight:bold">GANSITO MARINELA BIMBO DE LA BIMBO BIMBO</label>
                    </div>
                </div>
                <div class="row d-flex justify-content-center text-center mt-4">
                    <div class="col-5">
                        <label style="font-weight:bold">Precio</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" value="16.50">
                        </div>
                    </div>
                    <div class="col-5">
                        <label style="font-weight:bold">Cantidad</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" value="23">
                            <span class="input-group-text">pz</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-ban me-2"></i>Cancelar</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-save me-2"></i>Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal Editar Producto -->

<?php
    require_once __DIR__ . '/../shared/footer.php';
?> 
