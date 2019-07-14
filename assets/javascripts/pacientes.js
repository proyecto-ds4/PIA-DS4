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
	var ape = document.getElementById("txtApePat").value + " " + document.getElementById("txtApeMat").value;
	var dir = "prueba";
	var stat = 1;
	var fecN = "19940831";
	var fecI = "20190714";
	var tel = "8123984721";
	var numhab = 1;
	var diag = 1;
	var med = "1";
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, expediente: exped, nombre: nom, apellidos: ape, direccion: dir, status: stat, fechaN: fecN, fechaI: fecI, telefono: tel, habitacion: numhab, diagnostico: diag, medico: med}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
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