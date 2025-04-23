<?php
#error_reporting(E_ALL);
#ini_set('display_errors', 1);
require_once __DIR__ . '/../core/Database.php';

class Productos {
    public static function listaProd($categoria) {
        $db = Database::connect();
        $query = $db->prepare("SELECT * FROM PRODUCTOS WHERE CategoriaId= :categoria");
        $query->bindParam(':categoria', $categoria, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC); // o PDO::FETCH_OBJ si quieres objetos
        return $result;
    }

}

?>