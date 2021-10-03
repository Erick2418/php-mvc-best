<?php

require_once 'models/ProductosModel.php';

class ProductoController {
    private $prodModel;
   
   public function __construct() {
       $this->prodModel = new ProductosModel();
   }
    
    public function index(){
        
        require_once 'views/productos/listaproductosView.php';
    }
    public function nuevo(){
        require_once 'views/productos/productoCrearView.php';
    }
    public function catalogoProduco(){ //ESTE ES MI CATALOGO LLAMARLO AL DARLE CLICK
       //llamar al modelo
       //  $idnavs = $_GET['idnavs']; 
       $resultados = $this->prodModel->consultar();
       //llamar a la vista
     
       
       require_once 'views/productos/catalogoproductosViews.php';
        //C:\xampp\htdocs\Shalom_ModuloProducto\views\tienda\listarproductosView.php
    }
    public function MostrarCarritos(){
            //llamar a parametros   
         $ides = $_POST['ides']; 
         $ArrayId = explode(",", $ides);
         //$arrlength = count($ArrayId);
         //$envioID =$ArrayId[0];
         $resultados = $this->prodModel->consultarCatalogoSeleccion($ArrayId);
         require_once 'views/productos/productoseleccionView.php';
   }
    
    
    
}
