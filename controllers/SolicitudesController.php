<?php

require_once 'models/SolicitudesModel.php';

class SolicitudesController {
     
    private $solModel;
    public function __construct() {
       $this->solModel = new SolicitudesModel();
    }
    
    
    public function EnviarServicios(){
         $ides = $_POST['IDES']; 
         $ArrayId = explode(",", $ides);
         $longitud= count($ArrayId);
         $idg = $this->solModel->insertarsol(1, 1);
       
        
        for($i=0;$i<$longitud;$i++){
            if($idg != 0){
                $resultado = $this->solModel->insertar_detsol($idg, $ArrayId[$i], "admin x");
            }
            else{
                echo "\nError al guardar sol";
            }
            
        }    
     header('Location:index.php?c=Producto&a=catalogoProduco');
         
         
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
    
}
