<?php
	$res="";
	if ($_POST['opc'] = "registrar"){
		//if($_POST['registrar'] && $_POST['registrar'] != 0){
		//	$status=$_POST['status'];
		//}
		$status = $_POST['status'];
		$desc = $_POST['descripcion'];
		echo inup(1,0,$status,$desc);
	}

	function inup($opcion,$numhab,$status,$desc){
		$usuario="root";
		$password="";
		$conexion= new mysqli("localhost", "root", "", "urgencias");

		if(mysqli_connect_errno()){
			printf("Error de conexión: %s\n", mysqli_connect_errno());
			exit();
		}
		try
		{
			$stmt = $conexion->prepare("CALL SP_CRUD_HABITACIONES(?,?,?,?, @res)");
			mysqli_stmt_bind_param($stmt, 'iiss', $opcion, $numhab, $status, $desc);
			mysqli_stmt_execute($stmt); //se ejecuta el "crud"

			$stmt->bind_result($msg, $res); 

			while ($stmt->fetch()) {
				//printf("%s ,%s\n", $numhab, $status, $desc);
			}

			mysqli_stmt_close($stmt);

			$respuesta = $res." ".$msg;

			return $respuesta;
		}

		catch(mysqli_sql_exception $e){
			echo "Error: " .$e.getMessage();
		}
	}
?>