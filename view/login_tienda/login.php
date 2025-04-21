<?php
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
// Incluir el archivo de conexión a la base de datos
session_start();
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
        $result = Login::login($usuario, $pass);

        // Verificar si la inserción fue exitosa
        if ($result == 'EXISTE_DATOS') {
            #var_dump($result);
            #exit;
            echo json_encode(['EVENTO' => 'NO_EXISTE']);
        } else {
            $_SESSION['TiendaId'] = $result['TiendaId'];
            $_SESSION['TiendaNom'] = $result['TiendaNom'];
            $_SESSION['TiendaDir'] = $result['TiendaDir'];
            $_SESSION['TiendaCP'] = $result['TiendaCP'];
            $_SESSION['TiendaEncargado'] = $result['TiendaEncargado'];
            $_SESSION['TiendaTel'] = $result['TiendaTel'];
            $_SESSION['TiendaFechAlta'] = $result['TiendaFechAlta'];
            $_SESSION['TiendaVistasId'] = $result['TiendaVistasId'];
            #$_SESSION['TiendaPass'] = $result['TiendaPass'];
            echo json_encode([
                'EVENTO' => 'OK',
                'TiendaId' =>  $_SESSION['TiendaId'],
                'TiendaNom' => $_SESSION['TiendaNom'],
                'TiendaDir' => $_SESSION['TiendaDir'],
                'TiendaCP' => $_SESSION['TiendaCP'],
                'TiendaEncargado' => $_SESSION['TiendaEncargado'],
                'TiendaTel' => $_SESSION['TiendaTel'],
                'TiendaFechAlta' => $_SESSION['TiendaFechAlta'],
                'TiendaVistasId' => $_SESSION['TiendaVistasId']
                #'TiendaPass' => $result['TiendaPass']
            ]);
        }

    } else {
        echo json_encode(['EVENTO' => 'NO', 'mensaje' => 'Datos incompletos.']);
    }
} else {
    echo json_encode(['EVENTO' => 'NO', 'mensaje' => 'Solicitud inválida.']);
}

exit();
?>
