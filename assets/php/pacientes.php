<?php

	if ($_POST['opc'] == "registrar"){
		$expediente = $_POST['expediente'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$direccion = $_POST['direccion'];
		$status = $_POST['estado'];
		$fecNac = $_POST['fechaN'];
		$fecNac = date_format(date_create_from_format('m/d/Y', $fecNac), 'Ymd');
		$today = date("Ymd"); 
		$tel = $_POST['telefono'];
		$numHab = $_POST['habitacion'];
		$diag = $_POST['diagnostico'];
		$med = $_POST['medico'];
		echo insertarPaciente(1,$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$today,$tel,$numHab,$diag,$med);
		echo historial($expediente,"Alta",$today,"Nuevo Paciente","Se ha ingresado un nuevo paciente");
	}
	elseif ($_POST['opc'] == "modificar"){
		$expediente = $_POST['expediente'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$direccion = $_POST['direccion'];
		$status = $_POST['estado'];
		$fecNac = $_POST['fechaN'];
		$today = date("Ymd"); 
		$tel = $_POST['telefono'];
		$numHab = $_POST['habitacion'];
		$diag = $_POST['diagnostico'];
		$med = $_POST['medico'];
		echo modificarPaciente(3,$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$today,$tel,$numHab,$diag,$med);
		echo historial($expediente,"Actualizacion",$today,"Se actualizo el estado del paciente","El nuevo estado es ".$status);
	}
	elseif ($_POST['opc'] == "salida"){
		$expediente = $_POST['expediente'];
		$nombre = "";
		$apellidos = "";
		$direccion = "";
		$status = "";
		$fecNac = "";
		$today = "";
		$tel = "";
		$numHab = "";
		$diag = "";
		$med = "";
		echo salidaPaciente(4,$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$today,$tel,$numHab,$diag,$med);
		echo historial($expediente,"Baja",$today,"Salida Paciente","Se ha dado de alta al paciente");
	}

	function insertarPaciente($opc,$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$today,$tel,$numHab,$diag,$med){
		$usuario = "root";
		$password = "";
		$conexion = new mysqli("localhost", "root", "", "urgencias");
		// verificar conexión, si hay algún error termina la conexión
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			$stmt = $conexion->prepare("CALL SP_CRUD_PACIENTES(?,?,?,?,?,?,?,?,?,?,?,?,@res)");
			mysqli_stmt_bind_param($stmt, "issssssssiis", $opc, $expediente, $nombre, $apellidos, $direccion, $status, $fecNac, $today, $tel, $numHab, $diag, $med);
			mysqli_stmt_execute($stmt);
	    	$stmt->bind_result($msg, $res);
	    	while ($stmt->fetch()) {
	        	//printf ("%s ,%s\n", $msg, $res);
	    	}
			mysqli_stmt_close($stmt);
			$respuesta = $res." ".$msg;

			return $respuesta;
		}
		catch(mysqi_sql_exception $e){
			echo "Error: " . $e.getMessage();
		}
	}
	
	function modificarPaciente($opc,$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$today,$tel,$numHab,$diag,$med){
		$usuario = "root";
		$password = "";
		$conexion = new mysqli("localhost", "root", "", "urgencias");
		// verificar conexión, si hay algún error termina la conexión
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			$stmt = $conexion->prepare("CALL SP_CRUD_PACIENTES(?,?,?,?,?,?,?,?,?,?,?,?,@res)");
			mysqli_stmt_bind_param($stmt, "issssssssiis", $opc, $expediente, $nombre, $apellidos, $direccion, $status, $fecNac, $today, $tel, $numHab, $diag, $med);
			mysqli_stmt_execute($stmt);
	    	$stmt->bind_result($msg, $res);
	    	while ($stmt->fetch()) {
	        	//printf ("%s ,%s\n", $msg, $res);
	    	}
			mysqli_stmt_close($stmt);
			$respuesta = $res." ".$msg;

			return $respuesta;
		}
		catch(mysqi_sql_exception $e){
			echo "Error: " . $e.getMessage();
		}
	}
	
	function salidaPaciente($opc,$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$today,$tel,$numHab,$diag,$med){
		$usuario = "root";
		$password = "";
		$conexion = new mysqli("localhost", "root", "", "urgencias");
		// verificar conexión, si hay algún error termina la conexión
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			$stmt = $conexion->prepare("CALL SP_CRUD_PACIENTES(?,?,?,?,?,?,?,?,?,?,?,?,@res)");
			mysqli_stmt_bind_param($stmt, "issssssssiis", $opc, $expediente, $nombre, $apellidos, $direccion, $status, $fecNac, $today, $tel, $numHab, $diag, $med);
			mysqli_stmt_execute($stmt);
	    	$stmt->bind_result($msg, $res);
	    	while ($stmt->fetch()) {
	        	//printf ("%s ,%s\n", $msg, $res);
	    	}
			mysqli_stmt_close($stmt);
			$respuesta = $res." ".$msg;

			return $respuesta;
		}
		catch(mysqi_sql_exception $e){
			echo "Error: " . $e.getMessage();
		}
	}
	
	function historial($expediente,$tipo,$fecha,$tipocambio,$descripcion){
		$usuario = "root";
		$password = "";
		$conexion = new mysqli("localhost", "root", "", "urgencias");
		// verificar conexión, si hay algún error termina la conexión
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			$stmt = $conexion->prepare("CALL SP_HISTORIAL(?,?,?,?,?,@res)");
			mysqli_stmt_bind_param($stmt, "sssss", $expediente,$tipo,$fecha,$tipocambio,$descripcion);
			mysqli_stmt_execute($stmt);
	    	$stmt->bind_result($msg, $res);
	    	while ($stmt->fetch()) {
	        	//printf ("%s ,%s\n", $msg, $res);
	    	}
			mysqli_stmt_close($stmt);
			$respuesta = $res." ".$msg;

			return $respuesta;
		}
		catch(mysqi_sql_exception $e){
			echo "Error: " . $e.getMessage();
		}
	}
?>