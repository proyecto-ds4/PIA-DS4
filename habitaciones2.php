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
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css"/>
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css"/>

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>



	</head>
	<body>
		<?php 
		 	//require_once("assets/php/habitaciones2.php");
		?>

	<header class="panel-heading">
		<h2 class="panel-title">Nueva habitación</h2>
	</header>

	<div class="panel-body">
		<div class="form-horizontal mb-lg">
			<div class="form-group mt-lg">
				<label class="col-sm-3 control-label">No. de Habitación</label>
				<div class="col-sm-9">
					<input type="text" id="numhab" name="numhab" placeholder="Habitación" class="form-control" required/>
					</div>
						</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Descripción</label>
									<div class="col-sm-9">
										<input type="text" id="desc" name="desc" class="form-control" placeholder="Descripción" required/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status</label>
								<div class="col-sm-9">
										<select id="status" name="status" class="form-control mb-md">
											<option value="0">Seleccione un status</option>
											<option value="D">Disponible</option>
											<option value="O">Ocupado</option>
											<option value="S">Sucio</option>
										</select>	
								</div>
								<button id="btnRegistrar" type="submit" name="registrar" value= 'registrar' class="btn btn-primary" onclick="registrar()">Agregar</button>
							</div>
		</div>
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
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>

		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>

		<script src="assets/javascripts/habitaciones.js">></script>

	</body>
</html>