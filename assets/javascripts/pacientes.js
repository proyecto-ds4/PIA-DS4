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

	var path = 'assets/php/pacientes.php';
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
		setTimeout(function(){// wait for 5 secs(2)
			location.reload(); // then reload the page.(3)
		}, 2000);	
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

	var path = 'assets/php/pacientes.php';
	var btn = document.getElementById("btnModificar").value; //Obtiene el valor del control por medio del ID
	var nom = document.getElementById("enombre").value; //Obtiene el valor del control por medio del ID
	var ape = document.getElementById("eapellidos").value;
	var dir = document.getElementById("edireccion").value;
	//var stat = $('input:radio[name="rdoEstado"]:checked').val();
	var stat = $('input:radio[name="erdoEstado"]:checked').val();
	var fecN = document.getElementById("enacimiento").value;
	var tel = document.getElementById("etelefono").value;
	var numhab = $('select[name="enumHab"]').val();
	//var numhab = document.getElementById("ehabitacion").value;
	var diag = $('select[name="ediagnostico"]').val();
	//var diag = document.getElementById("ediagnostico").value;
	var med = $('select[name="emedicos"]').val();
	//var med = document.getElementById("emedico").value;
	var exped = document.getElementById("eid").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, expediente: exped, nombre: nom, apellidos: ape, direccion: dir, estado: stat, fechaN: fecN, telefono: tel, habitacion: numhab, diagnostico: diag, medico: med}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
		success:function(response){ //Se devuelve el echo que de el script
			setTimeout(function(){// wait for 5 secs(2)
			location.reload(); // then reload the page.(3)
		}, 2000);			
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

function salida() {
	var path = 'assets/php/pacientes.php';
	var btn = document.getElementById("btnSalida").value; //Obtiene el valor del control por medio del ID
	var exped = document.getElementById("eid").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, expediente: exped}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
		success:function(response){ //Se devuelve el echo que de el script
		setTimeout(function(){// wait for 5 secs(2)
			location.reload(); // then reload the page.(3)
		}, 2000);	
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