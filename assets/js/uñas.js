var imagenes = [
1,2,3,4,5,6];
var precio =[
4,6,4,8,5,4];

var descripcion=[
"Manicure                                 .",
"Extensiones de uñas naturales        .",
"Uñas Acrilicas        .",
"Uñas Esculpidas       .",
"Uñas en Gel       .",
"Pedicure                          .",

];
window.onload= function ejemplos(){
let div = document.getElementById("nuevo_boton");
	for (var i=0; i<imagenes.length; i++) {
		div.innerHTML += "<div class='producto"+imagenes[i]+"'><div class='card mb-4 shadow-sm'><div class='card-header'><h4 class='my-0 fw-normal'>Uñas</h4></div><div class='card-body'><img src='./uñas/"+imagenes[i]+".jpg'><p>"+descripcion[i]+"</p><SPAN> $"+precio[i]+" </SPAN><br><small>+impuestos</small><a href='https://api.whatsapp.com/send?phone=593979261620&text=Quisiera%20Agendar:' target='_blank'><button type='button'  id='"+imagenes[i]+"' class='w-100 btn btn-lg btn-gina'onclick='activar()'>Agendar!</button></a></div></div></div> ";  
	}
}

