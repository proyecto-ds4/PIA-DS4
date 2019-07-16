<?php
//echo "<script> function checkAGE(){ if (!confirm('¿Desea eliminar este expediente?, presione ACEPTAR, si no presione CANCELAR')) history.go(-1); window.location.href='index.php'; } document.writeln(checkAGE()) </script> ";

include "conex.php";
$link   = conectarse();

$expediente = $_REQUEST['id'];
$sql = "Select * from historial where expediente = '$expediente'";
$resul = mysqli_query($link, $sql);
?>
<html class="fixed">
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
        <div class="modal-dialog">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Historial del Paciente</h4></center>
                </div>
							<div class="table-responsive" style="
    margin-left: -80;
    width: 757px;
">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>No. de Expediente</th>
												<th>Tipo</th>
												<th>Fecha</th>
												<th>Tipo de Cambio</th>
												<th>Descripcion</th>
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
													<td><span id="id<?php echo $fila['expediente']; ?>"><?php echo $fila['expediente']; ?></span></td>
													<td><span id="tipo<?php echo $fila['expediente']; ?>"><?php echo $fila['tipo']; ?></span></td>
													<td><span id="fecha<?php echo $fila['expediente']; ?>"><?php echo $fila['fecha']; ?></span></td>
													<td><span id="tipoCambio<?php echo $fila['expediente']; ?>"><?php echo $fila['tipoCambio']; ?></span></td>
													<td><span id="descripcion<?php echo $fila['expediente']; ?>"><?php echo $fila['descripcion']; ?></span></td>
													
													
												</tr>
											<?php
												}
											?>
										</tbody>
									</table>
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
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Examples -->
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
		
		<?php include('modal.php'); ?>
		<script src="custom.js"></script>
		<script src="pacientes.js"></script>

</html>

