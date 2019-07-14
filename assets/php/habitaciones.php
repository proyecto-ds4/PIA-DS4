<?php

$res="";
if (isset($_POST['registrar'])){
	if($_POST['registrar'] && $_POST['registrar'] != 0){
   		$status=$_POST['status'];
		}
	$status = $_REQUEST['status'];
	$desc = $_REQUEST['desc'];
	inup(1,0,$status,$desc);

}

	function inup($opcion,$numhab,$status,$desc){
		//mis variables de tipo POSt
		

		//conexion con base de datos
		$usuario="root";
		$password="";
		$conexion= new mysqli("localhost", "root", "", "urgencias");

		//verificar conexión 
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

				printf("%s ,%s\n", $numhab, $status, $desc);

				# code...
			}

			mysqli_stmt_close($stmt);

			$result = mysqli_query($conexion, 'SELECT @RES');
			list($res) = mysqli_fetch_row($result);
			mysqli_free_result($result);




		}

		catch(mysqli_sql_exception $e){
			echo "Error: " .$e.getMessage();
		}



	}

	
	

?>