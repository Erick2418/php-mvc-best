<?php

require_once 'config/COnexion.php';
class SolicitudesModel {
   private $db;
   
   public  function __construct() {
       $this->db = Conexion::getConexion();
   }
    public function insertarsol($cod, $idCli){
        $sql = "INSERT INTO solicitud_cab (sol_cab_id, sol_codigo, cuenta_id, fecha_hora_reg, sol_estado) VALUES (NULL, 12, :cuenta_id,1, :fecha, 1)";
        $sentencia = $this->db->prepare($sql);
        $sentencia->bindParam(':cod', $cod);
        $sentencia->bindParam(':cuenta_id', $idCli);
        $fechaActual = new DateTime('NOW');
        $strFecha = $fechaActual->format('Y-m-d H:i:s');
        $sentencia->bindParam(':fecha', $strFecha);
        $sentencia->execute();
        if ($sentencia->rowCount() > 0) {
            $idg = $this->db->lastInsertId();
            return $idg;
        }
        return 0;
    }
   public function insertar_detsol($idFac, $idPro, $unidad, $usu){
        $sql = "INSERT INTO factura_det (fac_det_id, fac_cab_id, pro_id, unidades, fecha_hora_reg, fac_usuActualizacion, fac_fechaActualizacion, fac_estado) VALUES (NULL, :idFac, :idPro, :uni, :fechaReg, :usu, :fecha, 1)";
        $sentencia = $this->db->prepare($sql);
        $sentencia->bindParam(':idFac', $idFac);
        $sentencia->bindParam(':idPro', $idPro);
        $sentencia->bindParam(':uni', $unidad);
        $sentencia->bindParam(':usu', $usu);
        $fechaActual = new DateTime('NOW');
        $strFecha = $fechaActual->format('Y-m-d H:i:s');
        $sentencia->bindParam(':fechaReg', $strFecha);
        $sentencia->bindParam(':fecha', $strFecha);
        $sentencia->execute();
        if ($sentencia->rowCount() <= 0) {
            return false;
        }
        return true;
    }
}
