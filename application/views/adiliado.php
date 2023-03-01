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
	<img src='<?=$base_url?>/resource/img/baner1.jpg' class="img-fluid" alt="Imagen General"/>
	<main>
		<div class="pt-2" data-aos="fade-down">
				<div class="container pb-4">
					<h2 class="py-3 my-2 tituloAcerca">¿Qué hacen nuestros afiliados?</h2>
					<div class="text-start lineaAzulSobre mb-4"></div>
					<div class="row">
						<div class="col-12 col-md-4 col-lg-4 mt-2 " onmouseover="activarSonido()">
							<div class="card tarjetasAcerca">
								<div class="card-body" >
									<p class="text-center letraObjeti">VISITAN A SUS PROPIOS CLIENTES</p>
									<p>Tu te quedas con tus propios clientes, incluso nosotros te brindaremos oportunidades de conectar con más clientes nuevos que necesiten de tus servicios.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-4 mt-2 " onmouseover="activarSonido()">
							<div class="card tarjetasAcerca">
								<div class="card-body" >
									<p class="text-center letraObjeti">ASESORAN BIEN A SUS CLIENTES</p>
									<p>Ya que detectaste el problema hidráulico que tiene, brinda la solución hidráulica con nuestra tienda en linea y nuestra app HIDROCOMPRAS y gana comisiones con los mismos equipos que instalas.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4 col-lg-4 mt-2" onmouseover="activarSonido()">
							<div class="card tarjetasAcerca">
								<div class="card-body" >
									<p class="text-center letraObjeti">REFIEREN LOS EQUIPOS QUE INSTALAN</p>
									<p>Nosotros haremos todo, facturamos al NIT que el cliente pida, entregamos en la dirección que el cliente indique (aplica restricciones) * tu instalas y ganas.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mt-2" onmouseover="activarSonido()">
							<div class="card acercaTexto">
								<div class="card-body" >
									<p class="text-center letraObjeti">REVISAN SU BILLETERA DIGITAL</p>
									<p>Si a tu instalación le sirve cualquiera de nuestros productos para ganar comisión, haz la venta con nuestra app y podrás monitorear cuánto vas ganando por cada venta que hagas con nosotros, a finalizar cada mes, lo que tengas acumulado en comisión puedes reclamarlo en efectivo, Gift Cards de Supermercados o adquirir cualquiera de los productos de nuestra tienda en línea.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mt-2" onmouseover="activarSonido()">
							<div class="card acercaTexto">
								<div class="card-body">
									<p class="text-center letraObjeti">SE CAPACITAN Y CERTIFICAN</p>
									<p>Si tus habilidades son LIMITADAS, no te preocupes, contamos con PROFESIONALES EN CADA CATEGORÍA que impartirán capacitaciones programadas de forma presencial y virtual para que vayas adquiriendo mayor conocimiento y así puedas atender a más clientes y no perder instalaciones que pueden transformarse en más comisiones para ti.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</main>
	<?php $this->load->view('layout/footer'); ?>
	<script type="text/javascript">
		function activarSonido() {
			const audio = document.createElement("audio");
			audio.preload = "auto";
			audio.src = "<?=$base_url?>/resource/img/clic.mp3";
			audio.play();
			document.body.appendChild(audio);
		}
	</script>
	<script>
		AOS.init();
	</script>
</body>
</html>