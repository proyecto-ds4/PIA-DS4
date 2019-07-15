<?php

$res="";
$numhabitacion="";
$status="";
$descripcion="";


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
		function consulta($opcion, $numhabitacion, $status, $descripcion){

		$columnas = array('numhabitacion' => 0,
		'status' => 1,
		'descripcion' => 2);

		//conexion con base de datos
		$usuario="root";
		$password="";
		$conexion= new mysqli("localhost", "root", "", "urgencias");

		if(mysqli_connect_errno()){
			printf("Error de conexión: %s\n", mysqli_connect_errno());
			exit();
		}
		try
		{
			$stmt = $conexion->prepare("CALL SP_CRUD_HABITACIONES(?, @res)");
			mysqli_stmt_bind_param($stmt, 'iiss', $opcion, $numhabitacion, $status, $descripcion);
			mysqli_stmt_execute($stmt); //se ejecuta el "crud"

			$stmt->bind_result($numhabitacion, $status, $descripcion);

			while (mysqli_fetch_array($stmt)) 
			{

				$color ='';
				if ($status =="D")
					$color ='#FFFF00';

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

		function cargartb(){

		$columnas = array('numhabitacion' => 0,
		'status' => 1,
		'descripcion' => 2);

		//conexion con base de datos
		$usuario="root";
		$password="";
		$conexion= new mysqli("localhost", "root", "", "urgencias");

		if(mysqli_connect_errno()){
			printf("Error de conexión: %s\n", mysqli_connect_errno());
			exit();
		}
		try
		{
			$stmt = $conexion->prepare("CALL SP_CRUD_HABITACIONES(2,NULL,NULL,NULL, @res)");
			mysqli_stmt_execute($stmt); //se ejecuta el "crud"

			$stmt->bind_result($numhabitacion, $status, $descripcion);



			while ($stmt->fetch()) 
			{
				if($status == "Disponible"){
				echo "<tr style='background-color:RGBA(60,218,21,0.2); border:2px solid gray;'>";}
				elseif($status == "Sucia"){
				echo "<tr style='background-color:gold;color:white;'>";}
				else {
				echo "<tr style='background-color:red;color:white;'>";}

				echo "<td>".$numhabitacion."</td>";
				echo "<td>".$status."</td>";
				echo "<td>".$descripcion."</td>";
				echo "</tr>";

				//*$color ='';
				//if ($status =="D")
				//	$color ='#FFFF00';//



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