<?php
	//INSERT INTO PACIENTES VALUES(EXPED,APE,DIR,STAT,FEC_NAC,TEL,HAB,DIAG,MED,1);
	//$conexion=mysqli_connect("localhost","root","","urgencias") or die("Problemas con la conexión");
	//$conexion = new PDO("localhost","root","","urgencias");
	function insertarPacientePrueba(){
		$opc = 1;
		$expediente = "1510003";
		$nombre = "Diego Yahir";
		$apellidos = "Bersoza Guerra";
		$direccion = "Prueba";
		$stat = 1;
		$fecNac = "20190705";
		$tel = "8112937424";
		$numHab = 1;
		$diag = 1;
		$med = "1";
		//Conexión BD
		$usuario = "root";
		$password = "";
		$conexion = new mysqli("localhost", "root", "", "urgencias");
		// verificar conexión, si hay algún error termina la conexión
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			//Se prepara el query
			$stmt = $conexion->prepare("CALL SP_CRUD_PACIENTES(?,?,?,?,?,?,?,?,?,?,?,@res)");
			//Se definen los valores de los parámetros, i = entero, s = string, d = double, b = es otra weaa
			mysqli_stmt_bind_param($stmt, "issssissiis", $opc, $expediente, $nombre, $apellidos, $direccion, $stat, $fecNac, $tel, $numHab, $diag, $med);
			//Se ejecuta el statement
			mysqli_stmt_execute($stmt);

			// vincular las variables de resultados, esto tomaría el valor de una consulta que devuelve el mensaje y un resultado
	    	$stmt->bind_result($msg, $res);

	    	// obtiene los valores de todas las filas que haya devuelto el query de resultado y en este caso las imprime, pero estas se pueden guardar
	    	while ($stmt->fetch()) {
	        	printf ("%s ,%s\n", $msg, $res);
	    	}
	    	//Se termina el statement y cierra la conexión
			mysqli_stmt_close($stmt);
			//Esta parte obtiene tal cual el parámetro de salida "RES", 
			$result = mysqli_query($conexion,'SELECT @RES');
			list($res) = mysqli_fetch_row($result); //Esta parte guarda el valor del resultado en la variable res
			mysqli_free_result($result); //Y esto libera la variable de result, que es como un resultSet
		}
		catch(mysqi_sql_exception $e){
			echo "Error: " . $e.getMessage();
		}
	}
	function imprimirPrueba(){
		insertarPacientePrueba();
	}
?>