function ConfirmDelete() {
	var respuesta = confirm("Se va a borrar lo escrito");
	if (respuesta == true) {
		return true;
	}
	else {
		return false;
	}
}

function soloLetras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	if (letras.indexOf(tecla) == -1) {
		alert("Ingresar solo letras");
		return false;
	}
}

window.onbeforeunload = preguntarAntesDeSalir();

function preguntarAntesDeSalir() {
	return "¿Seguro que quieres salir?";
}
function soloNumeros() {
	//Los dígitos del 0 al 9 están en el rango del 48 al 57 de los caracteres visibles del código ASCII
	if ((event.keyCode < 48) || (event.keyCode > 57)) {
		alert("Ingresar solo números");
		return false;
	}
}

function validar() {
	var nombre = document.getElementById("nombre").value;
	var tipoDoc = document.getElementById("tipoDoc").value;
	var dist = document.getElementById("dist").value;
	var nDoc = document.getElementById("dni").value;
	var direc = document.getElementById("direccion").value;
	var telefono = document.getElementById("fono").value;
	var correo = document.getElementById("correo").value;
	var tipoA = document.getElementById("tipoA").value;
	var tipo = document.getElementById("tipo").value;
	var ngente = document.getElementById("ngente").value;
	var monto = document.getElementById("monto").value;
	var desc = document.getElementById("desc").value;
	var checkbox = document.getElementById("checkbox").checked;
	var nError1 = correo.indexOf("@");
	var nError2 = correo.indexOf(".");

	if (nombre.length == 0 || nombre == null) {
		alert("Ingrese su nombre.");
	}
	else if (tipoDoc == "Seleccione") {
		alert("Seleccione el tipo de documento.");
	}
	else if (dist == "Seleccione") {
		alert("Seleccione su distrito.");
	}
	else if (nDoc.length == 0 || nDoc == null) {
		alert("Ingrese su número de documento.");
	}
	else if (direc.length == 0 || direc == null) {
		alert("Ingrese su dirección");
	}
	else if (telefono.length == 0 || telefono == null) {
		alert("Ingrese su número de teléfono.");
	}
	else if (nError1 == -1 || nError2 == -1) {
		alert("Ingrese un correo electrónico válido.");
	}
	else if (tipoA == "Seleccione") {
		alert("Seleccione el tipo de proceso.");
	}
	else if (tipo == "Seleccione") {
		alert("Seleccione el Detalle del Reclamo o Queja.");
	}
	else if (ngente.length == 0 || ngente == null) {
		alert("Ingrese el numero de Personas.");
	}
	else if (monto.length == 0 || monto == null) {
		alert("Ingrese el monto.");
	}
	else if (desc.length == 0 || desc == null) {
		alert("Ingrese la descripción.");
	}
	else if (checkbox == false) {
		alert("Seleccione de aceptación");
	}
	else {
		if (confirm("Estas seguro de enviar los datos?") == true) {
			document.getElementById("formula").submit();
		}
	}
}
