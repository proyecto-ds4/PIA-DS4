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
		 	require_once("assets/php/habitaciones.php");
		?>
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
									<li class="nav-active">
										<a href="habitaciones.php">
											<i class="fa fa-hospital-o" aria-hidden="true"></i>
											<span>Habitaciones</span>
										</a>
									</li>
									<li>
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
						<h2>Habitaciones</h2>
					</header>

					<!-- start: page -->			
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
								<h2 class="panel-title">Habitaciones</h2>
							</header>
								<!----Div para alinear todos --->
								<div class="col-md-12">
							<!--Modal de "Agregar habitacion"--->
							<div class="panel-body">
								<form id="form" method="POST" class="form-horizontal mb-lg" >
									<a class="modal-with-form btn btn-primary" href="#HabForm">Añadir Habitación</a> 
									<a class="modal-with-form btn btn-success edit" href="#FormUP">Modificar Habitación</a> 
									<a class="modal-with-form btn btn-danger" href="#FormDEL">Eliminar Habitación</a> 
								</form>
							<div class="col-md-3">
										
										<!-- Modal Form -->
											<div id="HabForm" class="modal-block modal-block-primary mfp-hide">

												<section class="panel">

													<header class="panel-heading">
														<h2 class="panel-title">Nueva habitación</h2>
													</header>

													<div class="panel-body">

														<form id="formulario" method="POST" class="form-horizontal mb-lg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

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
																<button type="submit" name="registrar" value= 'registrar' class="btn btn-primary" >Agregar</button>
																<button class="btn btn-default modal-dismiss">Cancelar</button>
																<span><?php echo $res; ?></span>
															</div>
														</form>
													</div>
												</section>
											</div>

										</div>

										<!---Modal de "Actualizar" habitacion---->

							<div class="panel-body" >
	
							<div class="col-md-3">
										<!-- Modal Form -->
											<div id="FormUP" class="modal-block modal-block-primary mfp-hide">

												<section class="panel">

													<header class="panel-heading">
														<h2 class="panel-title">Modificar Habitación</h2>
													</header>

													<div class="panel-body">

														<form id="formulario" method="POST" class="form-horizontal mb-lg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

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
																<button type="submit" name="actualizar" value= 'actualizar' class="btn btn-success edit" >Modificar</button>
																<button class="btn btn-default modal-dismiss">Cancelar</button>
																<span><?php echo $res; ?></span>
															</div>
														</form>
													</div>
												</section>
											</div>

										</div>

										<!--Modal de "Eliminar" habitacion--->

							<div class="panel-body">
	
							<div class="col-md-3">
										<!-- Modal Form -->
											<div id="FormDEL" class="modal-block modal-block-primary mfp-hide">

												<section class="panel">

													<header class="panel-heading">
														<h2 class="panel-title">Eliminar Habitación</h2>
													</header>

													<div class="panel-body">

														<form id="formulario" method="POST" class="form-horizontal mb-lg" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

															<div class="form-group mt-lg">
																<label class="col-sm-3 control-label">No. de Habitación</label>
																<div class="col-sm-9">
																	<input type="text" id="numhab" name="numhab" placeholder="Habitación" class="form-control" required/>
																</div>
															</div>
																<button type="submit" name="eliminar" value= 'eliminar' class="btn btn-danger" >Eliminar</button>
																<button class="btn btn-default modal-dismiss">Cancelar</button>
																<span><?php echo $res; ?></span>
														</form>
													</div>
												</section>
											</div>

							</div>
							</div>

										<!---Grid de habitaciones-->
										<div class="table-responsive">
										<table id="TbHab" class="table table-bordered table-striped table-condensed mb-none" >
											
										<thead>
											<tr>
												<th>Habitacion</th>
												<th>Status</th>
												<th>Descripción</th>
											</tr>
										</thead>
										<tbody>
										<?php 
											cargartb();
										?>
										</tbody>
										</table>
								        </div>
								<div class="panel-body">
									<div class="col-md-3" style="position:15px; margin-left:15px;">
										<div class="table-responsive">
											<table class="table table-bordered table-striped table-condensed mb-none">
												<tbody>
													<tr>
														<td style="background-color:RGBA(125,231,58,0.5);">Verde</td>
														<td>Disponible</td>
													</tr>
													<tr>
														<td style="background-color:RGBA(231,58,67,0.5);">Rojo</td>
														<td>Ocupada</td>
													</tr>
													<tr>
														<td style="background-color:RGBA(231,223,58,0.48);">Amarillo</td>
														<td>Sucia</td>
													</tr>
												</tbody>
											</table>
										</div> 
									</div>
								</div>
								</div>
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

	</body>
</html>