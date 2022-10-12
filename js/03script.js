function calcularSuma(){
	let n1,n2,n3,respuesta,valor;
	n1 = document.ejemplo.n1.value;
	n2 = document.ejemplo.n2.value;
	n3 = document.ejemplo.n3.value;


	num1=(n1/10);
	num11= n1 % 10;
	num2=n2/10;
	num22=n2%10;
	
	cuarto= n3%10;
	
	n3=n3/10;
	tercer=n3%10;

	n3=n3/10;
	segundo=n3%10;

	n3=n3/10;
	primero=n3%10;

	respuesta = parseInt(num1)+parseInt(num2)+parseInt(num11)+parseInt(num22)+parseInt(cuarto)+parseInt(tercer)+parseInt(segundo)+parseInt(primero);
	
	document.ejemplo.resp.value = respuesta;

	prim=respuesta/10;
	seg=respuesta%10;

	horoscopo=parseInt(prim)+parseInt(seg);

	switch(horoscopo){
		case 1: valor = "METAL";break;
		case 2: valor = "HIERRO";break;
		case 3: valor = "MERCURIO";break;
		case 4: valor = "ZINC";break;
		case 5: valor = "ESTAÑO";break;
		case 6: valor = "PLOMO";break;
		case 7: valor = "PLATINO";break;
		case 8: valor = "NIQUEL";break;
		case 9: valor = "ORO";break;
		case 0: valor = "COBRE";break;
	}

    document.ejemplo.resp2.value = valor;


    var elemento = document.getElementById("foto");

    switch(horoscopo){
		case 1: valor = elemento.src = "imagenes/1.jpg";break;
		case 2: valor = elemento.src = "imagenes/2.jpg";break;
		case 3: valor = elemento.src = "imagenes/3.jpg";break;
		case 4: valor = elemento.src = "imagenes/4.jpg";break;
		case 5: valor = elemento.src = "imagenes/5.jpg";break;
		case 6: valor = elemento.src = "imagenes/6.jpg";break;
		case 7: valor = elemento.src = "imagenes/7.jpg";break;
		case 8: valor = elemento.src = "imagenes/8.jpg";break;
		case 9: valor = elemento.src = "imagenes/9.jpg";break;
		case 0: valor = elemento.src = "imagenes/0.jpg";break;
	}

    //elemento.src = "imagenes/2.jpg";



}







/*
function miFuncion(){
	var elemento = document.getElementById("foto");




	elemento.src = "imagenes/2.jpg";
}

*/