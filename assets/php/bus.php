<?php
include "conex.php";
$link   = conectarse();

$nombrePaciente = mysqli_real_escape_string($link, $_POST['nombrePacienteb']);
$sql = "select * from prueba where nombre='$nombrePaciente'";

if (isset($_POST['btnBuscarExpediente'])) {
	$busqueda = mysqli_query($link, $sql);
}
else
{
	echo ("Presiona el boton Buscar Paciente");
}
?>
