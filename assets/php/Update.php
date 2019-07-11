<?php
include "conex.php";
$link = conectarse();

//$numExpediente = mysqli_real_escape_string($link, $_POST['numExpedienteu']);
$nombrePaciente = mysqli_real_escape_string($link, $_POST['nombrePacienteu']);
//$apellidoPaterno = mysqli_real_escape_string($link, $_POST['apellidoPaternou']);
//$apellidoMaterno = mysqli_real_escape_string($link, $_POST['apellidoMaternou']);
$diagnostico = mysqli_real_escape_string($link, $_POST['diagnosticou']);
//$numHabitacion = mysqli_real_escape_string($link, $_POST['numHabitacionu']);
$rdoEstado = mysqli_real_escape_string($link, $_POST['rdoEstadou']);

$sql = "UPDATE prueba SET nombre='$nombrePaciente', direccion='$diagnostico', email='$rdoEstado' WHERE nombre='$nombrePaciente'";

if (isset($_POST['guardar'])) {
	mysqli_query($link, $sql);
    echo "<script> alert('Expediente actualizado con éxito'); window.location.href='index.php';</script> ";
    //header("Location:index.php");
} else {
    echo ("Presiona el boton guardar");
}
?>