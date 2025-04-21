<?php

require_once '../../core/Database.php';


class Tienda {
    public static function crear($data) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO TIENDAS (TiendaNom, TiendaDir, TiendaCP, TiendaEncargado, TiendaTel, TiendaFechAlta, TiendaVistasId, TiendaPass) 
        VALUES (:nombre, :ubicacion, :codigo_postal, :encargado, :telefono, :fecha_alta, :vistas_id, :pass)");
        
        $stmt->bindParam(':nombre', $data['nombre']);
        $stmt->bindParam(':ubicacion', $data['ubicacion']);
        $stmt->bindParam(':codigo_postal', $data['codigo_postal']);
        $stmt->bindParam(':encargado', $data['encargado']);
        $stmt->bindParam(':telefono', $data['telefono']);
        $stmt->bindParam(':fecha_alta', $data['fecha_alta']);
        $stmt->bindParam(':vistas_id', $data['vistas_id']);
        $stmt->bindParam(':pass', $data['pass']);
        
  /*       $stmt->bindParam(':imagen', $data['imagen']);
        $stmt->bindParam(':hora_apertura', $data['hora_apertura']);
        $stmt->bindParam(':hora_cierre', $data['hora_cierre']); */

        return $stmt->execute();
    }
}
