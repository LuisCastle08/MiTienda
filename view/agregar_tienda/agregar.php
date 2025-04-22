<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = require_once __DIR__ . '/../../core/Database.php';
require_once __DIR__ . '/../../model/AgregarTienda.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {

        /*
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $nombreImagen = uniqid() . "_" . basename($_FILES['imagen']['name']);
            $rutaDestino = __DIR__ . '/uploads/' . $nombreImagen;

            // Asegurarse que exista carpeta uploads
            if (!is_dir(__DIR__ . '/uploads')) {
                mkdir(__DIR__ . '/uploads', 0777, true);
            }

            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        }
        */

        // Construir array de datos sin imagen
        $data = [
            'nombre' => $_POST['nombre'],
            'ubicacion' => $_POST['ubicacion'],
            'codigo_postal' => $_POST['codigo_postal'],
            'encargado' => $_POST['encargado'],
            'telefono' => $_POST['telefono'],
            'fecha_alta' => date('Y-m-d H:i:s'),
            'vistas_id' => "",
            'pass' => $_POST['pass'],
/*                 'pass' => password_hash($_POST['pass'], PASSWORD_DEFAULT), */

/*                 'imagen' => 'uploads/' . $nombreImagen,
            'hora_apertura' => $_POST['hora_apertura'],
            'hora_cierre' => $_POST['hora_cierre'], */
        ];

        // Insertar en DB
        if (Tienda::crear($data)) {
            echo json_encode(['success' => true]);
            exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al guardar en la base de datos']);
            exit;
        }

    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Excepción: ' . $e->getMessage()]);
        exit;
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}
