<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hidrocompras</title>
	<?php $this->load->view('layout/header'); ?>
	<script type="text/javascript">
	onload=function(){
		if (window.matchMedia('only screen and (max-width: 600px)').matches) {
			document.getElementById('img1').src='<?=$base_url?>/resource/img/banergm1.png';
			document.getElementById('img2').src='<?=$base_url?>/resource/img/banergm.png';
			document.getElementById('img3').src='<?=$base_url?>/resource/img/banergm3.png';
		} else {
			document.getElementById('img1').src='<?=$base_url?>/resource/img/banerg1.png';
			document.getElementById('img2').src='<?=$base_url?>/resource/img/banerg2.png';
			document.getElementById('img3').src='<?=$base_url?>/resource/img/banerg.png';
		}
	}
	</script>
</head>
<body>
	<?php $this->load->view('layout/menu'); ?>
	<main class="contianer">
		<div class="container-fluid espacioTarjeta" data-aos="fade-down">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="cajaPadre">
							<img id="img1" src=""  class="d-block w-100" alt='Imágen Hidrocompras' />
						</div>
					</div>
					<div class="carousel-item">
						<div class="cajaPadre">
							<img id="img2" src=''  class="d-block w-100" alt='Imágen Hidrocompras' />
						</div>
					</div>
					<div class="carousel-item">
						<div class="cajaPadre">
							<img id="img3" src=''  class="d-block w-100" alt='Imágen Hidrocompras' />
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="formaBoton" aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
					<span class="visually-hidden ">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="formaBoton" aria-hidden="true"><i class="fa fa-arrow-right" ></i></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<div class="container text-center pt-2 pb-5">
			<p class="todasApps">Todos los equipos hidráulicos  <br /> que instalas en una sola APP</p>
			<p class="fw-fold todasApps">HIDROCOMPRAS</p>
			<p class="fw-bold text-black acumulaTexto">Aumentas tus ingresos, acumulas puntos y ganas increíbles premios.</p>
			<a href="#" class="btn btn-sm btn-dark colorBoton animarBotonDescargar">&nbsp;&nbsp;&nbsp;&nbsp;Descarga Hidrocompras&nbsp;&nbsp;&nbsp;&nbsp;</a>
		</div>
		<div  class="container centarContenido mt-4" data-aos="flip-up">
			<div class="barraCeleste text-black fw-bold text-center">
				<div class="espacioEntre">¿Cómo funciona?</div>
			</div>
		</div>
		<div class="container pt-5" data-aos="fade-down">
			<div class="row">
				<div class="col-12 col-md-4 p-5 text-center" data-aos="fade-down">
					<img src='<?=$base_url?>/resource/img/app2.png' class="img-fluid" alt="Imagen Hidro" />

					<p class="fw-bold text-black h5">Descarga la Appen tu celular</p>
					<p>Regístrate una sola vez, haz click en cualquiera de las marcas que representamos o desde la <strong>App</strong></p>
				</div>
				<div class="col-md-4 p-5 text-center" style={{display: accion }} data-aos="fade-down">
					<img src='<?=$base_url?>/resource/img/app3.png' class="img-fluid" alt="Imagen Hidro" />
					<p class="fw-bold text-black h5">Aprovecha todos tus Clientes</p>
					<p>Cuando se te presente la oportunidad de reparar o instalar un equipo hidráulico de los que están en nuestro catalogo, véndelo o cómpralo con la <strong>APP HIDROCOMPRAS Y GANAS MAS!</strong></p>
				</div>
				<div class="col-md-4 p-5 text-center" style={{display: accion }} data-aos="fade-down">
					<img src='<?=$base_url?>/resource/img/app1.png' class="img-fluid" alt="Imagen Hidro" />
					<p class="fw-bold text-black h5">Reclama tus premios</p>
					<p>Solo necesitas el numero de factura y tu codigo unico de afiliado y asi acumula puntos y ganas increibles premios.</p>
				</div>
			</div>
			<div class="text-center pb-5">
				<div class="d-flex text-center justify-content-center">
					<div class="justify-content-center p-1">
						<a href="#" class="btn btn-md btn-dark fw-bold animarBotonDescargar" rel="noreferrer" >&nbsp;&nbsp;Descargar HidroCliente&nbsp;&nbsp;</a>
					</div>
					<div class="p-1 justify-content-center">
						<a href="#" class="btn btn-md btn-dark fw-bold animarBotonDescargar" rel="noreferrer" >&nbsp;&nbsp;Descargar HidroTécnico&nbsp;&nbsp;</a>
					</div>
				</div>
			</div>
		</div>
		<div  class="container centarContenido mt-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
			<div class="barraCeleste text-black fw-bold text-center">
				<div class="espacioEntre">Productos Hidrocompras</div>
			</div>
		</div>
		<div class="container text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
			<p class="h5 pt-4 mt-4">VENDES / REFIERES, INSTALAS Y GANAS CON HIDROCOMRPAS</p>
			<div class="row pt-5 mt-4">
				<div class="col-12 col-lg-3">
					<div class="izquiTar tarjetaProducto" data-aos="fade-down">
						<img src='<?=$base_url?>/resource/img/hidroa.png' width="50" alt="Imagen Hidro" />
						<p class="fw-bold h6 pt-3 pb-3">INSTALACIONES</p><br />
						<p>Todos los productos que conoces e intalas te hacen ganar más dinero y acumular puntos</p><br/>
						<a class="btn btn-md btn-outline-dark" href="#" rel="noreferrer">Conoce más</a>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="izquiTar tarjetaProducto" data-aos="fade-down">
						<img src='<?=$base_url?>/resource/img/hidroa.png' width="50" alt="Imagen Hidro" />
						<p class="fw-bold h6 pt-3 pb-3">LISTA DE MATERIALES</p><br />
						<p>Todos los productos que conoces e intalas te hacen ganar más dinero y acumular puntos</p><br/>
						<a class="btn btn-md btn-outline-dark" href="#" rel="noreferrer">Conoce más</a>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="izquiTar tarjetaProducto" data-aos="fade-down">
						<img src='<?=$base_url?>/resource/img/hidroa.png' width="50" alt="Imagen Hidro" />
						<p class="fw-bold h6 pt-3 pb-3">REPRACIONES DE EQUIPOS <br />(TALLER)</p>
						<p>Todos los productos que conoces e intalas te hacen ganar más dinero y acumular puntos</p><br/>
						<a class="btn btn-md btn-outline-dark" href="#" rel="noreferrer">Conoce más</a>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="dereTar tarjetaProducto " data-aos="fade-down">
						<img src='<?=$base_url?>/resource/img/hidroa.png' width="50" alt="Imagen Hidro" />
						<p class="fw-bold h6 pt-3 pb-3">ASEGURADORA HIDRÁULICA</p>
						<p>Todos los productos que conoces e intalas te hacen ganar más dinero y acumular puntos</p><br/>
						<a class="btn btn-md btn-outline-dark" href="#" rel="noreferrer">Conoce más</a>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center pt-5 mt-2 pb-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
			<a href="#" class="btn btn-md btn-dark fw-bold animarBotonDescargar" rel="noreferrer">
				&nbsp;&nbsp;Descargar Hidrocompras&nbsp;&nbsp;
			</a>
		</div>
		<div class="fondoBeige" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
			<div class=" pt-5">
				<div  class="container centarContenido mt-4">
					<div class="barraCeleste2 text-black fw-bold text-center">
						<div class="espacioEntre2">CON HIDROCOMPRAS AHORRAS CON LAS MARCAS FAVORITAS</div>
					</div>
				</div>
			</div>
			<div class="container text-center pt-2 pb-5 mb-5" data-aos="fade-up" data-aos-anchor-placement="top-center">
				<p class="pt-3 pb-5 h5">Conoce todas las marcas que te ayudan a ganar más dinero, te reconocen y premian porque eres el protagonista que brinda las soluciones a tus clientes. </p>
				<div class="row" data-aos="flip-left">
					<div class="col-4 col-sm-2 p-4" data-aos="flip-left">
						<img src='<?=$base_url?>/resource/img/marca1.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
					<div class="col-4 col-sm-2 p-4" data-aos="flip-left">
						<img src='<?=$base_url?>/resource/img/marca2.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
					<div class="col-4 col-sm-2 p-4" data-aos="flip-left">
						<img src='<?=$base_url?>/resource/img/marca3.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
					<div class="col-4 col-sm-2 p-4" data-aos="flip-left">
						<img src='<?=$base_url?>/resource/img/marca4.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
					<div class="col-4 col-sm-2 p-4" data-aos="flip-left">
						<img src='<?=$base_url?>/resource/img/marca5.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
					<div class="col-4 col-sm-2 p-5" data-aos="flip-left">
						<img src='<?=$base_url?>/resource/img/marca6.png' class="img-fluid" alt="Imagen Hidro" />
					</div>
				</div>
			</div>
		</div>
		<div class="pt-5 mt-5">
			<div  class="container centarContenido mt-4">
				<div class="barraCeleste text-black fw-bold text-center">
					<div class="espacioEntre">HIDRO-PUNTOS</div>
				</div>
			</div>
		</div>
		<div class="container text-center mb-5 pb-5">
			<p class="mt-4 h5">Gana mas dinero usando Hidrocompras</p>
			<div class="row pt-2 mt-4">
				<div class="col-12 col-sm-6 pt-5 mt-5" data-aos="fade-down">
					<div class="modificarEspacio pb-5">
						<p class="h3">Por primera vez no solo ganas por instalar, ganas usando hidrocompras.</p>
						<p class="h5 pt-4 mb-5">Somos la primera App para Plomeros y Técnicos que quieren ganar más.</p>
						<a href="#" class="btn btn-md btn-dark " rel="noreferrer">&nbsp;&nbsp;&nbsp;&nbsp;Ver premios&nbsp;&nbsp;&nbsp;&nbsp;</a>
					</div>
				</div>
				<div class="col-12 col-sm-6" data-aos="fade-down">
					<img src='<?=$base_url?>/resource/img/phone.png' class="img-fluid" alt="Imagen Hidro"/>
				</div>
			</div>
		</div>
		<div class="fondoBeige" data-aos="fade-up">
			<div class="pt-5">
				<div  class="container centarContenido mt-4">
					<div class="barraCeleste text-black fw-bold text-center">
						<div class="espacioEntre">CON HIDROCOMPRAS TIENES....</div>
					</div>
				</div>
			</div>
			<div class="container pt-5 pb-5  mb-5" data-aos="fade-down">
				<div class="row mt-2 pt-3">
					<div class="col-12 col-md-3" data-aos="flip-up">
						<div class="tarjetaTiene">
							<p class="textoGrande fw-bold">+ DE 35 MARCAS</p>
							<p class="h5 pt-3  text-center">Para ganar dinero con Hidrocompras</p>
							<br />
							<p class="pb-3"></p>
						</div>
					</div>
					<div class="col-12 col-md-3" data-aos="flip-up">
						<div class="tarjetaTiene">
							<p class="textoGrande fw-bold">+ DE 2 MIL </p>
							<p class="h5 pt-3 text-center">Afiliados como tu estan ganando dinero con Hidrocompras</p>
							<p class="pb-4"></p>
						</div>
					</div>
					<div class="col-12 col-md-3">
						<div class="tarjetaTiene" data-aos="flip-up">
							<p class="textoGrande fw-bold">+ DE Q.1500.00</p>
							<p class="h5 pt-3 text-center">Como ingreso extra <strong>atendiendo</strong> / <strong>refiriendo</strong> tan solo 10 productos</p>
						</div>
					</div>
					<div class="col-12 col-md-3">
						<div class="tarjetaTiene" data-aos="flip-up">
							<p class="textoGrande fw-bold">+ DE 300 PRODUCTOS</p>
							<p class="h5 pt-3 text-center">Te ayudaran a incrementar tus ingresos</p><br />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-4" data-aos="fade-down">
			<div  class="container centarContenido mt-4">
				<div class="barraCeleste2 text-black fw-bold text-center">
					<div class="espacioEntre2">LO QUE NUESTROS AFILIADOS Y CLIENTES PIENSAN DE HIDROCOMPRAS</div>
				</div>
			</div>
		</div>
		<div class="container mt-4 pb-5">
			<div class="row pt-4 pb-2">
				<div class="col-12 col-md-4" data-aos="flip-up">
					<div class="disenoTarje text-center">
						<img src='<?=$base_url?>/resource/img/persona.png' width="140" alt="Imagen Hidro" />
						<p class="fw-bold h4">Olga Leticia Gómez Vignola - Cliente</p>
						<p class="p-2">Quedamos muy satisfechos con el trato inmediato y gentil, recibido por parte de ustedes; satisfechos ampliamemnte con el hidroneumático y el switch adquirido con ustedes para la bomba de la cisterna, agradecemos la entrega a domicilio y ha sido un gusto tratar con ustedes.<br />¡Muchas gracias!</p>
					</div>
				</div>
				<div class="col-12 col-md-4" data-aos="flip-up">
					<div class="disenoTarje text-center">
						<img src='<?=$base_url?>/resource/img/persona2.png' width="140" alt="Imagen Hidro"/>
						<p class="fw-bold h4">Gabriela Baeza - Alquifiestas DELUX</p>
						<p class="p-2">Recomiendo mucho a esta empresa, es super fácil realizar la compra en linea y te llevan el producto hasta tu casa, me ahorran gasolina y tiempo y me puedo dedicar a otras cosas mientras vienen, los recomiendo muy puntuales y cumplidos con lo que ofrecen.</p><br />
					</div>
				</div>
				<div class="col-12 col-md-4" data-aos="flip-up">
					<div class="disenoTarje  text-center">
						<img src='<?=$base_url?>/resource/img/persona3.png' width="140" alt="Imagen Hidro" />
						<p class="fw-bold h4">Axel Mayen - Tecnico Plomero Afiliado</p>
						<p class="p-2">Soy técnico - plomero domiciliar para el área de la capital e interior de Guatemala, desde hace tiempo estaba buscando la forma de incrementar mis ingresos, para mi sorpresa descubrí esta empresa llamada HIDROCOMPRAS.COM  </p><br />
						<a class="btn btn-sm continuarLeye" id="botonContinuar" data-bs-toggle="collapse" href="#masInfor" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="comportamiento()" >
							Continuar leyendo ... 
						</a>
						<div class="collapse" id="masInfor">
							<p> Con su plan LEALTAD me gano una comisión por cada venta que hago a través de ellos, lo único que tengo que hacer es referir la venta con ellos por teléfono o WhatsApp y me parece bastante interesante por que es bien sencillo de pedir lo que se le va a instalar al cliente, ellos lo entregan, lo facturan. Ni el cliente ni yo gastamos tiempo ni gasolina. Ahora que estoy vendiendo a través de ellos cada vez que mi cliente necesite el cambio de un calentador, purificador, tanque o bomba para agua o la reparación de la misma, no lo hago con otra empresa, lo hago con HIDROCOMPRAS.COM por que con ellos gano mas.</p>
						</div>
						<a class="btn btn-sm" id="botonOcultar" style="display: none" data-bs-toggle="collapse" href="#masInfor" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="ocultarTexto()">Ocultar</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container text-center pb-5 mb-4" data-aos="flip-down">
			<div class="cajaCir">
				<div class="cajaCirHijo">
					<div class="circulos"></div>
					<div class="circulos"></div>
					<div class="circulos"></div>
					<div class="circulos"></div>
					<div class="circulos"></div>
					<div class="circulos"></div>
					<div class="circulos"></div>
				</div>
			</div>
		</div>
		<div class="fondoBeige pt-2 pb-5 mb-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6" data-aos="flip-up">
						<div class="cajaWQue text-center">
							<br />
							<p class="h2 fw-bold text-center pt-3 mt-3">ÚNETE A LA COMUNIDAD DE PLOMEROS MÁS GRANDE DE GUATEMALA</p>
							<br/>
							<a class="btn btn-lg btn-dark animarBotonDescargar" rel="noreferrer">&nbsp;&nbsp;&nbsp;&nbsp;Registrarme ahora&nbsp;&nbsp;&nbsp;&nbsp;</a>
							<br />
							<div class="text-center" data-aos="flip-up">
								<img src='<?=$base_url?>/resource/img/celular3.png' height="300" alt="Imagen Hidro"/>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6" data-aos="flip-up">
						<div class="cajaWQue alinearTextoHidro">
							<img src='<?=$base_url?>/resource/img/celular2.png' class="img-fluid" alt="Imagen Hidro" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<a href="https://wa.me/50230656786?text=Hola,%20le%20comento%20que%20me%20interesó%20el%20producto%20:%20" class="float" target="_blank" rel="noreferrer">
		<i class="fa-brands fa-whatsapp my-float"></i>
	</a>
	<footer>
		<?php $this->load->view('layout/footer'); ?>
	</footer>
	<script type="text/javascript">

		function comportamiento(){
			document.getElementById('masInfor').style.display='block';
			document.getElementById('botonContinuar').style.display='none';
			document.getElementById('botonOcultar').style.display='block';
		}

		function ocultarTexto(){
			document.getElementById('botonContinuar').style.display='block';
			document.getElementById('botonContinuar').style.paddingTop='5px';
			document.getElementById('botonContinuar').style.paddingBottom='17px';
			document.getElementById('masInfor').style.display='none';
			document.getElementById('botonOcultar').style.display='none';
		}
	</script>
	<script>
		AOS.init();
	</script>
</body>
</html>