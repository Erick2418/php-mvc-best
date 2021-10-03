<?php
require_once 'config/COnexion.php';
class FacturasModel {
   private $db;
   
   public  function __construct() {
       $this->db = Conexion::getConexion();
   }
   
   public function consultar(){
   }
    public function insertar($cod, $idCli){
        $sql = "INSERT INTO factura_cab (fac_cab_id, cuenta_id, fecha_hora_reg, fac_cab_estado) VALUES (NULL, :idCli, :fecha, 1)";
        $sentencia = $this->db->prepare($sql);
       // $sentencia->bindParam(':cod', $cod);
        $sentencia->bindParam(':idCli', $idCli);
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
   public function insertar_det($idFac, $idPro, $unidad, $usu){
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
   
   public function ConsultarDatosF($arrayIdPulido,$arrayCanttidadPulido){

       $longitudID=count($arrayIdPulido);
       $prodId='';
       for( $i=0; $i< $longitudID;$i++ ){
            if($i<$longitudID-1){
                 $prodId=$prodId." pro_id = :id".$i." or";
            }else{
                 $prodId=$prodId." pro_id = :id".$i;
            }
       }
    $sql= "SELECT pro_id, pro_nombre, pro_descripcion, pro_precio FROM producto WHERE".$prodId;
    
    $sentencia = $this->db->prepare($sql);
    //bind parameters DEL ARREGLO
    for( $i=0 ; $i<$longitudID;$i++){
        $sentencia->bindParam(':id'.$i,$arrayIdPulido[$i]);
    }
    //execute
    $sentencia->execute();
    //retornar los resultados
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $resultados;
       
       
   }
   
    
}