<?php require_once 'views/partials/header.php';  ?>
<?php $fcha = date("Y-m-d");?>
<div style="height:90px;"></div>
     
<?php// echo "Subtotal: ".$subtotal."-Total".$diesporc;   ?>



<div class="w3-container">
<br><br>
  <table class="w3-table-all w3-hoverable">
    <thead>
        <tr class="" style="background: #F06292; color: white;">
        <th>Nombre del Articulo</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio c/u</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <?php $i=0;
    foreach ($resultados as $producto) {
       echo " <tr>
          <td>".$producto->pro_nombre."</td>
          <td>".$producto->pro_descripcion."</td>
          <td>".$arrayCanttidadPulido[$i]."</td>
          <td>".$producto->pro_precio."</td>
          <td>SUBTOTAL</td>
        </tr>";
       $i++;
    }
    ?>
    
    <tr>
    	<td></td><td></td><td></td>
    	<td>Subtotal: </td>
    	<td>$<?php echo $subtotal?></td>
    </tr>
    <tr>
    	<td></td><td>Descuento Por apertura</td><td></td>
    	<td>-10%:</td>
    	<td>$<?php echo $diesporc?></td>
    </tr>
	<tr>
    	<td></td><td></td><td></td>
    	<td>Total: </td>
    	<td>$<?php echo $totalpagar?></td>
    </tr>

  </table>
</div>
<br>
<?php
echo '
<a href="index.php?c=Facturas&a=index&IDES='.$cadenaID.'&CANTIDAD='.$cadenaCANT.'" class="w3-button w3-blue" style="position: absolute; left:45%; width: 250px; height: 50px">Comprar</a>';
?>
<div style="height:90px;"></div>

 
<?php require_once 'views/partials/footer.php';?>