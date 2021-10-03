var imagenes = [
1,2,3,4,5,6,7,8,9,10,
11,12,13,14,15,16,17,18,19,20,
21,22,23,24,25,26,27,28,29,30,
31,32,33,34,35];
var precio =[
37,54,36,29,26,26,26,34,24,15,
10,17,7,11,29,15,17,38,5,30
,56,8,57,80,26,20,5,15,5,7
,35,35,11,25,50
];
var nombres=[
"Tratamiento",
"Kit de alisado",
"Tratamiento",
"Reparador",
"Shampoo",
"Shampoo",
"Shampoo",
"Tratamiento",
"Shampoo",
"Kit de alisado",
"Sellador",
"Cera Depilatoria",
"Tinte kit",
"Tinte en crema",
"Secador",
"Pack shampoo",
"Crema Hidratante",
"Plancha pro",
"Alisador",
"Silicona",
"Kit de alisado",
"Shampoo",
"Cortadora",
"Plancha",
"Acondicionador",
"Ondulador",
"Serum",
"Crema",
"Protector",
"Esterilizador",
"Esterilizador",
"Pack Reflejos",
"Plancha Pro",
"Acondicionador",
"Secador de Cabello"
];
var descripcion=[
"Tratamiento alisado temporal metamorfosi leave in cream         .",
"Kit de alisado –    AMBROISIE –   RENÉ CHARDON – BONACURE –     .",
"Tratamiento frizz control butter – SEMI DI LINO – ALFA PARF     .",
"Serum Reparador de Puntas Dañadas – DEEP CARE – TEKNIA – LAKME  .",
"Shampoo ph4.5 para cabellos teñidos color freeze sulfate        .",
"Shampoo reparador repair rescue – BONACURE – SCHWARZKOPF        .",
"Shampoo Keratina-reparador repair rescue – BONACURE             .",
"Tratamiento – BONACURE REPAIR RESCUE – SCHWARZKOPF              .",
"Shampoo moisture kick – BONACURE – SCHWARZKOPF                  .",
"Kit de alisado brasileño – KATIVA   – BONACURE                  .",
"Silicon Sellador de Puntas – CRISTAL LIQUID – CHOCOLIFE         .",
"Cera depilatoria créme wax Piel Sensible – GIGI                 .",
"Tinte kit en crema – SPEDY COLOR – BIGEN MEN                    .",
"Tinte en crema – EVOLUTION – ALFA PARF                          .",
"Secador de cabello – QUICK DRY – REVLON                         .",
"Pack liss control shampoo tratamiento – SALON IN – RECAMIER     .",
"Crema Hidratante Gel – Crema Piel Grasa a Mixta – BIOFEMME      .",
"Plancha profesional – TITANIUM ULTRA 450°F – RUCHA              .",
"Alisador botox capilar – SANO ART   –  ANDIS                    .",
"Silicona líquida – SEMI DI LINO – ALFA PARF                     .",
"Kit de alisado keratin therapy – LISSE DESIGN – ALFA PARF       .",
"Shampoo liss keratin ht y amaranth – YELLOW – ALFA PARF         .",
"Cortadora –  ANDIS - 110v - triple espada                       .",
"Plancha Titanium – ARGAN DELUXE 450°F – RUCHA                   .",
"Acondicionador moisture kick hyaluronico – BONACURE             .",
"Ondulador Profesional Titanium ARGAN 450°F – RUCHA              .",
"Serum para puntas abiertas – BONACURE REPAIR RESCUE             .",
"Crema de peinar condicionante – MEUS CACHINHOS – NOVEX          .",
"Protector Facial de Plastico Multiuso -FACE   LINE              .",
"Esterilizador de Herramientas de Manicure - UV y OZONO-GSCARE   .",
"Esterilizador de Toallas UV – TOWEL WARMER SD-76 – GSCARE       .",
"Pack Reflejos-  – QUICK DRY  – ARGAN  Plateado Shampoo          .",
"Plancha Professional 1″ – CARESSE – KIEPE   botox capilar       .",
"Acondicionador Peptide Repair Rescue para Cabello Dañado        .",
"Secador de Cabello Aire Iónico Essentials Volume Booster        ."
];
window.onload= function ejemplos(){
let div = document.getElementById("nuevo_boton");
	for (var i=0; i<imagenes.length; i++) {
		div.innerHTML += "<div class='producto"+imagenes[i]+"'> <div class='card mb-4 shadow-sm'> <div class='card-header'> <h4 class='my-0 fw-normal'>"+nombres[i]+"</h4> </div> <div class='card-body'> <img src='./imagenesTienda/"+imagenes[i]+".jpg'> <p>"+descripcion[i]+"</p> <SPAN> $"+precio[i]+" </SPAN> <br><small>+impuestos</small><a href='SHALOMFRM.html?nombre="+imagenes[i]+"' class='w-100 btn btn-lg btn-primary'>Comprar! </a> </div> </div> </div>";  
    }

}


