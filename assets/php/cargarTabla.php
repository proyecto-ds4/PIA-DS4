		function cargarTabla($opcion, $numhabitacion, $status, $descripcion){

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