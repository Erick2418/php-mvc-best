let titulo=document.getElementById("pruebaxd");
let costo= document.getElementById("costo");
let descuento= document.getElementById("descuento");
var imagenes = [
1,2,3,4,5,6,7,8,9,10,
11,12,13,14,15,16,17,18,19,20,
21,22,23,24,25,26,27,28,29,30,
31,32,33,34,35];
var precio =[
37,54,36,29,26,26,26,
34,24,15,10,17,7,11,
29,15,17,38,5,30,56,8,
57,80,26,20,5,15,5,
7,35,35,11,25,50
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
function calcular(){
    var indice= titulo.innerText;
    
    var valor=precio[indice-1];
    var nombre= nombres[indice-1];
    var descuentos=(10*valor)/100;
    costo.innerText = valor; 
    descuento.innerText=" - "+descuentos;
    document.getElementById("total").innerText=" $"+(valor-descuentos);
    document.getElementById("nombre_pro").innerText=nombre;
}












