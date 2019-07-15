
<?php
	//INSERT INTO MEDICOS VALUES(cedula,nombre,apellidos,direccion,telefono);
	//$conexion=mysqli_connect("localhost","root","","urgencias") or die("Problemas con la conexión");
	//$conexion = new PDO("localhost","root","","urgencias");
	if($_POST['opc'] == "registrar")
	{
		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		//echo medicos(1,$cedula,$nombre,$apellidos,$direccion,$telefono);
	}

	function medicos($opcion, $cedula, $nombre, $apellidos, $direccion, $telefono){
		$usuario = "root";
		$password = "";
		$conexion = new mysqli("localhost", "root", "", "urgencias");
		if (mysqli_connect_errno()) {
    		printf("Error de conexión: %s\n", mysqli_connect_error());
    		exit();
		}
		try{
			$stmt = $conexion->prepare("CALL SP_CRUD_MEDICOS(?,?,?,?,?,?,@res)");
			mysqli_stmt_bind_param($stmt, "isssss", $opcion, $cedula, $nombre, $apellidos, $direccion, $telefono);
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