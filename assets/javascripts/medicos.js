//Esta funcion imprime el mensaje, puede imprimir cualquier tipo, success, error, info, etc
function notifyUser(title, type, msg) {
	new PNotify({
		title: title,
		text: msg,
		type: type
	});
}

function registrar() {
	var path = 'assets/php/medicos.php';
	var btn = "registrar";
	var ced = document.getElementById("iCedula").value;
	var nom = document.getElementById("iNombre").value; //Obtiene el valor del control por medio del ID
	var ape = document.getElementById("iApellidos").value;
	var dir = document.getElementById("iDireccion").value;
	var tel = document.getElementById("iTelefono").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, cedula: ced, nombre: nom, apellidos: ape, direccion: dir, telefono: tel}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
		success:function(response){ //Se devuelve el echo que de el script
		if (response.substring(0,3).includes('1')) { //Si el primer caracter es 1, quiere decir que todo salió bien
			localStorage.setItem("title",'Éxito!');
			localStorage.setItem("type",'success');
			localStorage.setItem("msg",response.substring(4));
			location.reload();
			//notifyUser('Éxito!','success',response.substring(4)); //Aquí manda a llamar la funcion que muestra la notificacion de resultado
		} //Se le pasa el titulo, tipo(o sea error, correcto, etc) y el response.substring le pasa el resultado que dió la base
		else{ //Sino hay algun error
			localStorage.setItem("title",'Error!');
			localStorage.setItem("type",'error');
			localStorage.setItem("msg",response.substring(4));
			location.reload();
			//notifyUser('Error!','error',response.substring(4));
		}
		},
		error:function(){
			alert("Error al ejecutar la funcion");
		}
	});
}

function modificar() {
	var path = 'assets/php/medicos.php';
	var btn = "modificar";
	var ced = document.getElementById("mdCedula").value;
	var nom = document.getElementById("mdNombre").value;
	var ape = document.getElementById("mdApellidos").value;
	var dir = document.getElementById("mdDireccion").value;
	var tel = document.getElementById("mdTelefono").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, cedula: ced, nombre: nom, apellidos: ape, direccion: dir, telefono: tel}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
		success:function(response){ //Se devuelve el echo que de el script
		if (response.substring(0,3).includes('1')) { //Si el primer caracter es 1, quiere decir que todo salió bien
			localStorage.setItem("title",'Éxito!');
			localStorage.setItem("type",'success');
			localStorage.setItem("msg",response.substring(4));
			location.reload();
			//notifyUser('Éxito!','success',response.substring(4)); //Aquí manda a llamar la funcion que muestra la notificacion de resultado
		} //Se le pasa el titulo, tipo(o sea error, correcto, etc) y el response.substring le pasa el resultado que dió la base
		else{ //Sino hay algun error
			localStorage.setItem("title",'Error!');
			localStorage.setItem("type",'error');
			localStorage.setItem("msg",response.substring(4));
			location.reload();
			//notifyUser('Error!','error',response.substring(4));
		}
		},
		error:function(){
			alert("Error al ejecutar la funcion");
		}
	});
}