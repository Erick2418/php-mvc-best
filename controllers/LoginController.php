<?php if(!isset($_SESSION)){session_start();}

require_once 'models/LoginModel.php';


  class LoginController {
    //put your code here
    
    private $LoginModel;
   
    public function __construct() {
       $this->LoginModel = new LoginModel();
    }
    
    
    
         //  <!-- // ''   [ ]  {  } ->  <  <>   & -->  *  
    public function index()
            
 {  
    $usuario = $_POST['user'];
    $pass = $_POST['pass'];  
    
    $prod = $this->LoginModel->consultar($usuario,$pass);
    
    $_SESSION['usuario'] = $usuario;
    
    if($prod!=NULL)
   {  
   switch ($prod[0]->rol_id)
   
   { 
       
       case 1:                  
           //$rol = "Administrador";
             $rol = 1;
           
           $_SESSION['rol'] = $rol;
           
           require_once 'views/homeView.php';
         break;
       
     
       case 2:
           
          // $rol = "Gerente";
           $rol = 2;
            $_SESSION['rol'] = $rol;       
           require_once 'views/homeView.php';
           break;
     
       
       case 3:
           
          //  $rol = "Empleado";
           $rol = 3;
           $_SESSION['rol'] = $rol;                
           require_once 'views/homeView.php';
           
           break;
       
       
         case 4:
           
         //   $rol = "Cliente";
           $rol = 4;
         $_SESSION['rol'] = $rol;           
         require_once 'views/homeView.php';
           
           break;
    
   }
   
   
   } 
   
   
   
   else 
       {  
       // PONER MENSAJE DE QUE SE LOGIO MAL
     require_once 'views/homeView.php';    
     
       }
   
   
 }
   
   
 
 
 
 public function logout()
         
 {
     
   $this->LoginModel->logout();
     
  header('Location:index.php?c=Producto&a=catalogoProduco');
     
 }
 
 
 }
    
    
    
    
    
   