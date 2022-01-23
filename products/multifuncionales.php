<?php
// PHP code to establish connection
// with the localserver

// Username is root
$user = 'superMHLE';
$password = 'admin12345';
  
// Database name is gfg
$database = 'dbMHLE'; 
  
// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM contenido";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!doctype html>
<!--MIGUEL-->
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#65c340">
		<title>MHLE - EcoTecnologías y Servicios Integrados</title>
		<link href="../media/icons/logo_w.png" rel="icon" data-n-head="true" type="image/x-icon">
		<!-- Redirigir busquedas a una pagina web principal -->
		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-top-fixed/">
		<!-- Bootstrap core CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"-->
		<!-- Estilos CSS -->
		<link href="../styles/styles.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
		<!-- Scripts JavaScript -->
		<script src="../scripts/script_1.js"></script>
		<!--meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="-1" /-->
		<!-- Font Awesome -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	</head>
	<!--==============================================================================================================================-->
	<body class="justify-content-center">
		<!-- ==== Navbar ==== -->
		<nav class="navbar navbar-expand-xl fixed-top justify-content-center shadow-lg" style="padding: 0%;">
			<div class="container text-center text-white justify-content-center p-2 px-5">
				<button class="navbar-toggler navbar-toggler-right btn-outline-success" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" data-target="#menu" data-toggle="collapse" type="button">
            		<svg focusable="false" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">
                		<path d="M4 7h22M4 15h22M4 23h22" stroke="rgb(102, 195, 64)" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"></path>
            		</svg>
        		</button>
				<!--Logo Empresa-->
				<a href="https:\\www.mhle.com.mx" class="navbar-brand col col-lg-4 text-lg-left text-center pl-0 logo mx-5" style="padding: 0px;">
					<img src="../media/icons/logo_completo_navbar.png">
				</a>
				<div class="col-lg-8 collapse navbar-collapse justify-content-center" id="menu">
					<ul class="navbar-nav mx-auto">
						<!--div class="dropdown px-2">
							<a href="#" class="nav-link dropdown-toggle" id="products" aria-expanded="false" aria-haspopup="true"
								data-toggle="dropdown" style="color: rgba(102, 195, 64);">Productos</a>
							<ul class="dropdown-menu" aria-labelledby="products">
								<li><a href="products/paneles.html" class="dropdown-item nav-link" style="color: rgba(102, 195, 64);">Paneles Solares</a></li>
								<li><a href="products/calentadores.html" class="dropdown-item nav-link" style="color: rgba(102, 195, 64);">Calentadores Solares</a></li>
								<li><a href="products/copiadoras.html" class="dropdown-item nav-link" style="color: rgba(102, 195, 64);">Fotocopiadoras</a></li>
								<li><a href="products/camaras.html" class="dropdown-item nav-link" style="color: rgba(102, 195, 64);">Cámaras de Seguridad</a></li>
							</ul>
						</div-->
					<!--
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown">Industries</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="drop1">
							<a href="#" class="dropdown-item nav-link">Agriculture</a>
							<a href="#" class="dropdown-item nav-link">Building Automations and Construction</a>
							<a href="#" class="dropdown-item nav-link">STEM</a>
							<a href="#" class="dropdown-item nav-link">Healthcare</a>
							<a href="#" class="dropdown-item nav-link">Home Automation</a>
							<a href="#" class="dropdown-item nav-link">Manufacturing</a>
							<a href="#" class="dropdown-item nav-link">Smart Cities</a>
						</div>
					-->
						<li class="nav-item px-2">
							<a href="#" class="nav-link" style="color: rgba(102, 195, 64);">Nosotros</a>
						<li class="nav-item pe-5 px-2">
								<a href="../index.html#contacto" class="nav-link rounded d-inline-block" style="color: white; background-color: rgba(102, 195, 64);">Contacto</a>
							<!--button type="button" class="btn" style="background-color: ;"-->
						<li class="nav-item navbar-right">
							<a href="https://www.facebook.com/MHLE.EcoTecnologias/" target="_blank"><img src="../media/icons/icono_facebook.png"></a>
							<a href="https://www.instagram.com/ecotecnologiasyservi.7/" target="_blank"><img src="../media/icons/icono_instagram.png"></a>
							<a href="#"><img src="../media/icons/icono_whatsapp.png"></a>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ==== END Navbar ==== -->
		<!--div class="divider"></div-->
		<!-- ==== CONTENIDO ==== -->
		<div class="col-7 py-5 mx-auto">
			<h1>Multifuncionales</h1>
			<div class="row">
				<div class="col-2">
				</div>
				<div class="col-10">
					<?php
						while($rows = $result->fetch_assoc()) {
					?>
					<!-- Tarjeta de BÚSQUEDA -->
					<div class="searchContainer list-group p-3">
						<div class="row">
							<div class="col-3">
								<img class="mt-2" src="../media/images/productos/<?php $rows['image'] ?>">
							</div>
							<div class="col-9">
								<div id="nBusqueda" class="fs-3">
									<?php echo $rows['nombre']; ?>
								</div>
								<div class="ms-3">
									<ul class="">
										<!--li>Tecnología de Impresión:</li>
										<li>Páginas por minuto:</li>
										<li>Resolución Máxima:</li>
										<li>Panel LCD:</li>
										<li>Tamaño de Papel:</li-->
										<?php echo $rows['info1']; ?>
									</ul>
								</div>
								<div class="text-end me-5">
									<button class="btn btn-success">Ver Producto</button>
								</div>
							</div>
						</div>
					</div>
					<!-- END Tarjeta de BÚSQUEDA -->
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<!-- ==== END CONTENIDO ==== -->
		<!--div class="divider"></div-->
		<!-- ==== Footer ==== -->
		<footer class="text-start text-muted sectionPDP" style="background-color: rgba( 0, 0, 0, 0.05);">
			<!-- Section: Social media -->
			<!--section class="d-flex justify-content-center justify-content-lg-between p-1 border-bottom mx-4" >
				<div class="m-2 d-none d-lg-block">
					<span>Contacta con nosotros a traves de nuestras redes:</span>
				</div>
				<div class="m-2">
					<a href="" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
					<a href="" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
					<a href="" class="me-4 text-reset"><i class="fab fa-google"></i></a>
					<a href="" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
					<a href="" class="me-4 text-reset"><i class="fab fa-linkedin"></i></a>
					<a href="" class="me-4 text-reset"><i class="fab fa-github"></i></a>
				</div>
			</section-->
			<!-- Section: Links -->
			<section class="">
				<div class="container-sm text-start p-4 align-content-center">
					<div class="row mt-3 align-content-center mx-auto">
						<!--div class="col-md-2 col-lg-4 col-xl-3 mx-auto mb-4"-->
						<div class="col-12 col-md-5 col-xl-3 mx-auto mb-4">
							<!-- Content -->
							<h6 class="text-uppercase fw-bold">
								<!--i class="fas fa-gem me-3"></i>MHLE - Eco-Tecnologías y Soluciones Integrados-->
								<img src="../media/icons/logo_completo_navbar.png" width="250px">
							</h6>
							<p>
								MHLE, es una empresa familiar nayarita . Buscamos entrar al mercado
								de energías limpias y proveer servicios de soporte técnico especializado.
							</p>
						</div>
						<!--div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"-->
						<div class="col-12 col-md-5 col-lg-2 col-xl-2 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">
								Productos
							</h6>
							<p>
								<button href="#!" class="btn btn-light text-start" disabled>Multifuncionales</button>
							</p>
							<p>
								<button class="btn btn-light text-start" disabled>Paneles Solares</button>
							</p>
							<p>
								<button href="#!" class="btn btn-light text-start" disabled>Calentadores Solares</button>
							</p>
							<p>
								<button href="#!" class="btn btn-light text-start" disabled>Cámaras de Seguridad</button>
							</p>
							<p>
								<button href="#!" class="btn btn-light text-start" disabled>Consumibles</button>
							</p>
						</div>
						<!--div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4"-->
						<div class="col-12 col-md-5 col-lg-2 col-xl-2 mx-auto mb-4">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">
								Links
							</h6>
							<p>
								<!--a href="#!" class="text-reset">Cotizaciones</a-->
							</p>
							<!--p>
								<a href="#!" class="text-reset">Settings</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Orders</a>
							</p>
							<p>
								<a href="#!" class="text-reset">Help</a>
							</p-->
						</div>
						<!--div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4"-->
						<div class="col-12 col-md-5 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 mx-auto">
							<!-- Links -->
							<h6 class="text-uppercase fw-bold mb-4">
								Contact
							</h6>
								<div class="row mb-3">
									<div class="col-1 justify-content-center">
										<i class="fas fa-home me-3"></i>
									</div>
									<div class="col-11">
										<p class="text-start">Adrián Pulido #2, Loc. Emiliano Zapata. Xalisco Nayarit</p>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-1 justify-content-center">
										<i class="fas fa-envelope me-3"></i>
									</div>
									<div class="col-11">
										<p class="text-start d-none d-lg-block d-xl-none">mhle.ecotecnologias @gmail.com</p>
										<p class="text-start d-lg-none d-xl-block">mhle.ecotecnologias@gmail.com</p>
									</div>
								</div>
								<div class="row">
									<div class="col-1">
										<i class="fas fa-phone me-3"></i>
									</div>
									<div class="col-11">
										<p class="text-start lhl-1">311-141-7289</p>
										<p class="text-start">384-126-2160</p>
										<p class="text-start">311-266-0567</p>
									</div>
								</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- Copyright -->
			<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
				© 2022 Copyright:
				<a class="text-reset fw-bold" href="https://mhle.com.mx/">mhle.com.mx</a>
			</div>
		</footer>
		<!-- ==== END Footer ==== -->
		<!-- ==== Bootstrap core JavaScript ==== -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<!--script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script-->
		<script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
		<!--script src="../../assets/js/vendor/holder.min.js"></script-->
		<!---->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>