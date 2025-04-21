<?php

require_once '../../core/Database.php';

class Login {
    public static function obtenerTodos() {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM usuarios");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function login($usuario, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM TIENDAS WHERE TiendaNom = :usuario AND TiendaPass = :pass");
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result; // Devuelve los datos si encontró algo
        } else {
            return 'EXISTE_DATOS'; // Devuelve esto si no encontró nada
        }
    }

    public static function crear($nombre) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO usuarios (UsuNom) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->execute();
        return $db->lastInsertId(); // Devuelve el ID del usuario creado
    }
}

?>