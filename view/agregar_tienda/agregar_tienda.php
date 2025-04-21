<?php
    $title = "Home";
    $fondo = '';
    require_once __DIR__ . '/../shared/header.php';
?>    
<div class="container-fluid">
    <!-- Navbar -->
    <?php
        require_once __DIR__ . '/../shared/navbar.php';
    ?> 
    <!-- Fin Navbar -->

<!-- FORMULARIO AGREGAR TIENDA -->
    <div class="container-fluid p-3">
    <div class="container mt-4">
    <h2 class="mb-4">Agregar Tienda</h2>
    <form action="ruta_a_guardar_tienda.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Tienda</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen de la Tienda</label>
            <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
        </div>
        <div class="mb-3">
            <label for="codigo_postal" class="form-label">Código Postal</label>
            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
        </div>
        <div class="mb-3">
            <label for="encargado" class="form-label">Dueño o Encargado</label>
            <input type="text" class="form-control" id="encargado" name="encargado" required>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="hora_apertura" class="form-label">Hora de Apertura</label>
                <input type="time" class="form-control" id="hora_apertura" name="hora_apertura" required>
            </div>
            <div class="col">
                <label for="hora_cierre" class="form-label">Hora de Cierre</label>
                <input type="time" class="form-control" id="hora_cierre" name="hora_cierre" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Número Telefónico</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" pattern="[0-9]{10}" placeholder="10 dígitos" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Tienda</button>
    </form>
</div>
    </div>
<!-- FIN FORMULARIO AGREGAR TIENDA -->


</div>

<?php
    require_once __DIR__ . '/../shared/footer.php';
?> 
