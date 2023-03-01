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
	<img src='<?=$base_url?>/resource/img/banerg.png' class="img-fluid" alt="Imagen General"/>
	<main>
		<div class="fondoAcerca" data-aos="flip-down">
			<div class="container my-4 py-4 ">
				<h2 class="pt-3 mt-2 tituloAcerca">¿Quieres unirte?</h2>
				<div class="text-start lineaAzulSobre mb-4"></div>
				<p class="">¡Estamos trabajando para revolucionar la manera en que las personas hacen sus compras hidráulicas!</p>
				<p class="fw-bold">Buscamos Plomeros que quieran aumentar sus ingresos haciendo lo mismo que hacen todos los dias, asesorar a sus propios clientes y usarnos como herramienta de venta para así ganar comisión de lo que recomiendan e instalan, que quieran capacitarse y certificarse para ganar más conocimiento en el área que se especializan o que quieran aprender de otra área totalmente nueva.</p>
			</div>
		</div>
	</main>
	<?php $this->load->view('layout/footer'); ?>
	<script>
		AOS.init();
	</script>
</body>
</html>