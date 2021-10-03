var objnav={
	activos:document.getElementsByClassName("#botonimagen"),
	idss: document.querySelector("#idnavactivar"),
	idsn: document.querySelector("#idnavdesactivar"),
	clase1 : document.getElementById("clase1"),// EL QUE ACCIONA PARA Q CAMBIE

}
/*=============================================
=            METODOS		            =
=============================================*/
var funcionesnavs={
	inicionav: function(){
		objnav.clase1.addEventListener("click", funcionesnavs.addClase);
	},


	addClase: function(){
		var idpulido= objnav.idss.textContent;
		var boton = document.getElementById("n"+idpulido);
		boton.classList.add("active");
		funcionesnavs.quitarClase();
	},

	quitarClase: function(){
		var idpulido= objnav.idsn.textContent;
		var boton = document.getElementById("n"+idpulido);
		boton.classList.remove("active");
	},
}

funcionesnavs.inicionav();

funcionesnavs.addClase();