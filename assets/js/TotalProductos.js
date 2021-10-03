var cantidadPrecio={
	PrecioProductos:[],
	cantidadProductos:[],
}
var pdetalles={// propiedades lista
	
	addProducto:document.querySelectorAll("#SUMA"),
	removProducto:document.querySelectorAll("#RESTA"),
	cantidadetiqueta: document.querySelectorAll("#cantidad"),
	IDIMGS: document.querySelectorAll("#IDIMG"),

	subtotaletiqueta: document.querySelector("#subtotal"),
	promoetiqueta: document.querySelector("#promo"),
	totaletiqueta: document.querySelector("#total"),

//	PrecioProductos: [],
	//cantidadProductos:[],
	enviarId: document.querySelector("#idxproducto"),
	enviarcantidad: document.querySelector("#cantidades"),
	enviarTotal: document.querySelector("#totalpagar"),
	
	enviarSubTotal: document.querySelector("#subtotals"),
	enviar10Porciento: document.querySelector("#diesporciento"),
	
	//btncomprar:document.querySelector("#COMPRAR"),
	
	subtotal: 0,
	desc:10,//el porcentaje
	totales:0,
	descuentoval:0,
}
var mdetalles={ // metodos detalles
	inicioDetalle: function(){
		for (var i =0;i<pdetalles.addProducto.length;i++){
			pdetalles.addProducto[i].addEventListener("click",mdetalles.cambiarNumeroMas);
			pdetalles.removProducto[i].addEventListener("click",mdetalles.cambiarNumeroMenos);
		}
		mdetalles.AggValores();
		mdetalles.Subtotal();
	},
	cambiarNumeroMas: function(obj){
		
		var nodoPapa=obj.target.parentNode;
		var spanEtiqueta=nodoPapa.childNodes[5];
		numeroint= parseInt(spanEtiqueta.innerHTML);
		numeroint++;
		spanEtiqueta.innerHTML= numeroint;
		mdetalles.Subtotal();
	},
	cambiarNumeroMenos: function(obj){
		var nodoPapa=obj.target.parentNode;
		var spanEtiqueta=nodoPapa.childNodes[5];
		numeroint= parseInt(spanEtiqueta.innerHTML);
		if(numeroint>0){
			numeroint--;
			spanEtiqueta.innerHTML= numeroint;
			mdetalles.Subtotal();
		}	
	},
	AggValores: function(){
		for (var i =0;i<pdetalles.IDIMGS.length;i++){
			str= pdetalles.IDIMGS[i].innerHTML;
			console.log("str", str);

			numerint= parseInt(str);
			cantidadPrecio.PrecioProductos.push(numerint);
		}
	},
	Subtotal: function(){
		var cantidadp=0;
		var precio=0;
		var subtt=0;
		//pdetalles.cantidadetiqueta[0].innerHTML
		//console.log("cantidadetiqueta[0].innerHTML", pdetalles.cantidadetiqueta);
		for (var i = 0;i<pdetalles.cantidadetiqueta.length;i++){
			cantidadPrecio.cantidadProductos[i]= parseInt(pdetalles.cantidadetiqueta[i].innerHTML);
		}

		for (var i = 0;i<cantidadPrecio.cantidadProductos.length;i++){
			cantidadp= parseInt(cantidadPrecio.cantidadProductos[i]);
			precio= parseInt(cantidadPrecio.PrecioProductos[i]);
			subtt= subtt+(cantidadp*precio);
		}
		pdetalles.subtotal=subtt;
		pdetalles.subtotaletiqueta.innerHTML= subtt;
		mdetalles.TT(subtt);
	},
	TT:function(subttt){
		var descuento= Math.floor(subttt*pdetalles.desc)/100;
		pdetalles.promoetiqueta.innerHTML=descuento;
		pdetalles.descuentoval=descuento;
		//pdetalles.totaletiqueta.innerHTML= par
		//var desc= parseInt(pdetalles.promoetiqueta.innerHTML);
		pdetalles.totales=subttt-descuento;
		pdetalles.totaletiqueta.innerHTML=pdetalles.totales;
	},
	PegarDatos: function(){
		pdetalles.enviarId.value=cantidadPrecio.PrecioProductos;
		pdetalles.enviarcantidad.value=cantidadPrecio.cantidadProductos
		pdetalles.enviarTotal.value=pdetalles.totales;
		pdetalles.enviarSubTotal.value=pdetalles.subtotal;
		pdetalles.enviar10Porciento.value=pdetalles.descuentoval;
	}





}
mdetalles.inicioDetalle();