<?php
//echo "<script> function checkAGE(){ if (!confirm('¿Desea eliminar este expediente?, presione ACEPTAR, si no presione CANCELAR')) history.go(-1); window.location.href='index.php'; } document.writeln(checkAGE()) </script> ";

include "conex.php";
$link   = conectarse();

$nombrePaciente = $_REQUEST['id'];
$sql = "UPDATE prueba SET nombre='Inactivo' where id='$nombrePaciente'";
mysqli_query($link, $sql);
echo "<script> alert('Salida exitosa'); window.location.href='index.php';</script> ";

?>