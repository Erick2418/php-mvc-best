var imagenes = [
1,2,3,4,];
var precio =[
4,6,4,8];

var promocion = [ "Repolarizacion     " , "Tratamiento de celulas madre" , "Antifrizz de ceda fria" , "Keratina"
 								];



var blabla = 
[   "Repolarización capilar para la recuperación del cabello deteriorado,Tratamiento intensivo de hidratación.           . " , 
	"Células madres de Argan para acelerar el proceso de regeneración y reparación capilar. " ,
	"Cera Fría Anti Frizz permanece liso y sedoso por vario meses                                                      ." , 
	"Keratina para reparar y nutrir nuestro cabello desde la raíz a las puntas."
 								];






window.onload= function ejemplos(){
let div = document.getElementById("nuevo_boton");
	for (var i=0; i<imagenes.length; i++) {



    	div.innerHTML += "<div class='producto"+imagenes[i]+"'><div class='card mb-4 shadow-sm'><div class='card-header'><h4 class='my-0 fw-normal'>"+promocion[i]+"</h4></div><div class='card-body'><img src='./tratamientos/"+imagenes[i]+".jpg'><p>"+blabla[i]+"</p><SPAN>"+" </SPAN><br><small></small><a href='https://api.whatsapp.com/send?phone=593979261620&text=Quisiera%20Agendar:' target='_blank'><button type='button'  id='"+imagenes[i]+"' class='w-100 btn btn-lg btn-gree'onclick='activar()'>Solicitar</button></a></div></div></div> ";


    		
    		if(i==4)
			{
					
					div.innerHTML += "<div class='producto"+imagenes[i]+"'><div class='card mb-4 shadow-sm'><div class='card-header'><h4 class='my-0 fw-normal'>"+promocion[i]+"</h4></div><div class='card-body'><img src='./tratamientos/"+imagenes[i]+".jpg'><p>"+blabla[i]+"</p><SPAN>"+" </SPAN><br><small></small><a href='https://api.whatsapp.com/send?phone=593979261620&text=Quisiera%20Agendar:' target='_blank'><button type='button'  id='"+imagenes[i]+"' class='w-100 btn btn-lg btn-gree'onclick='activar()'>Solicitar</button></a></div></div></div>";

			} 




	}



	





}


