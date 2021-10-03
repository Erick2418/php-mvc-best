<?php
require_once 'models/ServiciosModel.php';



class ServicioController {
    private $servModel;
   
   public function __construct() {
       $this->servModel = new ServiciosModel();
   }
   
    public function index(){
        require_once 'views/servicios/listaserviciosView.php';
    }
    public function nuevo(){
        require_once 'views/servicios/servicioCrearView.php';
    }
    public function MostrarCatalogoServicios(){
           //llamar al modelo
       $resultados = $this->servModel->consultar();
       //llamar a la vista
     
       
       require_once 'views/servicios/catalogoserviciosViews.php';  
    }
    
    
    public function MostrarCarritos(){
            //llamar a parametros   
         $ides = $_POST['ides']; 
         $ArrayId = explode(",", $ides);
         $resultados = $this->servModel->consultarCatalogoSeleccion($ArrayId);

         require_once 'views/factura/solicitudView.php';

    }
   
    
    
    
}