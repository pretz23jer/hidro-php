<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<nav class="navbar navbar-expand navbar-light bg-light" >
	<div class="container">
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav me-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" onmouseover="activar()" id="listaMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false" rel="noreferrer">
						<i class="fa fa-bars fa-2x"></i>
					</a>
					<ul class="dropdown-menu format" id="ulEstilizar" aria-labelledby="listaMenu">
						<div>
							<li>
								<a class="espaciarMenu" href="<?=$base_url?>app/coins" > Hidro Coins</a>
							</li>
							<li>
								<a class="espaciarMenu" href="<?=$base_url?>app/puntos" >Puntos</a>
							</li>
							<li>
								<a class="espaciarMenu" href="https://play.google.com/store/apps/" target="_blank"  rel="noopener noreferrer">Descarga la APP</a>
							</li>
							<li>
								<a class="espaciarMenu" href="<?=$base_url?>app/actualizar" >Actualizar Datos</a>
							</li>
							<li>
								<a class="espaciarMenu" href="<?=$base_url?>app/empresa" >Hidro para Empresas</a>
							</li>
						</div>
					</ul>
				</li>
				<li class="nav-item">
					<div class="d-flex separarLogo">
						<a class='navbar-brand' href="<?=$base_url?>" ><img src='<?=$base_url?>resource/img/hidroa.png' width='50' alt="Imagen Hidro" /></a>
					</div>
				</li>
				
			</ul>
			<div class="d-flex">
				<div class="d-flex justify-content-end">
					<div class="p-1">
						<a href="#" class="btn btn-md btn-outline-dark textTamanio" rel="noreferrer">Inciar sesión</a>
					</div>
					<div class="p-1 botoneRegistro">
						<a href="#" class="btn btn-md btn-info" rel="noreferrer">Registrarme</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</nav>

<script type="text/javascript">
function activar(){
    document.getElementById('listaMenu').className = 'nav-link show';
    document.getElementById('listaMenu').setAttribute("aria-expanded", "true");
    document.getElementById('ulEstilizar').className = 'dropdown-menu format show';
    document.getElementById('ulEstilizar').setAttribute("data-bs-popper", "static");
 }
</script>