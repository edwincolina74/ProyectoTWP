<!DOCTYPE html>
<html>

<head>
	<title>Libro de Reclamaciones</title>
	<link rel="stylesheet" type="text/css" href="../../css/reclamo.css">
	<script type="text/javascript" src="../../js/reclamos.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/estilos1.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<!-- CABECERA --> 
	<?php
	include "../../Intro/cabecera.php"
	?>
	<!-- FIN CABECERA    -->
	<!-- FIN CABECERA    -->
	<h1 class="titulo">LIBRO DE RECLAMACIONES</h1>
	<div class="general">
		<form id="formula" action="../../llamadas/proceso_reclamo.php" method="post">
			<p class="center">Conforme a lo establecido en el código de la Protección y Defensa del consumidor este
			establecimiento cuenta con un Libro de Reclamaciones a tu disposición.</p>
			<p class="center">Razón Social: HOTEL IMPERIAL</p>
			<p class="center">RUC: 20102489672</p>
			<p class="center">Dirección: Calle los claveles 155, Lima, Perú</p>
			<br>

			<div class="marco">
				<div class="efecto">
					<div class="contact-form">
						<h2 class="datos">Datos del Reclamante</h2>
						<div class="fila">
							<div class="celda">
								<p>
									<label>Nombre Completo</label>
									<input type="text" onkeypress="return soloLetras(event)" id="nombre" name="nombre">
								</p>
							</div>
						</div>
						<div class="fila">
							<div class="celda">
								<p>
									<label> Tipo de documento</label>
									<select required id="tipoDoc" name="tipoDoc">
										<option checked>Seleccione</option>
										<option>DNI</option>
										<option>Pasaporte</option>
										<option>Otro</option>
									</select>
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Distrito</label>
									<select required id="dist" name="dist">
										<option checked>Seleccione</option>
										<option>Ancón</option>
										<option>Ate</option>
										<option>Barranco</option>
										<option>Breña</option>
										<option>Carabayllo</option>
										<option>Chaclacayo</option>
										<option>Chorrilos</option>
										<option>Cieneguilla</option>
										<option>Comas</option>
										<option>El Agustino</option>
										<option>Huaycán</option>
										<option>Independencia</option>
										<option>Jesús Maria</option>
										<option>La Molina</option>
										<option>La Victoria</option>
										<option>Lima</option>
										<option>Lince</option>
										<option>Los Olivos</option>
										<option>Lurigancho-Chosica</option>
										<option>Puente Piedra</option>
										<option>Punta Hermosa</option>
										<option>Punta Negra</option>
										<option>Rímac</option>
										<option>San Bartolo</option>
										<option>San Borja</option>
										<option>San Isidro</option>
										<option>San Juan de Lurigancho</option>
										<option>San Juan de Miraflores</option>
										<option>San Luis</option>
										<option>San Martín de Porres</option>
										<option>San Miguel</option>
										<option>Santa Anita</option>
										<option>Santa María del Mar</option>
										<option>Santa Rosa</option>
									</select>
								</p>
							</div>
						</div>
						<div class="fila">
							<div class="celda">
								<p>
									<label>Nro de Documento</label>
									<input type="number" name="DNI" id="dni"
									onkeypress="return soloNumeros(event)">
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Dirección Domiciliaria</label>
									<input type="text" name="direc" id="direccion">
								</p>
							</div>
						</div>

						<div class="fila">
							<div class="celda">
								<p>
									<label>Número telefonico</label>
									<input type="number" name="fono" id="fono"
									onkeypress="return soloNumeros(event)">
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Correo electronico</label>
									<input type="email" name="email" id="correo">
								</p>
							</div>
						</div>

					</div>


				</div>
			</div>

			<div class="marco">
				<div class="efecto">
					<div class="contact-form">
						<h2 class="datos">Detalle del reclamo</h2>

						<div class="fila">					
							<div class="celda">
								<p>
									<label>Tipo</label>
									<select name="tipo" id="tipoA" name="tipA">
										<option checked>Seleccione</option>
										<option>Reclamo</option>
										<option>Queja</option>
									</select>
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Detalle del Reclamo o Queja</label>
									<select id="tipo" name="tipo">
										<option checked>Seleccione</option>
										<option>Evento</option>
										<option>Hospedaje</option>
										<option>Otro</option>
									</select>
								</p>
							</div>
						</div>


						<div class="fila">
							<div class="celda">
								<p>
									<label>Numero de personas</label>
									<input type="number" name="ngente" id="ngente"onkeypress="return soloNumeros(event)">
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Monto S/.</label>
									<input type="number" name="monto" id="monto" onkeypress="return soloNumeros(event)">
								</p>
							</div>
						</div>

						<div class="fila">
							<div class="celda">
								<p>
									<label>Adjuntar archivo si requiere</label>
									<input id="archivo" type="file" name="Adjuntar"
									accept="image/*,application/pdf" />
								</p>
							</div>
						</div>

						<div class="fila">
							<div class="celda">
								<p>
									<label>Descripcion</label>
									<textarea id="desc" rows="1" requerid name="desc"></textarea>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<p class="center">RECLAMO: Disconformidad relacionada con los servicios.</p>
			<p class="center">QUEJA : Disconformidad no relacionada a los productos o servicios; o malestar o descontento respecto a la atención al público.
			</p>
			<br>
			<br>
			<div class="texto">
				<p class="center">
					<input type="checkbox" name="condicion" alt="check" id="checkbox">
					<label>Al hacer click aqui acepto que almacenen mis datos para darme una respuesta</label>
				</p>
				<p class="center">
					<input id="enviar" type="reset" name="borrar" value="Borrar" onclick="return ConfirmDelete()">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="button" id="enviar" value="Enviar" onclick="validar()">
				</p>
			</div>
		</form>
	</div>
	<!-- PIE DE PAGINA -->
	<?php
	include "../../Intro/piepagina.php"
	?>

	<!-- FIN: PIE DE PAGINA -->

</body>
</html>