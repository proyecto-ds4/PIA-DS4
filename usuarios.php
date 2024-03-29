
<!doctype html>
<html class="fixed">
	<head>
	     
		<script src="assets/javascripts/user.js"></script>
	    
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
	<?php
		require_once("assets/php/user.php");
	?>
	<form method="post" action="assets/php/user.php">
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
							Menú
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
										<a href="index.php">
											<i class="fa fa-ambulance" aria-hidden="true"></i>
											<span>Expedientes</span>
										</a>
									</li>
									<li>
										<a href="medicos.php">
											<i class="fa fa-user-md" aria-hidden="true"></i>
											<span>Medicos</span>
										</a>
									</li>
									<li>
										<a href="habitaciones.php">
											<i class="fa fa-hospital-o" aria-hidden="true"></i>
											<span>Habitaciones</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="usuarios.php">
											<i class="fa fa-users" aria-hidden="true"></i>
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
						<h2>Usuarios</h2>
					</header>

					<!-- start: page -->
					
										
										
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
								<h2 class="panel-title">Adiministra los usuarios</h2>
							</header>
							
						
							<div class="panel-body">
							<form method="post" action="<?php echo htmlspecialchars($_REQUEST['PHP_SELF']);?>">
								<div class = "row">
									<div class="col-md-3">
										<?php cargaruser(); ?>
									</div>
							</form>
							
									<div class="col-md-9">
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Nombre</label>
											<div class="col-md-6">
												<input type="text" id= "name" class="form-control" id="inputDefault" name="name" >
												<span class="help-block">Capture el nombre de usuario.</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Contraseña</label>
											<div class="col-md-6">
												<input type="password" id="pass" class="form-control" id="inputDefault" name="pass" >
												<span class="help-block">Capture la contraseña del usuario.</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Confirme contraseña</label>
											<div class="col-md-6">
												<input type="password" class="form-control" id="inputDefault" name="pass2" >
												<span class="help-block">Confirme la contraseña capturada.</span>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Fecha de Creacion</label>
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" id="date" data-plugin-datepicker="" class="form-control" name="date" >
												</div>		
												<span class="help-block">Capture la fecha de alta.</span>
											</div>
										</div>	
									</div>
									
								</div>
									
								<div class = "row">
									<div class="col-md-12">
										<div class="col-md-3">
											<input type="submit" name="btnBuscarUser" value="Buscar" id="btnBuscarUser" class="btn btn-primary">
										</div>
										<div class="col-md-3">
											<input type="submit" name="btnAgregarUser" value="Guardar" id="btnAgregarUser" class="btn btn-primary" onclick="this.form.submit">
										</div>
										<div class="col-md-3">
											<input type="submit" name="btnModificarUser" value="Modificar" id="btnModificarUser" class="btn btn-primary">
										</div>
										<div class="col-md-3">
											<input type="submit" name="btnBorrarUser" value="Eliminar" id="btnBorrarUser" class="btn btn-primary">
											
										</div>
									</div>
								</div>
							</div>
						
						
						</section>	
						<!-- end: page -->
				</section>
			</div>

		</section>
	</form>
	<div class="col-md-3">

										</div>
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
		
	</body>
</html>