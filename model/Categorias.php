<?php
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
require_once __DIR__ . '/../core/Database.php';

class Categorias {
    public static function categorias() {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM CATEGORIAS");
        $result = $query->fetchAll(PDO::FETCH_ASSOC); // o PDO::FETCH_OBJ si quieres objetos
        return $result;
    }

    /*public static function login($usuario, $password) {
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
    }*/

}

?>