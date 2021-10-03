<?php  require_once 'views/partials/header.php';  ?>
<div style="height:90px;"></div>
<!-- ENVIO DE DATOS POR POST -->
<form action="index.php?c=Facturas&a=datosdestalles" method="POST" name="formEnvioIDs" id="formEnvioIDs" style="display: none">
    <div class="form-group col-sm-6">
    <label for="idess">IDES</label>
    <input type="text" name="idxproducto" id="idxproducto" class="form-control" value="0">
    <label for="idess">CANTIDAD</label>
    <input type="text" name="cantidades" id="cantidades" class="form-control" value="0">
    <label for="idess">TOTAL</label>
    <input type="text" name="totalpagar" id="totalpagar" class="form-control" value="0">
    <label for="idess">Subtotal</label>
    <input type="text" name="subtotals" id="subtotals" class="form-control" value="0">
    <label for="idess">-10%</label>
    <input type="text" name="diesporciento" id="diesporciento" class="form-control" value="0">
    
    </div>
</form>


<!--DETALLE -->
<div style="right: 25px; top: 181px;position: fixed;">
  <ul class="w3-ul w3-card-4" style="width:250px">
    <li style="background:#EC407A; color: white"><h5>Detalles</h5></li>

    <li style="background:#F8BBD0;">
      <span>Subtotal</span>
      <span id="subtotal"style="position:absolute;right:25px;">0</span>
    </li>

    <li style="background:#F8BBD0;">
      <span>Promo -10%</span>
      <span id="promo"style="position:absolute;right:25px;">0</span>
    </li>

    <li style="background:#F8BBD0;">
      <span>Total</span>
      <span  id="total" style="position:absolute;right:25px;"><b>$0.0</b></span>
    </li>

  </ul>
    <br>
    <button type="submit" form="formEnvioIDs" id="COMPRAR" onclick="mdetalles.PegarDatos()" class="w3-button w3-round-xxlarge w3-large" style="width: 250px; background: #BA68C8;">Comprar</button>
</div>


<!--SPAM DE PRODUCTOS -->


    
<div class="w3-container" style="position: relavite;left: 40px; width: 75%;">
  <h2>Sus productos Seleccionados</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, impedit, animi.</p>
  <ul class="w3-ul w3-card-4 w3-animate-left">


   
   
    
      
<?php 
$ruta= array("Manicure","Maquinas","Pedicure","Secador");
$aux="";
 foreach ($resultados as $producto) {
      if($producto->pro_tipo_id == 1){
          $aux=$ruta[0];
      }else if($producto->pro_tipo_id == 2){
          $aux=$ruta[1];
      }else if($producto->pro_tipo_id == 3){
          $aux=$ruta[2];
      }else if($producto->pro_tipo_id == 4){
          $aux=$ruta[3];
      }
      
      
   echo "
       <li class='w3-bar w3-hover-pink' >
      <img src='assets/images/Productos_Tienda/".$aux."/".$producto->pro_img.".jpg' class='w3-bar-item w3-circle w3-hide-small' style='width:215px;'>
        <div id='IDIMG' style='display: none'>".$producto->pro_id."</div>
        <div>
        <p class='w3-large'><b>".$producto->pro_nombre."</b></p>
        <p>".$producto->pro_descripcion."</p>
        <span>Precio Unidad!</span>
        <span class='w3-tag w3-xlarge w3-padding w3-yellow' style='transform:rotate(-5deg)'><b id='precioUnidad'>".$producto->pro_precio."</b></span>
        <br><br>
        <div>
          <span>Cantidad:</span>
          <i id='SUMA' class='fas fa-plus' style='cursor:pointer; cursor: hand'></i>
          <span id='cantidad' style='margin: 5px;'>1</span>
          <i id='RESTA' class='fas fa-minus' style='cursor:pointer; cursor: hand'></i>      
        </div>

      </div>
    </li>

    ";// fin del echo
 }// fin foreach
?>


    
    
    
    
    
  </ul>
  
  
  
</div>
<div style="height:90px;"></div>
<script src="assets/js/TotalProductos.js"></script>



<?php require_once 'views/partials/footer.php';?>
