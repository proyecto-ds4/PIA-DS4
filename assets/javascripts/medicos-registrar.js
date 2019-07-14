//Esta funcion imprime el mensaje, puede imprimir cualquier tipo, success, error, info, etc

function notifyUser(title, type, msg) {

	new PNotify({

		title: title,

		text: msg,

		type: type

	});

}



//Esta funcion registra

function registrar(btn, ced, nom, ap, dir, tel) {

	var path = 'assets/php/medicos-registrar.php';

	var desc = "Prueba confirmacion";

	var btn = document.getElementById("btnRegistrar").value; //Obtiene el valor del control por medio del ID

	var ced = document.getElementById("ced").value;

	var nom = document.getElementById("nom").value;

	var ap = document.getElementById("ap").value;
	var dir = document.getElementById("dir").value;
	var tel = document.getElementById("tel").value;

	$.ajax({

		type:'POST',

		url:path,

		data: {opc: btn, cedula: ced, nombre: nom, apellidos: ap, direccion:dir, telefono:tel}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST

		success:function(response){ //Se devuelve el echo que de el script

		if (response.substring(0,1) == '1') { //Si el primer caracter es 1, quiere decir que todo salió bien

		notifyUser('Éxito!','success',response.substring(2)); //Aquí manda a llamar la funcion que muestra la notificacion de resultado

		} //Se le pasa el titulo, tipo(o sea error, correcto, etc) y el response.substring le pasa el resultado que dió la base

		else{ //Sino hay algun error

		notifyUser('Error!','error',response.substring(2));

		}

		},

		error:function(){

		alert("Error al ejecutar la funcion");

		}

	});

}