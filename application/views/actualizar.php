<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hidro Monedas</title>
	<?php $this->load->view('layout/header'); ?>
</head>
<body>
	<?php $this->load->view('layout/menu'); ?>
	<main>
		<div class="container text-center fondoBeige pb-5 pt-2">
			<div class="container bg-white asignarTamanio pb-4">
				<img src='<?=$base_url?>/resource/img/hidroa.png' width="60" class="pt-4" alt="Imagen Hidro" />
				<div class="estiloCajaUpdate">
					<form method="post">
					<div class="row">
						<div class="col-12 pt-3">
							<label>País:</label>
							<select class="form-control" id="pais" name="pais" required>
								<option value="" selected>Selecciona tu país</option>
								<option value="1_pais">Guatemala</option>
								<option value="2_pais">México</option>
								<option value="3_pais">El Salvador</option>
								<option value="4_pais">Honduras</option>
								<option value="5_pais">Nicaragua</option>
							</select>
						</div>
						<div class="col-12 pt-3">
							<label>Tipo de documento:</label>
							<select class="form-control" id="tipoDoc" name="tipoDoc" required>
								<option value="" selected>Selecciona un tipo de docuemnto</option>
								<option value="1_doc">Número de Identificación Tributaria</option>
								<option value="2_doc">Documento Personal de Identificación</option>
								<option value="3_doc">Clave Única Registro Población</option>
								<option value="4_doc">Número de Pasaporte</option>
								<option value="5_doc">Documento Único de Identidad</option>
								<option value="6_doc">Cédula de Residente</option>
							</select>
						</div>
						<div class="col-12 pt-3">
							<label>Numero de documento:</label>
							<input class="form-control" name="numeroDoc" required/>
						</div>
					</div>
					<div class="text-center pt-3">
						<button href="#" type="submit" class="btn btn-warning btn-md">Actualizar</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</main>
	<?php $this->load->view('layout/footer'); ?>
</body>
</html>