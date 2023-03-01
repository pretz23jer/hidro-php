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
	<div class="container text-center pt-3 pb-5" data-aos="fade-down">
		<div class="row">
			<div class="col-12 col-lg-6">
				<p class="fs-2 fw-bold pt-5">Únete a Hidro para prolongar tus equipos</p>
				<p class="fs-5">La herramienta para hacer <strong>crecer tu negocio</strong> al aumentar las visitas y el gasto promedio de tus clientes</p>
				<div class="pt-5 mt-1">
					<form class="row g-4">
						<div class="col-auto">
							<label for="inputPassword2" class="visually-hidden">Password</label>
							<input type="password" class="form-control" id="inputPassword2" name="emailBusnes" requiered>
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary mb-3">Agendar demo</button>
						</div>
					</form>
					<label>Conoce nuestra plataforma...</label>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div>
					<video class="img-fluid" controls autoplay="true" muted="true" loop alt="Imagen General">
						<source src='<?=$base_url?>/resource/img/video.mp4' type="video/mp4" />
					</video>
				</div>
			</div>
		</div>
	</div>
	<div class="fondoBeige pt-5 mb-5" data-aos="fade-down">
		<div class="container text-center">
			<p class="fs-4">MÁS DE <strong>30</strong> MARCAS EN LATINOAMÉRICA CONFÍAN EN HIDRO</p>
			<div class="row">
				<div class="col-6 col-lg-2">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/marca1.png' class="img-fluid" alt="Marca Empresa"/>
					</div>
				</div>
				<div class="col-6 col-lg-2">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/marca2.png' class="img-fluid" alt="Marca Empresa"/>
					</div>
				</div>
				<div class="col-6 col-lg-2">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/marca3.png' class="img-fluid" alt="Marca Empresa"/>
					</div>
				</div>
				<div class="col-6 col-lg-2">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/marca4.png' class="img-fluid" alt="Marca Empresa"/>
					</div>
				</div>
				<div class="col-6 col-lg-2">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/marca5.png' class="img-fluid" alt="Marca Empresa"/>
					</div>
				</div>
				<div class="col-6 col-lg-2">
					<div class="p-4">
						<img src='<?=$base_url?>/resource/img/marca6.png' class="img-fluid" alt="Marca Empresa"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white pt-5 mb-5" data-aos="fade-down">
		<div class="container">
			<p class="fs-3 text-center">TODO LO QUE NECESITAS PARA HACER CRECER TU EMPRESA</p>
			<p class="fs-4 text-center">Está en la plataforma de <strong>Hidro</strong></p>
		</div>
		<div class="container pt-5 mt-5">
			<div class="row textoCotizaEspa">
				<div class="col-12 col-md-6 col-lg-6">
					<p>Posicionamiento de marca</p>
					<p class="cotizaTexto fs-3 fw-bold">Productos de alta calidad,<br /> eficiencia  y garantía</p>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/casco.ico' height="35"  alt="Marca Empresa"/><p class="ajusteTexto">Contamos con <strong>asesoría técnica</strong>  en implementación de nuestro productos adquiridos</p>
					</div>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/motor.ico' height="35"  alt="Marca Empresa"/><p class="ajusteTexto"><strong>Marcas reconocidas</strong> en motores internaciones</p>
					</div>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/seguridad.ico' height="35"  alt="Marca Empresa"/><p class="ajusteTexto">Compras <strong>seguras</strong> y fiables en todos nuestros productos, así tambien garantía por desperfecto de fábrica</p>
					</div>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/descuento.ico' height="35"  alt="Marca Empresa"/><p class="ajusteTexto"><strong>Descuentos</strong> especiales a nuestros clientes</p>
					</div>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/envio.ico' height="35"  alt="Marca Empresa"/><p class="ajusteTexto"><strong>Envíos</strong> a todo el país, trabajando con las empresas de paquetería y envíos: <strong>FORZA, CARGO EXPRESO</strong> y <strong>GUATEX</strong></p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-6">
					<img src='<?=$base_url?>/resource/img/asesor.png' height="350" class="img-fluid"  alt="Marca Empresa"/>
				</div>
			</div>
		</div>
		<div class="container segmentoDos pt-5 mt-5" data-aos="down-up">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6">
					<img src='<?=$base_url?>/resource/img/anuncio.jpg' height="200" class="img-fluid pb-3"  alt="Marca Empresa"/>
				</div>
				<div class="col-12 col-md-6 col-lg-6">
					<p class="cotizaTexto pt-4">Desde tu hogar puedes ver <br /> nuestros productos, realizar <br /> compras y mucho mas...</p>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/telefono.ico' height="30" alt="Marca Empresa" /><p class="ajusteTexto"> Puedes visitarnos por medio de tu <strong>Smarthphone</strong>  o computadora</p>
					</div>
					<div class="d-flex">
						<img src='<?=$base_url?>/resource/img/reloj.ico' height="30" alt="Marca Empresa" /><p class="ajusteTexto"> Nuestro sitio disponible las <strong>24 /7 </strong> los 365 días</p>
					</div>
					<div class="d-flex">
						<i class="fa-brands fa-facebook fa-lg"></i><p class="ajusteTexto"> Contamos con nuestras <strong>Redes Sociales</strong> para que nos sigues y te puedas comunicar con nosotros</p>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-black pt-5 pb-5 text-center" data-aos="fade-down">
			<p class="fs-3 fw-bold text-white lh-1 pt-3">¡Conoce ahora cómo puedes aumentar <br/>la rentabilidad de tu <br />empresa con Hidro!</p>
			<p class="text-white">Plan de premios, base de datos, conocimiento y segmentación de clientes, campañas de marketing, indicadores de negocio y más. 😊</p>
			<a href="#" class="btn btn-md btn-warning" rel="noreferrer">Agendar Demo</a><br /><br />
		</div>
		<div class="bombaAgua pt-5 pb-5" data-aos="down-up">
			<p class="contactar text-center text-black fs-3" >Adquiere tus productos</p>
			<p class="text-center text-black">¡Recuerde que con <strong>Hidrocompras</strong> encuentras todos los productos referentes a piscinas </p>
			<p class="text-center text-black">Cotiza en un solo clic <img src='<?=$base_url?>/resource/img/verde.ico' width="50" alt="imagen-hidro"/> </p>
		</div>
		<div class="container concatacnos" data-aos="down-up">
			<p class="cotizaTexto text-center fs-3 fw-bold">Productos para el Hogar</p><br/><br/>
			<div class="text-center">
				<img src='<?=$base_url?>/resource/img/purifica.png' height="200"  alt="Imgaen Hidro"/><img src='<?=$base_url?>/resource/img/calentador.png' height="200" alt="imagen-hidro" /><img src='<?=$base_url?>/resource/img/p6.png' height="200"  />
				<br/><br/>
				<p class="text-center fw-bold">BOMBAS | CALENTADORES | FILTROS</p>
			</div>
		</div>
	</div>
	<?php $this->load->view('layout/footer'); ?>
	<script>
		AOS.init();
	</script>
</body>
</html>