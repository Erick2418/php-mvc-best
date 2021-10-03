<?php require_once 'views/partials/header.php';  ?>
<?php $fcha = date("Y-m-d");?>
<br><br><br><br>
     
    <?php// echo "Subtotal: ".$subtotal."-Total".$diesporc;   ?>


<div class="w3-container">
<br><br>
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-red">
        <th>Nombre del Articulo</th>
        <th>Descripcion</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <?php
    foreach ($resultados as $servicio) {
       echo " <tr>
          <td>".$servicio->ser_nombre."</td>
          <td>".$servicio->ser_descripcion."</td>
          <td>$".$servicio->ser_precio."</td>
        </tr>";
    }
    ?>
    
    <tr>
    	<td></td>
    	<td>Subtotal: </td>
    	<td>$<?php //echo $subtotal?></td>
    </tr>
    <tr>
    	<td>Descuento Por apertura</td>
    	<td>-10%:</td>
    	<td>$<?php //echo $diesporc?></td>
    </tr>
	<tr>
    	<td></td>
    	<td>Total: </td>
    	<td>$<?php //echo $totalpagar?></td>
    </tr>

  </table>
</div>
<br>
<?php
echo '<a href="index.php?c=Solicitudes&a=EnviarServicios&IDES='.$ides.'" class="w3-button w3-blue" style="position: absolute; left:45%; width: 250px; height: 50px">Comprar</a>';
?>
<br><br><br><br>

 
<?php require_once 'views/partials/footer.php';?>