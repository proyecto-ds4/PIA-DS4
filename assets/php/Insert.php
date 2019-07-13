<?php
include "conex.php";
$link = conectarse();

$numExpediente = mysqli_real_escape_string($link, $_POST['numExpediente']);
$nombrePaciente = mysqli_real_escape_string($link, $_POST['nombrePaciente']);
$apellidoPaterno = mysqli_real_escape_string($link, $_POST['apellidoPaterno']);
$apellidoMaterno = mysqli_real_escape_string($link, $_POST['apellidoMaterno']);
$diagnostico = mysqli_real_escape_string($link, $_POST['diagnostico']);
$numHabitacion = mysqli_real_escape_string($link, $_POST['numHabitacion']);
$rdoEstado = mysqli_real_escape_string($link, $_POST['rdoEstado']);

$sql = "INSERT INTO prueba (nombre, direccion, email) VALUES ('$nombrePaciente', '$diagnostico', '$rdoEstado')";

if (isset($_POST['guardar'])) {
	mysqli_query($link, $sql);
    echo "<script> alert('Paciente registrado con éxito'); window.location.href='index.php';</script> ";
    //header("Location:index.php");
} else {
    echo ("Presiona el boton guardar");
}
?>