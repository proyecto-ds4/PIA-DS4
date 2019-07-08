<?php
	
	//INSERT INTO PACIENTES VALUES(EXPED,APE,DIR,STAT,FEC_NAC,TEL,HAB,DIAG,MED,1);
	//$conexion=mysqli_connect("localhost","root","","urgencias") or die("Problemas con la conexión");
	//$conexion = new PDO("localhost","root","","urgencias");
	function insertarPaciente(){
		$usuario = "root";
		$password = "";
		$conexion;
		try{
			$conexion = new PDO("mysql:host=localhost;dbname=urgencias", $usuario, $password);
			echo "Conexión correcta! <br>";
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		//mysqli_query($conexion,"nompre SP y values")
  		//or die("Problemas en el select".mysqli_error($conexion));
  		$res;
  		try{
  			// Se manda llamar el SP con el nombre de los parámetros
        	$sql = 'CALL SP_CRUD_PACIENTES(:opc,:exp,:nom,:ape,:dir,:st,:fec,:tel,:hab,:diag,:med,@res)';
 
        	// se prepará el statement para ejecución
        	$stmt = $conexion->prepare($sql);
 
        	// se definen los valores para los parámetros
        	$stmt->bindParam(':opc', $opc, PDO::PARAM_INT);
        	$stmt->bindParam(':exp', $expediente, PDO::PARAM_STR);
        	$stmt->bindParam(':nom', $nombre, PDO::PARAM_STR);
        	$stmt->bindParam(':ape', $ape, PDO::PARAM_STR);
        	$stmt->bindParam(':dir', $direccion, PDO::PARAM_STR);
        	$stmt->bindParam(':st', $stat, PDO::PARAM_INT);
        	$stmt->bindParam(':fec', $fecNac, PDO::PARAM_STR);
        	$stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
        	$stmt->bindParam(':hab', $numHab, PDO::PARAM_INT);
        	$stmt->bindParam(':diag', $diag, PDO::PARAM_INT);
        	$stmt->bindParam(':med', $med, PDO::PARAM_STR);
 
        	// Se ejecuta el statement
        	$stmt->execute();
 
        	$stmt->closeCursor();
 
        	// Despues ejecutra este query, que devolvería el resultado del parámetro de salida "RES"
        	$row = $conexion->query("SELECT @RES AS RES")->fetch(PDO::FETCH_ASSOC);
        	if ($row) {
           		return $row !== false ? $row['RES'] : null;
           		$res = $row;
			}
		}
		catch (PDOException $e) {
        	die("Error:" . $e->getMessage());
        	$res = "Error:" . $e->getMessage();
    	}
    	return $res;
	}
	function imprimir(){
		echo sprintf('El resultado del la inserción fué: %s', insertarPaciente());
	}
?>