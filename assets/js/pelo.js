

var imagene = [
1,2,3,4,5,6];
var preci =[
5,8,5,5,5,4];

var descripcio=[
"Cortes de Damas                                .",
"Tratamientos Capilares .",
"Peinados       .",
"Cepillados     .",
"Planchado    .",
"Alisados                         .",

];
var imagenes = [
7,8,9,10,11,12];
var precio =[
20,15,18,18,20,25];

var descripcion=[
"Base y Mechas                                .",
"Rayitos.",
"Iluminaciones.",
"Mechas Localizadas.",
"Highlights.",
"Balayague Hair.",

];
window.onload= function ejemplos(){
let div = document.getElementById("nuevo_boton");
	for (var i=0; i<imagene.length; i++) {
		div.innerHTML += "<div class='producto"+imagene[i]+"'><div class='card mb-4 shadow-sm'><div class='card-header'><h4 class='my-0 fw-normal'>Cortes</h4></div><div class='card-body'><img src='./pelo/"+imagene[i]+".jpg'><p>"+descripcio[i]+"</p><SPAN> $"+preci[i]+" </SPAN><br><small>+impuestos</small><a href='https://api.whatsapp.com/send?phone=593979261620&text=Quisiera%20Agendar:' target='_blank'><button type='button'  id='"+imagene[i]+"' class='w-100 btn btn-lg btn-blond'onclick='activar()'>Agendar!</button></a></div></div></div> ";
		
		
	}
	
	for (var i=0; i<imagenes.length; i++) {
		div.innerHTML += "<div class='producto"+imagenes[i]+"'><div class='card mb-4 shadow-sm'><div class='card-header'><h4 class='my-0 fw-normal'>Tinturados</h4></div><div class='card-body'><img src='./tintu/"+imagenes[i]+".jpg'><p>"+descripcion[i]+"</p><SPAN> $"+precio[i]+" </SPAN><br><small>+impuestos</small><a href='https://api.whatsapp.com/send?phone=593979261620&text=Quisiera%20Agendar:' target='_blank'><button type='button'  id='"+imagenes[i]+"' class='w-100 btn btn-lg btn-Ana'onclick='activar()'>Agendar!</button></a></div></div></div> ";  
	}
}


