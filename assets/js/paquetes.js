var imagenes = [
1,2,3];
var precio =[
40,25,50];

var promocion = [ "PAQUETE#1" , "PAQUETE#2" , "PAQUETE#3"
 								];

var a1 = "Corte De Cabello + Tratamiento de Keratina"

var a2 = "Manicure + Pedicure + Colocación de uñas acrilicas "	

var a3 =  "Corte De Cabello + Tratamiento De Cédulas Madre + Cepillado"		



var blabla = 
[ 	a1 , a2 , a3		];





window.onload= function ejemplos(){
let div = document.getElementById("nuevo_boton");
	for (var i=0; i<imagenes.length; i++) {



    	div.innerHTML += "<div class='producto"+imagenes[i]+"'><div class='card mb-4 shadow-sm'><div class='card-header'><h4 class='my-0 fw-normal'>"+promocion[i]+"</h4></div><div class='card-body'><img src='./paquetes/"+imagenes[i]+".jpg'><p>"+blabla[i]+"</p><SPAN>$"+precio[i]+" </SPAN><br><small></small><a href='https://api.whatsapp.com/send?phone=593979261620&text=Quisiera%20Agendar:' target='_blank'><button type='button'  id='"+imagenes[i]+"' class='w-100 btn btn-lg btn-gree'onclick='activar()'>Solicitar</button></a></div></div></div> ";


    		
   



	}



	





}


