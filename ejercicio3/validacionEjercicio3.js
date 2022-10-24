
function validarDatos()
{
	let nombre,direccion,producto,tipo,precio,cantidad,validar;
	nombre = document.ejercicio3.nCliente.value;
	direccion = document.ejercicio3.dCliente.value;
	producto = document.ejercicio3.nProducto.value;
	tipo = document.ejercicio3.tProducto.value;
	precio = document.ejercicio3.pUnitario.value;
	cantidad = document.ejercicio3.cantidad.value;

	validar=0;

	if (nombre == "")
	{
		alert("Es obligatorio ingresar su NOMBRE");
	} 
		else if (direccion == "")
		{
			alert("Es obligatorio ingresar su DIRECCION");
		}  
		else if (producto == "")
		{
			alert("Es obligatorio ingresar PRODUCTO");
		} 
		else if (precio == "" || precio==0)
		{
			alert("Es obligatorio ingresar PRECIO");
		} 
		else if (cantidad == "" || cantidad==0)
		{
			alert("Es obligatorio ingresar cantidad");
		} 
		else{
			validar=1;
		}

	if (validar==1)
	{
		document.ejercicio3.submit();	
	}
	
}


	function validNum()
	{
		if (event.keyCode<48 || event.keyCode>57)
		{
			alert("Ingrese solo números en Cantidad"); 
			return false;
		}
	}

	function validND()
	{
		if ((event.keyCode <48 || event.keyCode > 57) && event.keyCode !=46)
		{
			alert("Ingrese solo numeros en Precio"); 
			return false;
		}
	}

	function texto() {

		key = event.keyCode || event.which;
	
		tecla = String.fromCharCode(key).toLowerCase();
		letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";

		if (letras.indexOf(tecla) == -1) {
			alert("Ingrese solo letras");
			return false;
		}
	
	}



/*

		else if (!isNaN(nombre)){
			alert("Su NOMBRE no debe tener valor númerico");	
		}
		else if (direccion== ''){
			alert("Ingrese su DIRECCION");
		}
		else if (producto=='') {
			alert("Ingrese NOMBRE del PRODUCTO");
		}
		else if (!isNaN(producto)){
			alert("El NOMBRE del PRODUCTO no debe tener valor númerico");
		}
		else if (isNaN(precio)) {
			alert("Debe ingresar un valor númerico en el PRECIO");
		}
		else if (precio<=0) {
			alert("Debe ingresar un valor númerico de PRECIO válido");
		}
		else if (isNaN(cantidad)) {
			alert("Debe ingresar un valor númerico en la CANTIDAD");
		}
		else if (cantidad<=0) {
			alert("Debe ingresar un valor númerico de CANTIDAD válido");
		}
		else if (cantidad-Math.floor(cantidad)!= 0) {
			alert("Debe ingresar un valor entero en CANTIDAD");
		}

		*/
		