<?php
$title = "Productos Tienda";
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

    <!-- Productos en Página -->
    <div class="container contenido-productos mt-4">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <div class="card product dark mb-3">
                <img src="<?php echo IMAGENES_URL ?>ejemplo-tienda.jpg" class="card-img-top" alt="Producto">
                <div class="card-body product-body">
                    <div class="text-section">
                        <h5 class="card-title">PAN BIMBO<?php echo $i ?></h5>
                        <p class="card-text">Producto de tienda</p>
                    </div>
                    <div class="cta-section">                
                        <div>$129.00</div>
                        <a onclick="agregar('PAN BIMBO<?php echo $i ?>', 129.00)" class="btn btn-light">COMPRAR</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>


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
                        <div class="col-2 p-2">
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

    
</div>

<!-- Modal Carrito -->
<div class="modal fade" id="modalCarrito" tabindex="-1" aria-labelledby="modalCarritoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCarritoLabel">Carrito de Productos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" id="listaProductos">
        <!-- Se agregan dinámicamente -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Finalizar compra</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Catálogo -->
<div class="modal fade" id="modalCatalogo" tabindex="-1" aria-labelledby="modalCatalogoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCatalogoLabel">Catálogo de Productos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <?php for ($i = 0; $i < 6; $i++): ?>
          <div class="col-md-4 mb-3">
            <div class="card h-100">
              <img src="<?php echo IMAGENES_URL ?>ejemplo-tienda.jpg" class="card-img-top" alt="Producto">
              <div class="card-body text-center">
                <h5 class="card-title">PAN BIMBO<?php echo $i?></h5>
                <p class="card-text">Descripción breve del producto</p>
                <p><strong>$129.00</strong></p>
                <button onclick="agregar('PAN BIMBO', 129.00)" class="btn btn-primary">Agregar al carrito</button>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Barra inferior -->
<div class="navbar-bottom d-flex justify-content-around align-items-center p-1 bg-light border-top">
  <div class="row">
    <div class="col-10">
        <p class="mb-0">Productos en carrito:</p>
    </div>
    <div class="col-2 text-end">
        <button type="button" class="btn btn-warning cantidad" data-bs-toggle="modal" data-bs-target="#modalCarrito">0</button>
    </div>
  </div>

</div>

<?php require_once __DIR__ . '/../shared/footer.php'; ?>

<!-- Script carrito -->
<script>
let carrito = [];

function agregar(nombre, precio) {
    const existente = carrito.find(item => item.nombre === nombre);
    if (existente) {
        existente.cantidad += 1;
    } else {
        carrito.push({ nombre, precio, cantidad: 1 });
    }

    actualizarCarrito();
}

function actualizarCarrito() {
    const lista = document.getElementById('listaProductos');
    const contador = document.querySelector('.cantidad');
    lista.innerHTML = '';

    let total = 0;

    carrito.forEach((item, i) => {
        total += item.precio * item.cantidad;
        lista.innerHTML += `
            <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                <div>
                    <strong>${item.nombre}</strong><br>
                    Cantidad: ${item.cantidad}<br>
                    Precio: $${item.precio.toFixed(2)}
                </div>
                <button class="btn btn-sm btn-danger" onclick="eliminarProducto(${i})">Eliminar</button>
            </div>
        `;
    });

    lista.innerHTML += `<div class="mt-3"><strong>Total: $${total.toFixed(2)}</strong></div>`;
    contador.textContent = carrito.reduce((sum, item) => sum + item.cantidad, 0);
}

function eliminarProducto(index) {
    carrito.splice(index, 1);
    actualizarCarrito();
}
</script>
