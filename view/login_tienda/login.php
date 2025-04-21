<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Incluir el archivo de conexión a la base de datos

#require_once '../config/database.php';
#require_once '../models/User.php';
$pdo = require_once __DIR__ . '/../../core/Database.php';
require_once __DIR__ . '/../../model/Login.php';

// Verificar que la solicitud sea por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos del formulario
    $usuario = $_POST['usuario'] ?? null;
    $pass = $_POST['pass'] ?? null;

    // Validar los datos recibidos
    if ($usuario && $pass) {
        $loginModel = new Login($pdo);
            // Insertar el nuevo usuario en la base de datos
            $result = $loginModel->login($usuario, $pass);

            // Verificar si la inserción fue exitosa
            if ($result) {
                echo json_encode(['EVENTO' => 'OK']);
            } else {
                echo json_encode(['EVENTO' => 'NO', 'mensaje' => 'Error al registrar.']);
            }

    } else {
        echo json_encode(['EVENTO' => 'NO', 'mensaje' => 'Datos incompletos.']);
    }
} else {
    echo json_encode(['EVENTO' => 'NO', 'mensaje' => 'Solicitud inválida.']);
}

exit();
?>
