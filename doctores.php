<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Urgencias PHP</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
	<?php require_once("assets/php/medicos.php");?>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Nombre de Usuario</span>
								<span class="role">Usuario</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							MenĂº
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="expedientes.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Expedientes</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="doctores.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Medicos</span>
										</a>
									</li>
									<li>
										<a href="habitaciones.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Habitaciones</span>
										</a>
									</li>
									<li>
										<a href="usuarios.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Usuarios</span>
										</a>
									</li>
									
								</ul>
							</nav>
				
							<hr class="separator" />
				
							
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Medicos</h2>
					</header>

					<!-- start: page -->
					
										
										
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
								<h2 class="panel-title">Adiministra los medicos</h2>
							</header>
							
							
							<form id="formulario-registro" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
							<div class="panel-body">
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">No. de Cedula</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" name="cedula">
										<span class="help-block">Capture la cedula del medico.</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Nombre</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" name="nombre">
										<span class="help-block">Capture el nombre del medico.</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Apellidos</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" name="apellidos">
										<span class="help-block">Capture los apellidos del medico.</span>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault" name="direccion">Direccion</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" name="apellidos">
										<span class="help-block">Capture la direccion del medico.</span>
									</div>
								</div>
							
								<div class="form-group">
									<label class="col-md-3 control-label" for="inputDefault">Telefono</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="inputDefault" name="telefono">
										<span class="help-block">Capture el telefono del medico.</span>
									</div>
								</div>
								<div class="col-md-12">
								<div class="col-md-3">
										<button id="btnRegistrar" type="submit" name="btnRegistrar" value= 'registrar' class="btn btn-primary" onclick="registrar()">Registrar</button>
									</div>							
									<div class="col-md-3">
										<input type="submit" name="btnModificarMed" value="Modificar" id="btnModificarMed" class="btn btn-primary">
									</div>
									<div class="col-md-3">
										<input type="submit" name="btnEliminarMed" value="Eliminar" id="btnEliminarMed" class="btn btn-primary">
										
									</div>
									
									<div class="col-md-3">
										<input type="submit" name="btnBuscarMed" value="Buscar" id="btnBuscarMed" class="btn btn-primary">
									</div>
									
                                </div>
							</div>
							</form>
						</section>	
						<!-- end: page -->
				</section>
			</div>

		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		
		<script src="assets/javascripts/theme.init.js"></script>

		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>



		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>



		<script src="assets/javascripts/habitaciones.js">></script>

	</body>
</html>