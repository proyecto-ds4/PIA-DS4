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

if (isset($_POST['action']) && !empty($_POST['action'])) {
	$action = $_POST['action'];
	switch ($action) {
		case 'consultar':
			consulta(2);
			break;
		
		default:
			echo "fallo";
			break;
	}


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
		function consulta($opcion){
		//variables
		$primaryKey='id';
		$table='datatables_demo';
		$requestData = $_REQUEST;
		$columnas = array(
			'numhab' => 0,
			'status' => 1,
			'descripcion' => 2 
		);

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
			mysqli_stmt_bind_param($stmt, 'i', $opcion);
			mysqli_stmt_execute($stmt); //se ejecuta el "crud"

			$stmt->bind_result($msg, $res);

			if($res == '1'){

			$data = array();
			while ($row = mysqli_fetch_array($stmt)) {

				$color ='';
				if ( ($row['status'] == "D") ) $color ='#ff0000';
   				if ( ($row['status'] == "O") ) $color ='#FFFF00';
    			if ( ($row['status'] == "S") ) $color ='#1E90FF';

    			$columnas = array();
    			$columnas[] = $row ["numhabitacion"];
    			$columnas[] = $row ["status"];
    			$columnas[] = $row ["descripcion"];
    			$data[] = $columnas;

				# code...
			}

			    $json_data = array(
          "draw" => intval($requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
        "recordsTotal" => intval($totalData),  // total number of records
        "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
        "data" => $data   // total data array
    );

			echo json_encode($data, JSON_UNESCAPED_UNICODE);

		}

			mysqli_stmt_close($stmt);

			$result = mysqli_query($conexion, 'SELECT @RES');
			list($res) = mysqli_fetch_row($result);
			mysqli_free_result($result);




		}

		catch(mysqli_sql_exception $e){
			echo "Error: " .$e.getMessage();
		}

	echo json_encode(
    SSP::simple( $_GET, $conexion, $table, $primaryKey, $columns ));



	}




?>