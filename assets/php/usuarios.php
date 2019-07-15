<?php
$name="";
$pass="";
$fecha="";
$tipo="a";
//conect to db
$db= mysqli_connect('localhost', 'root', '', 'urgencias');
 
      if(isset($_POST['btnAgregarUser']))
	  {
		  $name=$_POST['name'];
		  $pass=$_POST['pass'];
		  $fecha=$_POST['date'];
		  
		  $query = "INSERT INTO usuarios(usuario, password, creacion, tipo) VALUES('$name','$pass','$date','$tipo')";
		  mysqli_query($db, $query);
		  
	  }

?>