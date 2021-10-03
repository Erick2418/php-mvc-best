<?php
if(!isset($_SESSION)){session_start();}
require_once 'models/FacturasModel.php';
//require_once 'models/ProductoObj.php';

class FacturasController {
  
     private $facModel;
    public function __construct() {
       $this->facModel = new FacturasModel();
   }

    public function index(){
        $IDE = $_GET['IDES'];
        $CANT = $_GET['CANTIDAD'];

        $ArrayId = explode(",", $IDE);
        $ArrayCant = explode(",", $CANT);
        $longitud= count($ArrayId);
        $idg = $this->facModel->insertar(1, 1);
        for($i=0;$i<$longitud;$i++){
            if($idg != 0){
                $resultado = $this->facModel->insertar_det($idg, $ArrayId[$i], $ArrayCant[$i], "admin x");
            }
            else{
                echo "\nError al guardar DETALLE";
            }
            
        }    
     header('Location:index.php?c=Producto&a=catalogoProduco');   
    //    header('views/productos/catalogoproductosViews.php');
      
    }
     public function guardar(){
      $cod = $_GET['codigo'];
     $nom = $_GET['idCliente'];
        $usu = $_SESSION['usuario'];
        $idGenerado = $$this->facModel->insertar($cod, $nom);
        if($idGenerado != 0){
            //foreach para toda la lista de productos
            for($i = 1; $i < 3; $i++){
                //guardar en variable $idProducto y $unidad
                $resultado = $this->facModel->insertar_det($idGenerado, $i, 99, $usu);
                //limpiar caja
                if($resultado){
                    $msj = "Su compra ha sido realizado con exito";
                    $boxcolor = 'primary';
                }
                else{
                    $msj = "Ha ocurrido un error en el proceso de compra";
                    $boxcolor = 'danger';
                }
            }
        }
        else{
            $msj = "Ha ocurrido un error en el proceso de facturación";
            $boxcolor = 'danger';
        }
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $boxcolor;
        //redireccionar a la vista
        header('Location:index.php?c=producto&a=catalogo');
    }
    
    public function datosdestalles(){
    //recibo parametros
        $ides = $_POST['idxproducto'];
       $cantidades = $_POST['cantidades'];
       $totalpagar = $_POST['totalpagar'];
        $subtotal = $_POST['subtotals'];
       $diesporc=$_POST['diesporciento'];
       
               
       //lo transformo en un array
       $ArrayId = explode(",", $ides);
       $ArrayCantidades = explode(",", $cantidades);
       $total = $_POST['totalpagar']; 
       
       $longitudID=count($ArrayId);

       for( $i=0; $i<$longitudID;$i++ ){
         if( $ArrayCantidades[$i]==0){
            $ArrayId[$i]=0;
         }
       }
       $arrayIdPulido=array();
       $arrayCanttidadPulido=array();
       
    //   array_push($arrayIdPuli2,$arrayIdPulido);
    //   array_push($arrayCanttidadPuli2,$arrayCanttidadPulido);
       
       
       for( $i=0; $i<$longitudID;$i++ ){
           if( $ArrayId[$i]!=0){
               array_push($arrayIdPulido,$ArrayId[$i]);
               array_push($arrayCanttidadPulido,$ArrayCantidades[$i]);
            }
       }
        $resultados = $this->facModel->ConsultarDatosF($arrayIdPulido,$arrayCanttidadPulido);
       /*CONVERSION A CADENA PARA ENVIARLO AL INDEX*/
        $cadenaID=implode(",",$arrayIdPulido);
        $cadenaCANT=implode(",",$arrayCanttidadPulido);
        
        require_once 'views/factura/facturaView.php';
   }
  
    
}

