function Letras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	if (letras.indexOf(tecla) == -1) {
		alert("Ingrese solo letras");
		return false;
	}
}


function ValidarNumeros() {
	//Los dígitos del 0 al 9 están en el rango del 48 al 57 de los caracteres visibles del código ASCII
    //El punto esta en el 46 del ASCII
	if ((event.keyCode < 48 || event.keyCode > 57)) {
            alert("Ingrese solo números");
            return false;
	}
}

function ValidarFloat() {
	//Los dígitos del 0 al 9 están en el rango del 48 al 57 de los caracteres visibles del código ASCII
    //El punto esta en el 46 del ASCII
	if ((event.keyCode < 48 || event.keyCode > 57)&& event.keyCode != 46) {
            alert("Ingrese solo números");
            return false;
	}
}

function validar() {
	var producto = document.getElementById("producto").value;
	var meses = document.getElementById("meses").value;
	var monto = document.getElementById("monto").value;
	var tarjeta = document.getElementById("tarjeta").value;

	if (producto.length == 0 || producto == null) {
		alert("Ingrese el nombre de operación.");
	}
	else if (meses.length == 0 || meses == null) {
		alert("Ingrese numero de meses");
	}
	else if (monto.length == 0 || monto == null) {
		alert("Ingrese el monto.");
	}
	else if (tarjeta == "Seleccione") {
		alert("Seleccione el tipo de tarjeta.");
	}
	else {
		if (confirm("Estas seguro de enviar los datos?") == true) {
			document.getElementById("enviar1").submit();
		}
	}
}

