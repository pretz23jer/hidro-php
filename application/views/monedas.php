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
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-aos="fade-down">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src='<?=$base_url?>/resource/img/baner3.png' class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src='<?=$base_url?>/resource/img/baner3.png' class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src='<?=$base_url?>/resource/img/baner3.png' class="d-block w-100" alt="...">
				</div>
			</div>
		</div>
		<div class="fondoBeigeDos pt-5 pb-5" data-aos="fade-down">
			<div class="container mt-4">
				<p class="h1 monedaTexto">¿Qué son los Hidro Monedas  _____________________________</p>
				<p class="h4 pt-4 pb-4">No son puntos, son monedas <img src='<?=$base_url?>/resource/img/hlogo.png' height="40" alt="Imagen Hidro" /></p>
				<div class="row mb-5 pb-5">
					<div class="col-12 col-md-4">
						<div class="estiloTarjetaMonedas">
							<img src='<?=$base_url?>/resource/img/circulo3.png' height="200" alt="Imagen Hidro" />
							<p class="h3 text-center fw-bold text-white mb-3 mt-3">Gana Hidro Monedas</p>
							<p class="text-center text-white h5 lh-base">Cada vez que compres en las marcas aliadas o convierte tus puntos de otros programas para ganar más.</p>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="estiloTarjetaMonedas2">
							<img src='<?=$base_url?>/resource/img/circulo2.png' height="200" alt="Imagen Hidro" />
							<p class="h3 text-center fw-bold text-white mb-3 mt-3">Úsalos en la red</p>
							<p class="text-center text-white h5 lh-base">De más de 10 marcas que tenemos para ti y disfruta un mundo de experiencias.</p><br />
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="estiloTarjetaMonedas">
							<img src='<?=$base_url?>/resource/img/circulo1.png' height="200" alt="Imagen Hidro" />
							<p class="h3 text-center fw-bold text-white mb-3 mt-3">Ahorra dinero</p>
							<p class="text-center text-white h5 lh-base">Disfruta las promociones exclusivas y descuenbtos por usar Hidro Monedas</p><br />
						</div>
					</div>
				</div>
			</div>
			<div class="container pt-4 pb-4" data-aos="fade-down">
				<p class="h2 fw-bold">¿Cómo ganar Hidro Monedas? __________________________________</p>
				<p class="h4 mt-4 pt-3 pb-5 mb-5"> ¡Tienes 3 formas de ganarlos! Los Hidro Monedas son como el efectivo que puedes usar para adquirir lo que más te gusta. Elige la opción que prefieras y obtén tus Hidro Monedas ahora..</p>
				<div class="cajaGris">
					<div class="row">
						<div class="col-12 col-lg-4 mb-1" data-aos="fade-down">
							<div class="CajaCompras">
								<p class="fw-bold h4 text-black pt-4 pb-4">Aquiere las siguientes marcas Hidro Bombas</p>
								<div class="row pb-4">
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/AFT.png' alt="Imagen Hidro" />
									</div>
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/AQUAPRO.png' alt="Imagen Hidro1" />
									</div>
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/BERKELEY.png' alt="Imagen Hidro2" />
									</div>
								</div>
								<div class="pt-5 pb-4">
									<a class="btn btn-md btn-dark btn-bloc fw-bold" href="#" rel="noreferrer">&nbsp;&nbsp;&nbsp;Ver más&nbsp;&nbsp;&nbsp;</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 mb-1" data-aos="fade-down">
							<div class="CajaCompras">
								<p class="fw-bold h4 text-black pt-4 pb-4">Aquiere las siguientes marcas Hidro Materiales</p>
								<div class="row pb-4">
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/starite.png' alt="Imagen Hidro" />
									</div>
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/TITAN.png' alt="Imagen Hidro" />
									</div>
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/FRANKLIN-ELECTRIC.png' alt="Imagen Hidro" />
									</div>
								</div>
								<div class="pt-5 pb-4">
									<a class="btn btn-md btn-dark btn-bloc fw-bold" href="#" rel="noreferrer">&nbsp;&nbsp;&nbsp;Ver más&nbsp;&nbsp;&nbsp;</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 mb-1" data-aos="fade-down">
							<div class="CajaCompras">
								<p class="fw-bold h4 text-black pt-4 pb-4">Aquiere las siguientes marcas Hidro Accesorios</p>
								<div class="row pb-4">
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/ESPA.png' alt="Imagen Hidro" />
									</div>
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/GLOBAL-WATER-SOLUTION-2-1.png' alt="Imagen Hidro" />
									</div>
									<div class="col-4 CajaComprasHijo">
										<img class="fondoCajaHidro alturaImg" src='<?=$base_url?>/resource/img/SOMET.png' alt="Imagen Hidro" />
									</div>
								</div>
								<div class="pt-5 pb-4">
									<a class="btn btn-md btn-dark btn-bloc fw-bold" href="#" rel="noreferrer">&nbsp;&nbsp;&nbsp;Ver más&nbsp;&nbsp;&nbsp;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container pt-5 mt-5 pb-4" data-aos="fade-down">
				<p class="h2 fw-bold mt-5 pt-3">¿Dónde usar Hidro Monedas? __________________________________</p>
				<p class="h4 mt-4 pt-3 pb-5 mb-5"> Úsalos como efectivo en más de 20 marcas de productos de Hidrocompras al momento de adquirirlas.</p>
				<br />
				<div class="row">
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/AFT.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/AQUAPRO.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/BERKELEY.png' class="img-fluid"  alt="Imagen Hidro"/>
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/starite.png' class="img-fluid"  alt="Imagen Hidro"/>
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/TITAN.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/FRANKLIN-ELECTRIC.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
				</div>
				<div class="row pt-3">
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/ESPA.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/GLOBAL-WATER-SOLUTION-2-1.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/SOMET.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/MYERS.png'} class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/Sin-titulo-1-1.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
					<div class="col-6 col-lg-2">
						<div class="cajaCircular">
							<img src='<?=$base_url?>/resource/img/PENTAIR.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
				</div>
			</div>
			<div class="fondoColorCeleste pt-5 mt-5 pb-5" data-aos="fade-down">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="espacioApp">
								<p class="fs-2 text-center">Descarga la app</p>
								<div class="d-flex justify-content-center pb-5">
									<div class="p-1 m-1">
										<a href="#" rel="noreferrer" rel="noreferrer">
											<img src='<?=$base_url?>/resource/img/googleplay.png' height="50" alt="Imagen Hidro" />
										</a>
									</div>
									<div class="p-1 m-1" >
										<a href="#" rel="noreferrer" rel="noreferrer">
											<img src='<?=$base_url?>/resource/img/appstore.png' height="50" alt="Imagen Hidro" />
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<img src='<?=$base_url?>/resource/img/iphone2.png' class="altura-Img" alt="Imagen Hidro" />
						</div>
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