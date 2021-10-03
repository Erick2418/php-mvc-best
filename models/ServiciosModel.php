<?php
require_once 'config/COnexion.php';
class ServiciosModel {
   private $db;
   
   public  function __construct() {
       $this->db = Conexion::getConexion();
   }
   
   public function consultar(){
    
    $sql="SELECT ser_id, ser_nombre, ser_descripcion, ser_precio, ser_img, ser_estado FROM servicio WHERE 1";
    
       //preparar la sentencia
       $sentencia = $this->db->prepare($sql);
       //bind parameters
       //execute
       $sentencia->execute();
       //retornar los resultados
       $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
       return $resultados;
   }
    public function consultarCatalogoSeleccion($ArrId){
    //   LINEA PREPARANDO EL ARREGLO PARA ENVIARLO AL SQL     
      $longitud = count($ArrId);
    //  echo $arrlength;
      $prodId='';
    for( $i=0 ; $i<$longitud;$i++){
        if($i<$longitud-1){
            $prodId=$prodId." ser_id = :id".$i." or";
        }else{
            $prodId=$prodId." ser_id = :id".$i;
        }
        
    }
   //  PREPARANDO SQL
       
   // $sql="SELECT pro_nombre  FROM producto WHERE".$prodId;
    $sql= "SELECT ser_id, ser_nombre, ser_descripcion, ser_precio, ser_img FROM servicio WHERE".$prodId;
    //preparar la sentencia
    
    $sentencia = $this->db->prepare($sql);
    //bind parameters DEL ARREGLO
    for( $i=0 ; $i<$longitud;$i++){
        $sentencia->bindParam(':id'.$i, $ArrId[$i]);
    }
    //execute
    $sentencia->execute();
    //retornar los resultados
    $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $resultados;
   }
    
}
