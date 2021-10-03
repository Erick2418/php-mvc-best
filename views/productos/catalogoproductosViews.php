<?php require_once 'views/partials/header.php'; 
$arrayDetalle=array();

if(!isset($_SESSION)){
    session_start();
}?>  



<div style="height:90px;"></div>
<!-- ICONO DE CARRITO Y REDIRECCION A OTRA PAGINA -->
<?php if(isset($_SESSION['usuario'])) { ?>
<nav class="navbar navbar-expand-sm w3-display-right" style="top: 125px;position: fixed; z-index: 500;" >
    <ul class="navbar-nav">
        <li>
            <a id="VerCompras">
                <button type="submit" class="btn btn-transparent " form="formProdNuevo"><i class="fas fa-shopping-cart fa-lg fa-facebook" style="font-size: 40px; color: #F06292;"></i></button>
            </a>
      
          <span id="TotalProductos" style="fontSize:15px; color:#EC407A; top: 55px;right:44px; position: fixed;">(0)</span>
        </li>
    </ul>
</nav>
 <?php  }?>
<!-- CAROUSEL-->

<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/images/carousel/girl1.jpg" alt="Los Angeles" width="464" height="421">
			<div class="carousel-caption text-right" style="color: #FF3399;left: 450px; top: 200px;z-index: 1;">
				<h1><span>E</span>-SHALOM</h1>
				<h2>Por apertura 10% de Descuento</h2>
				<p>Tenemos productos y cosmeticos para pequeñas y grandes empresas.</p>
			</div>   
		</div>
	</div>

	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>



<!-- ICONO -->
<div class="text-center w3-animate-fading">
	<span style="font-size: 48px; color: Dodgerblue;">
		<i class="fas fa-angle-down"></i>
	</span>
	
</div>


<!-- BODY -->
<?php
$ruta= array("Manicure","Maquinas","Pedicure","Secador");
$aux="";
$bandera=0;// comprobar si hay productos o no en la seccion
?> 
    <!-- Producto Primera Seccion-->
    <?php  
        echo ' <div class="card w3-animate-top" style="background:#FF3399;color:#fff" >
                <div class="card-body">'.$ruta[0].'</div> 
                </div>';
        echo'  <div class="container w3-content w3-section">
               <div class="row row-cols-1 row-cols-md-3 mb-3"id="nuevo_boton"> ';
        foreach ($resultados as $producto) { 
            if($producto->pro_tipo_id == 1){
               // $idess.push
                $aux=$ruta[0];
                $bandera=1;
                include 'views/productos/productoscardView.php';
            }//fin del if    
        } //FIN DEL FOREACH
        echo '  </div> </div>'; 
        if($bandera==0){
            echo '  <div class="card bg-light text-dark">
                        <div class="card-body">No hay productos Disponibles 
                        en esta Seccion</div>
                    </div>';
        }
        $bandera=0;
    ?>  
    <!-- Producto Segunda Seccion-->
    <?php  
        echo ' <div class="card w3-animate-top" style="background:#FF3399;color:#fff" >
                <div class="card-body">'.$ruta[1].'</div> 
                </div>';
        echo'  <div class="container w3-content w3-section">
               <div class="row row-cols-1 row-cols-md-3 mb-3"id="nuevo_boton"> ';
        foreach ($resultados as $producto) { 
            if($producto->pro_tipo_id == 2){
                $aux=$ruta[1];
                $bandera=1;
                include 'views/productos/productoscardView.php';
            }//fin del if    
        } //FIN DEL FOREACH
        echo '  </div> </div>';
        if($bandera==0){
            echo '  <div class="card bg-light text-dark">
                        <div class="card-body">No hay productos Disponibles 
                        en esta Seccion</div>
                    </div>';
        }
        $bandera=0;
    ?>  
    <!-- Producto Tercera Seccion-->
    <?php  
        echo ' <div class="card w3-animate-top" style="background:#FF3399;color:#fff" >
                <div class="card-body">'.$ruta[2].'</div> 
                </div>';
        echo'  <div class="container w3-content w3-section">
        `       <div class="row row-cols-1 row-cols-md-3 mb-3"id="nuevo_boton"> ';
        foreach ($resultados as $producto) { 
            if($producto->pro_tipo_id == 3){
                $bandera=1;
                $aux=$ruta[2];
                include 'views/productos/productoscardView.php';
            }//fin del if    
        } //FIN DEL FOREACH
        echo '  </div> </div>';
        if($bandera==0){
            echo '  <div class="card bg-light text-dark">
                        <div class="card-body">No hay productos Disponibles 
                        en esta Seccion</div>
                    </div>';
        }
        $bandera=0;
    ?>  
    <!-- Producto Cuarta Seccion-->
    <?php  
        echo '<div class="card w3-animate-top" style="background:#FF3399;color:#fff" >
                <div class="card-body">'.$ruta[3].'</div> 
                </div>';
        echo'  <div class="container w3-content w3-section">
               <div class="row row-cols-1 row-cols-md-3 mb-3"id="nuevo_boton"> ';
        foreach ($resultados as $producto) { 
            if($producto->pro_tipo_id == 4){
                $aux=$ruta[3];
                $bandera=1;
                include 'views/productos/productoscardView.php';
            }//fin del if    
        } //FIN DEL FOREACH
        echo '  </div> </div>';
        if($bandera==0){
            echo '  <div class="card bg-dark text-white">
                       <div class="card-body">No hay productos
                       en esta Seccion Por el momento</div>
                    </div>';
        }
        $bandera=0;
     
        
        
    ?>
 <form action="index.php?c=Producto&a=MostrarCarritos" method="POST" name="formProdNuevo" id="formProdNuevo">
    <div class="form-group col-sm-6">
    <input type="text" name="ides" id="ides" class="form-control" placeholder="precio producto" value="0">
    </div>
</form>

    


<script src="assets/js/configCarritoJs.js"></script>



<?php require_once 'views/partials/footer.php';?>
