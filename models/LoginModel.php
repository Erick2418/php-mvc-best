<?php
require_once 'config/COnexion.php';
class LoginModel {
   private $db;
   
   public  function __construct() {
       $this->db = Conexion::getConexion();
   }

       public function consultar($user,$pass){
    
         $sql = "select rol_id FROM cuenta where cuenta_user like :user and cuenta_pass like :pass";
        $senten = $this->db->prepare($sql);
        //binding parameters        
       $senten->bindParam(':user', $user);
       $senten->bindParam(':pass', $pass);       
        //execute
        $senten->execute();
        //retornar resultados
        $resultados = $senten->fetchAll(PDO::FETCH_OBJ);

        return $resultados;        
    }
    
    
    
    
    
           public function logout (){
    
               session_unset();
               session_destroy();
               
    }
   
   
   
   
   
   
   
   
   
   
    
}