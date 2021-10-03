<?php
require_once 'config/COnexion.php';
class ProductosModel {
   private $db;
   
   public  function __construct() {
       $this->db = Conexion::getConexion();
   }
   
   public function consultar(){
    //   $sql= "select * from productos, categoria where prod_idCategoria=cat_id";
       
       $sql="SELECT * FROM producto WHERE 1";
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
            $prodId=$prodId." pro_id = :id".$i." or";
        }else{
            $prodId=$prodId." pro_id = :id".$i;
        }
        
    }
   //  PREPARANDO SQL
       
   // $sql="SELECT pro_nombre  FROM producto WHERE".$prodId;
    $sql= "SELECT pro_id, pro_tipo_id, pro_nombre, pro_descripcion, pro_precio, pro_img FROM producto WHERE".$prodId;
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
   
   
     public function consultarXparametro($busq) {
   /*     // prepare
        $sql = "SELECT * FROM productos, categoria  where prod_idCategoria = cat_id and 
		(prod_nombre like :busq or prod_codigo =:busq2)";
        $sentencia = $this->db->prepare($sql);
        //bind parameters
        $conlike='%'.$busq.'%';
        $sentencia->bindParam('busq', $conlike);
        $sentencia->bindParam('busq2', $busq);
        //execute
        $sentencia->execute();
        //obtener y retornar resultados
        $resultados = $sentencia->fetchAll(PDO::FETCH_OBJ);
       return $resultados;*/
    }
    
     public function eliminar($id, $usu) {
    /*    //prepare
        $sql = "update productos set  prod_estado=0, prod_usuarioActualizacion=:usu, prod_fechaActualizacion=:fecha
		where prod_id=:id";
        //now()
        $sentencia = $this->db->prepare($sql);
        //bind parameters
        $sentencia->bindParam(':usu', $usu);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $sentencia->bindParam(':fecha', $strfecha);
        $sentencia->bindParam(':id', $id);

        //execute
        $sentencia->execute();
        //retornar resultados
        if ($sentencia->rowCount() <= 0) {// verificar si se elimino
            return false;
        }
        return true;*/
    }
/*
    public function insertar($cod, $nom, $desc, $estado, $precio, $idCat, $usu) {
         //prepare
        $sql = "INSERT INTO productos (prod_id, prod_codigo, prod_nombre, prod_descripcion, prod_estado, prod_precio, 
            prod_idCategoria, prod_usuarioActualizacion, prod_fechaActualizacion) VALUES 
            (NULL, :cod, :nom, :desc, :estado, :precio, :idCat, :usu, :fecha)";
        //now()
        $sentencia = $this->db->prepare($sql);
        //bind parameters
        $sentencia->bindParam(':cod', $cod);
        $sentencia->bindParam(':nom', $nom);
        $sentencia->bindParam(':desc', $desc);
        $sentencia->bindParam(':estado', $estado);
        $sentencia->bindParam(':precio', $precio);
        $sentencia->bindParam(':idCat', $idCat);
        $sentencia->bindParam(':usu', $usu);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $sentencia->bindParam(':fecha', $strfecha);
        //execute
        $sentencia->execute();
        //retornar resultados
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            return false;
        }
        return true;
        
    }*/
    
    
    public function consultarXid($id){
    /*     // prepare
        $sql = "SELECT * FROM productos where prod_id=:id";
        $sentencia = $this->db->prepare($sql);
        //bind parameters
        $sentencia->bindParam(':id', $id);
        //execute
        $sentencia->execute();
        //obtener y retornar resultados
        $resultados = $sentencia->fetch(PDO::FETCH_OBJ); // retorna uno
        return $resultados;*/
    }
    
    public function actualizar($id, $cod, $nom, $desc, $estado, $precio, $idCat, $usu){
   /*      //prepare
        $sql = "update  productos set prod_codigo=:cod, prod_nombre=:nom, prod_descripcion=:desc, 
            prod_estado=:estado, prod_precio=:precio, 
            prod_idCategoria=:idCat, prod_usuarioActualizacion=:usu, prod_fechaActualizacion=:fecha where prod_id=:id";
        //now()
        $sentencia = $this->db->prepare($sql);
        //bind parameters
        $sentencia->bindParam(':cod', $cod);
        $sentencia->bindParam(':nom', $nom);
        $sentencia->bindParam(':desc', $desc);
        $sentencia->bindParam(':estado', $estado);
        $sentencia->bindParam(':precio', $precio);
        $sentencia->bindParam(':idCat', $idCat);
        $sentencia->bindParam(':usu', $usu);
        $fechaActual = new DateTime('NOW');
        $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $sentencia->bindParam(':fecha', $strfecha);
        $sentencia->bindParam(':id', $id);

        //execute
        $sentencia->execute();
        //retornar resultados
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
            return false;
        }
        return true;
       */ 
    }
    
}
