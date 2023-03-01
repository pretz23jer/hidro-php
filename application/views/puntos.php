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
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner" data-aos="flip-down">
				<div class="carousel-item active">
					<img src='<?=$base_url?>/resource/img/baner4.jpg' class="img-fluid" alt="Imagen Hidro" />
					<div class="row carousel-caption d-none d-lg-block">
						<div class="col-12 col-lg-6">
							<h3 class="ajustarTextoBanerPuntos">Ahora puedes ganar puntos pidiendo </h3>
							<h3 class="ajustarTextoBanerPuntos2">En tus marcas favoritas. Guarda tu factura  e ingresa los dato en nuestra app.</h3>
							<a class="btn btn-lg btn-warning h3 fw-bold" href="#">&nbsp;&nbsp;Descarga la App&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src='<?=$base_url?>/resource/img/baner4.jpg' class="img-fluid" alt="Imagen Hidro" />
					<div class="row carousel-caption d-none d-lg-block">
						<div class="col-12 col-lg-6">
							<h3 class="ajustarTextoBanerPuntos">Ahora puedes ganar puntos pidiendo </h3>
							<h3 class="ajustarTextoBanerPuntos2">En tus marcas favoritas. Guarda tu factura  e ingresa los dato en nuestra app.</h3>
							<a class="btn btn-lg btn-warning h3 fw-bold" href="#">&nbsp;&nbsp;Descarga la App&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src='<?=$base_url?>/resource/img/baner4.jpg' class="img-fluid" alt="Imagen Hidro" />
					<div class="row carousel-caption d-none d-lg-block">
						<div class="col-12 col-lg-6">
							<h3 class="ajustarTextoBanerPuntos">Ahora puedes ganar puntos pidiendo </h3>
							<h3 class="ajustarTextoBanerPuntos2">En tus marcas favoritas. Guarda tu factura  e ingresa los dato en nuestra app.</h3>
							<a class="btn btn-lg btn-warning h3 fw-bold" href="#">&nbsp;&nbsp;Descarga la App&nbsp;&nbsp;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container text-center pt-4" data-aos="flip-down">
			<p class="fs-1 fw-bold">¿Cómo funciona Hidro?</p>
			<div class="row">
				<div class="col-12 col-lg-4">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/ilustracion3.png' class="img-fluid" alt="Imagen Hidro" />
						<p class="fs-3 fw-bold">Descarga la App</p>
						<p class="fs-5">Regístrate una única vez en cualquiera de nuestras marcas aliadas o descarga la <strong>APP</strong> en <strong>Play Store</strong> o <strong>App Store</strong></p>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/ilustracion.png' class="img-fluid" alt="Imagen Hidro" />
						<p class="fs-3 fw-bold">Acumula puntos</p>
						<p class="fs-5">Comparte tu número de documento al finalizar tu pago</p>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/ilustracion2.png' class="img-fluid" alt="Imagen Hidro" />
						<p class="fs-3 fw-bold">Reclama tus premios</p>
						<p class="fs-5">Consulta los premios disponibles en tus marcas favoritas. Los puntos no se mezclan, solo los puedes usar en la marca que los ganaste.</p>
					</div>
				</div>
			</div>
			<p class="fs-2 pt-2 mt-5">Descarga la App</p>
			<div class="d-flex justify-content-center pb-5">
				<div class="p-1 m-1" data-aos="flip-down">
					<a href="#">
						<img src='<?=$base_url?>/resource/img/googleplay.png' height="60" alt="Imagen Hidro" />
					</a>
				</div>
				<div class="p-1 m-1" data-aos="flip-down" >
					<a href="#">
						<img src='<?=$base_url?>/resource/img/appstore.png' height="60" alt="Imagen Hidro" />
					</a>
				</div>
			</div>
		</div>
		<div class="fondoBeigeDos pt-5">
			<p class="fs-2 fst-normal text-center pt-5 pb-5 text-black">#HidroQueTePremia, <strong>de verdad</strong></p>
			<div class="container pb-5" data-aos="flip-down">
				<div class="row mb-5">
					<div class="col-12 col-lg-3 condicionarVector" >
						<p class="fw-bold fs-3 mt-5 pt-5">Una App, infinitos puntos</p>
						<p class="h5 fw-lighter">Olvídate de acumular decenas de tarjetas de puntos y perderlas. Tenlos todos en un solo lugar, puedes consultar cuántos tienes y en cuáles marcas.</p>
						<br />
						<br />
						<p class="fw-bold fs-3">Puntos que premian</p>
						<p class="h5 fw-lighter">No somos otra "App de puntos". Por primera vez ser un cliente Hidro trae beneficios reales, conoce los premios que te dan tus marcas favoritas..</p>
					</div>
					<div class="col-12 col-lg-1 condicionarVector" data-aos="flip-down">
						<div class="pt-5 mt-5">
							<br /><br /><br />
							<img  src='<?=$base_url?>/resource/img/vector.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
						<div class="pt-5 mt-5">
							<br /><br /><br /><br /><br /><br /><br /><br />
							<img  src='<?=$base_url?>/resource/img/vector.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-12 col-lg-4 text-center" data-aos="flip-down">
						<img src='<?=$base_url?>/resource/img/iphone.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
					<div class="col-12 col-lg-1 condicionarVector" data-aos="flip-down">
						<div class="pt-5 mt-5">
							<br /><br /><br />
							<img  src='<?=$base_url?>/resource/img/vector.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
						<div class="pt-5 mt-5">
							<br /><br /><br /><br /><br /><br /><br /><br />
							<img  src='<?=$base_url?>/resource/img/vector.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-12 col-lg-3 text-end condicionarVector" data-aos="flip-down">
						<p class="fw-bold fs-3 pt-5 mt-5">Cerca de ti</p>
						<p class="h5 fw-lighter">Encuentra las marcas con los mejores premios cerca de ti y únete a sus programas en un instante..</p>
						<br />
						<br />
						<p class="fw-bold fs-3 mt-5 pt-5">Ahorra por tus compras</p>
						<p class="h5 fw-lighter">Conoce el ahorro en dinero que ganas por tu consumo en marcas aliadas..</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php $this->load->view('layout/footer'); ?>
	<script>
		AOS.init();
	</script>
</body>
</html>