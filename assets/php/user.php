<?php

//conect to db
$fecha = "";




//$query = "INSERT INTO usuarios(usuario, password, creacion, tipo) VALUES('$name','$pass','$fecha','$tipo')";
      if(isset($_POST['btnAgregarUser']))
	  {
				
						
						

		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$fecha=$_POST['date'];
		$fecha = date_format(date_create_from_format('m/d/Y', $fecha), 'Ymd');
		$tipo="a";		  
						usuarios(1,$name,$pass,$fecha,$tipo);
						 
						
	  }
	 
		  
		  
		  
	  
	  
	  if(isset($_POST['btnModificarUser']))
	  {
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		//$fecha=$_POST['date'];
		//$fecha = date_format(date_create_from_format('m/d/Y', $fecha), 'Ymd');
		  $tipo="b";
		  
usuarios(3,$name,$pass,null,$tipo);	
	  
	  }
	  
	  if(isset($_POST['btnBorrarUser']))
	  {
		 $opc = '2';
		  
	  }
	  
	  
function usuarios($opc,$name,$pass,$fecha,$tipo){
	$conexion = new mysqli("localhost", "root", "", "urgencias");
// verificar conexión, si hay algún error termina la conexión
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			//Se prepara el query
			$stmt = $conexion->prepare("CALL SP_CRUD_USUARIOS(?,?,?,?,?,@res)");
			//Se definen los valores de los parámetros, i = entero, s = string, d = double, b = es otra weaa
			mysqli_stmt_bind_param($stmt, "issss", $opc, $name, $pass, $fecha, $tipo);
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
	  
	  function cargaruser(){
		  $conexion = new mysqli("localhost", "root", "", "urgencias");
		if (mysqli_connect_errno()) {
			printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			//Se prepara el query
			$stmt = $conexion->prepare("SELECT USUARIO FROM USUARIOS");
			//Se ejecuta el statement
			mysqli_stmt_execute($stmt);

			// vincular las variables de resultados, esto tomaría el valor de una consulta que devuelve el mensaje y un resultado
	    	$stmt->bind_result($usr);

	    	// obtiene los valores de todas las filas que haya devuelto el query de resultado y en este caso las imprime, pero estas se pueden guardar
			echo '<select name="us" class="form-control" >';
	    	while ($stmt->fetch()) {
	        	echo "<option value = '{$usr}'";
				echo ">{$usr}</option>";
	    	}
			echo "</select>";
	    	//Se termina el statement y cierra la conexión
			mysqli_stmt_close($stmt);
		}
		catch(mysqi_sql_exception $e){
			echo "Error: " . $e.getMessage();
		}
	  }
?>