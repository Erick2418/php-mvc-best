<?php   
    echo' <div class="producto  w3-animate-top ">
                        <div class="card mb-4 shadow-sm"> 
                            <div class="card-header">
                            <h4 id="pro1"class="my-0 fw-normal">'.$producto->pro_nombre.'</h4> 
                        </div> 
                        <div class="card-body"> 
               
                            <img id="p'.$producto->pro_id.'" src="assets/images/Productos_Tienda/'.$aux.'/'.$producto->pro_img.'.jpg" >
                            <p>'.$producto->pro_descripcion.'</p> 
                            <SPAN id="precioUnidad">$'.$producto->pro_precio.'</SPAN><br>
                            <small>+impuestos</small>
                            <a id="botonimagen" class="w-100 btn btn-lg"  style="background:#F85C9C;color:#fff">Lo quiero! </a> 
                        </div>
                        </div>
                    </div>  ';// FIN DEL ECHO
?>





