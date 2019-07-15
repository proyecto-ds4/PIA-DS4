//Esta funcion imprime el mensaje, puede imprimir cualquier tipo, success, error, info, etc
function notifyUser(title, type, msg) {
	new PNotify({
		title: title,
		text: msg,
		type: type
	});
}

//Esta funcion registra //$expediente,$nombre,$apellidos,$direccion,$status,$fecNac,$fecIng,$tel);
function registrar() {
	var path = 'assets/php/medicos.php';
	var btn = document.getElementById("btnRegistrar").value; //Obtiene el valor del control por medio del ID
	var exped = document.getElementById("txtExp").value;
	var nom = document.getElementById("txtNombre").value; //Obtiene el valor del control por medio del ID
	var ape = document.getElementById("txtApellido").value;
	var dir = document.getElementById("txtDireccion").value;
	var stat = $('input:radio[name="rdoEstado"]:checked').val();
	var fecN = document.getElementById("dtpNac").value;
	var tel = document.getElementById("txtTel").value;
	var numhab = $('select[name="numHab"]').val();
	var diag = $('select[name="diagnostico"]').val();
	var med = $('select[name="medicos"]').val();
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, expediente: exped, nombre: nom, apellidos: ape, direccion: dir, estado: stat, fechaN: fecN, telefono: tel, habitacion: numhab, diagnostico: diag, medico: med}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
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

function modificar() {
	var path = 'assets/php/medicos.php';
	var btn = document.getElementById("btnModificar").value; //Obtiene el valor del control por medio del ID
	var nom = document.getElementById("nombre").value; //Obtiene el valor del control por medio del ID
	var ape = document.getElementById("apellidos").value;
	var dir = document.getElementById("direccion").value;
	var tel = document.getElementById("telefono").value;
	var cedula = document.getElementById("cedula").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, cedula: cedula, nombre: nom, apellidos: ape, direccion: dir, telefono: tel}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
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