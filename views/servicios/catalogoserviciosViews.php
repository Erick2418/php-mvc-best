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

<!--  CAROUSEL -->
<div id="demo" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="assets/images/carousel/girl3.jpg" alt="Los Angeles" width="464" height="421" >
			<div class="carousel-caption text-right" style="color: #FF3399; left: 450px; top: 200px;z-index: 1;">
				<h1><span>E</span>-SHALOM</h1>
				<h2>Emprende, Genera empleos e Inova</h2>
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
<!--  Icono de Flecha -->
<div class="text-center w3-animate-fading" >
	<span style="font-size: 48px; color: #FF3399">
            <i class="fas fa-angle-down"></i>
	</span>
</div>
<div class="card w3-animate-top" style="background:#FF3399;color:#fff" >
    <div class="card-body">Servicios</div> 
</div>
<!--  FROM PARA ENVIAR DATOS -->
<form action="index.php?c=Servicio&a=MostrarCarritos" method="POST" name="formProdNuevo" id="formProdNuevo" style="display: none">
    <div class="form-group col-sm-6">
        <label for="codigo">C&oacute;digo</label>
        <input type="text" name="ides" id="ides" class="form-control" placeholder="precio producto" value="0">
    </div>
</form>

<!-- INICIO DE CARDS DE PRODUCTOS-->
    	<div class="container w3-content w3-section w3-animate-zoom ">
            <div class="row row-cols-1 row-cols-md-3 mb-3"id="nuevo_boton">
	<?php
        foreach ($resultados as $servicio){	
            echo " 
                <div class='producto  w3-animate-zoom '>
                    <div class='card mb-4 shadow-sm' > 
                        <div class='card-header'> 
                            <h4 id='pro1'class='my-0 fw-normal'>".$servicio->ser_nombre."</h4> 
                        </div> 
                        <div class='card-body'> 
                            <img id='p".$servicio->ser_id."' src='assets/images/Sevicios/".$servicio->ser_img.".jpg'>
                            <p>".$servicio->ser_descripcion."</p> 
                            <SPAN id='precioUnidad'>$".$servicio->ser_precio."</SPAN> 
                            <br>
                            <small>+impuestos</small>
                            <a id='botonimagen'  class='w-100 btn btn-lg' style='background:#F85C9C;color:#fff'>Lo quiero! </a> 
                            </div>
                        </div>
                </div>";
        }
        ?>
        <!-- FIN DE SPAM DE PRODUCTOS-->
            </div>
	</div>
 

<div style="height:90px;"></div>



<script src="assets/js/configCarritoJs.js"></script>

<?php require_once 'views/partials/footer.php';?>
