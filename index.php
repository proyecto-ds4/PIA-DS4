<?php
include "conex.php";
$link  = conectarse();
$sql = "select * from prueba";
$resul = mysqli_query($link, $sql);
?>

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

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
		
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
				if(isset($_GET['aksi']) == 'delete'){
					// escaping, additionally removing everything that could be (html/javascript-) code
					$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
					$cek = mysqli_query($con, "SELECT * FROM empleados WHERE codigo='$nik'");
					if(mysqli_num_rows($cek) == 0){
						echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
					}else{
						$delete = mysqli_query($con, "DELETE FROM empleados WHERE codigo='$nik'");
						if($delete){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
						}
					}
				}
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
									<li class="nav-active">
										<a href="expedientes.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Expedientes</span>
										</a>
									</li>
									<li>
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
						<h2>Menú Principal</h2>
					</header>

					<!-- start: page -->
					
										
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
								</div>
						
								<h2 class="panel-title">Expedientes</h2>
							</header>
							
							
						
							<div class="panel-body">
							
								<div class="form-group">
									<form id="demo-form" action="bus.php" method="post" novalidate="novalidate">
										<label class="col-md-3 control-label">Busqueda de Expediente</label>
										<div class="col-md-3">
											<input type="text" id="txtBuscarExpediente" name="nombrePacienteb" class="form-control" required>
											<span class="help-block">Seleccione un filtro e ingrese un dato para realizar la busqueda.</span>
										</div>
										<div class="col-md-2">
										</div>
										<div class="col-md-3 form-group">
											<input type="submit" name="btnBuscarExpediente" value="Buscar Expediente" id="btnBuscarExpediente" class="btn btn-primary"> 
										</div>
										<div class="col-md-2">
										</div>
										<div class="col-md-3 form-group">
										<a class="modal-with-form btn btn-primary" href="#modalForm" style="padding-left: 21px; padding-right: 22px;">Añadir Paciente</a> 
										</div>
									</form>
									
									<!-- Modal Form -->
											<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
												<section class="panel">
													<header class="panel-heading">
														<h2 class="panel-title">Nuevo Paciente</h2>
													</header>
													<div class="panel-body">
														<form class="form-horizontal mb-lg" novalidate="novalidate" action="Insert.php" id="formulario" method="POST" name="formulario">
															<div class="form-group mt-lg">
																<label class="col-sm-3 control-label">No. de Expediente</label>
																<div class="col-sm-9">
																	<input type="text" name="numExpediente" class="form-control" required/>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Nombres(s)</label>
																<div class="col-sm-9">
																	<input type="text" name="nombrePaciente" class="form-control" placeholder="Ingresa el nombre" required/>
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Apellido Paterno</label>
																<div class="col-sm-9">
																	<input type="text" name="apellidoPaterno" class="form-control" placeholder="Ingresa apellido paterno" />
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Apellido Materno</label>
																<div class="col-sm-9">
																	<input type="text" name="apellidoMaterno" class="form-control" placeholder="Ingresa apellido materno" />
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Diagnostico</label>
																<div class="col-sm-9">
																	<input type="text" name="diagnostico" class="form-control" placeholder="Ingresa el diagnostico del paciente" />
																</div>
															</div>
															<div class="form-group">
																<label class="col-sm-3 control-label">Habitacion</label>
																<div class="col-sm-9">
																	<select class="form-control mb-md" name = "numHabitacion">
																		<option>204</option>
																		<option>205</option>
																		<option>206</option>
																	</select>
																</div>
															</div>
															
															<div class="form-group">
																<label class="col-sm-3 control-label">Estado</label>
								
																<div class="col-sm-9">
								
																	<div class="radio-custom radio-primary">
																		<input type="radio" id="radioExample2" name="rdoEstado" value="Sin Riesgo">
																		<label for="radioExample2">Sin Riesgo</label>
																	</div>
								
																	<div class="radio-custom radio-success">
																		<input type="radio" id="radioExample3" name="rdoEstado" value="Bajo Riesgo">
																		<label for="radioExample3">Bajo Riesgo</label>
																	</div>
								
																	<div class="radio-custom radio-warning">
																		<input type="radio" id="radioExample4" name="rdoEstado" value="Mediano Riesgo">
																		<label for="radioExample4">Mediano Riesgo</label>
																	</div>
								
																	<div class="radio-custom radio-danger">
																		<input type="radio" id="radioExample5" name="rdoEstado" value="Alto Riesgo">
																		<label for="radioExample5">Alto Riesgo</label>
																	</div>
																</div>
															</div>
																</div>
																<footer class="panel-footer">
																	<div class="row">
																		<div class="col-md-12 text-right">
																			<input class="btn btn-primary " id="enviar" name="guardar" type="submit" value="Dar de Alta"/>
														</form>
															
														
																<button class="btn btn-default modal-dismiss">Cancelar</button>
															</div>
														</div>
													</footer>
												</section>
											</div>
											
										
								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>No. de Expediente</th>
												<th>Nombre(s)</th>
												<th>Diagnostico</th>
												<th>Estado</th>
												<th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											<?php
												while ($fila = mysqli_fetch_array($resul)) {
											?>
												<tr>
													<!--<td>' . $fila['id'] . '</td>       -->
													<!--<td>' . $fila['nombre'] . '</td>   -->
													<!--<td>' . $fila['direccion'] . '</td>-->
													<!--<td>' . $fila['email'] . '</td>    -->
													<td><span id="id<?php echo $fila['id']; ?>"><?php echo $fila['id']; ?></span></td>
													<td><span id="nombre<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></span></td>
													<td><span id="direccion<?php echo $fila['id']; ?>"><?php echo $fila['direccion']; ?></span></td>
													<td><span id="email<?php echo $fila['id']; ?>"><?php echo $fila['email']; ?></span></td>
													<td>
														<a class="btn btn-info" href="delete.php?id=<?php echo $fila['id']; ?>">Salida de Paciente</a>
														
														<button type="button" class="btn btn-success edit" value="<?php echo $fila['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Actualizar Datos</button>
													</td>
												</tr>
											<?php
												}
											?>
										</tbody>
									</table>
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
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Examples -->
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
		
		<?php include('modal.php'); ?>
		<script src="custom.js"></script>

	</body>
</html>