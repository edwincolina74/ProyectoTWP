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