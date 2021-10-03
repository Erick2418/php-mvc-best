/*=============================================
=            PROPIEDADES            =
=============================================*/
var obProducto={
	Productoboton:document.querySelectorAll("#botonimagen"),
	CarritoTexto: document.querySelector("#TotalProductos"),
        arregloenviate: document.querySelector("#ides"),
	ProductoImg:null, // aqui se encunetra el obj img con el src en cada click
	idProducto: [],// aqui estara el vector de img para el total acorde al id
	valorUnidad:0,
	valorTotal:0
}
/*=============================================
=            METODOS		            =
=============================================*/
var funcionesCar={
	iniciocarrito: function(){
		for (var i =0;i<obProducto.Productoboton.length;i++){
			obProducto.Productoboton[i].addEventListener("click",funcionesCar.capturaImagen);
		}
	},
       
	capturaImagen: function(btons){
        btons.target.style.visibility = 'hidden';
      //  console.log("asdassd",btons.target);
        var divCompleto= btons.target.parentNode;
	var imgTargeta= divCompleto.childNodes[1];
	obProducto.ProductoImg= imgTargeta;
	funcionesCar.aniadirCarrito();
	},
        PegandoTexto: function(){
		obProducto.arregloenviate.value=obProducto.idProducto;
	},
	aniadirCarrito: function (){
		var str= obProducto.CarritoTexto.innerText;
		var res= str.slice(1,str.length-1);
		var valCarritoActual= parseInt(res)+1;
		obProducto.CarritoTexto.innerHTML= "("+valCarritoActual+")";
		funcionesCar.aniadirProductosComprados();
		funcionesCar.animacionNumeros();
	},
	aniadirProductosComprados: function(){
		//console.log("EJECUCION ",obProducto.ProductoImg);
	var urlcompleta= obProducto.ProductoImg.id;
		//console.log("urlcompleta", urlcompleta);
		var ids= urlcompleta.slice(1,urlcompleta.length);
	//	console.log("ids", ids);
		obProducto.idProducto.push(ids);
                funcionesCar.PegandoTexto();
             //   window.location.href = window.location.href + "?w=" +obProducto.idProducto;
	},
	animacionNumeros: function(){
		var srt = obProducto.CarritoTexto;
		srt.style.fontSize = 20+"px";
		srt.style.color = "#F8BBD0";
		
		setInterval(function(){ srt.style.fontSize = 15+"px"; srt.style.color = "#EC407A";},500);
		/*for (var i =0;i<obProducto.idProducto.length;i++){
			console.log("obProducto.idProducto ", obProducto.idProducto[i]);

		}*/
	}

}

funcionesCar.iniciocarrito();