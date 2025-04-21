<?php

require_once './core/Database.php';

class Tienda {
    public static function crear($data) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO tiendas (nombre, imagen, ubicacion, codigo_postal, encargado, hora_apertura, hora_cierre, telefono) 
                              VALUES (:nombre, :imagen, :ubicacion, :codigo_postal, :encargado, :hora_apertura, :hora_cierre, :telefono)");

        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':imagen', $data['imagen']);
        $stmt->bindParam(':ubicacion', $data['ubicacion']);
        $stmt->bindParam(':codigo_postal', $data['codigo_postal']);
        $stmt->bindParam(':encargado', $data['encargado']);
        $stmt->bindParam(':hora_apertura', $data['hora_apertura']);
        $stmt->bindParam(':hora_cierre', $data['hora_cierre']);
        $stmt->bindParam(':telefono', $data['telefono']);

        return $stmt->execute();
    }
}
