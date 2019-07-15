
<?php
	//INSERT INTO MEDICOS VALUES(cedula,nombre,apellidos,direccion,telefono);
	//$conexion=mysqli_connect("localhost","root","","urgencias") or die("Problemas con la conexión");
	//$conexion = new PDO("localhost","root","","urgencias");
	if(isset($_POST['btnRegistrar']))
	{
		if(!empty($_REQUEST['cedula']))
		{
			$cedula=$_REQUEST['cedula'];
		}
		if(!empty($_REQUEST['nombre']))
		{
			$nombre=$_REQUEST['nombre'];
		}
		if(!empty($_REQUEST['apellidos']))
		{
			$nombre=$_REQUEST['apellidos'];
		}
		if(!empty($_REQUEST['direccion']))
		{
			$nombre=$_REQUEST['direccion'];
		}
		
		if(!empty($_REQUEST['telefono']))
		{
			$telefono=$_REQUEST['telefono'];
		}
	
	insertarMedico(1, $cedula, $nombre, $apellidos, $direccion, $telefono);
	}
	function insertarMedico($opcion, $cedula, $nombre, $apellidos, $direccion, $telefono)
	{
		
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
			$stmt = $conexion->prepare("CALL SP_CRUD_MEDICOS(?,?,?,?,?,?,@res)");
			//Se definen los valores de los parámetros, i = entero, s = string, d = double, b = es otra weaa
			mysqli_stmt_bind_param($stmt, "isssss", $opcion, $cedula, $nombre, $apellidos, $direccion, $telefono);
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
	
	function cargartb(){
		$usuario="root";
		$password="";
		$conexion= new mysqli("localhost", "root", "", "urgencias");
		if(mysqli_connect_errno()){
			printf("Error de conexión: %s\n", mysqli_connect_errno());
			exit();
		}
		try
		{
			$stmt = $conexion->prepare("CALL SP_CRUD_MEDICOS(2,NULL,NULL,NULL,NULL,NULL,@res)");
			mysqli_stmt_execute($stmt); //se ejecuta el "crud"
			$stmt->bind_result($cedula, $nombre, $apellidos, $direccion, $tel);
			while ($stmt->fetch()) 
			{
				echo "<tr>";
				echo "<td><span id='cedula$cedula'>".$cedula."</span></td>";
				echo "<td><span id='nombre$cedula'>".$nombre."</span></td>";
				echo "<td><span id='apellidos$cedula'>".$apellidos."</span></td>";
				echo "<td><span id='direccion$cedula'>".$direccion."</span></td>";
				echo "<td><span id='telefono$cedula'>".$tel."</span></td>";
				//<a class="modal-with-form btn btn-primary" href="#regForm" style="padding-left: 21px; padding-right: 22px;">Añadir Medico</a>
				echo "<td style='width:5%'><span><a class='modal-with-form btn btn-success edit' href='#modForm' value='$cedula'>Modificar</a></span></td>";
				echo "<td style='width:5%'><button type='button' id='delMed$cedula' type='button' class='btn btn-danger' value='$cedula'>Eliminar</button></td>";
				echo "</tr>";
			}
			mysqli_stmt_close($stmt);
		}
		catch(mysqli_sql_exception $e){
			echo "Error: " .$e.getMessage();
		}
	}
?>