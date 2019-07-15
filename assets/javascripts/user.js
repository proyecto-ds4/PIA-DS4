//Esta funcion imprime el mensaje, puede imprimir cualquier tipo, success, error, info, etc
function notifyUser(title, type, msg) {
	new PNotify({
		title: title,
		text: msg,
		type: type
	});
}

<<<<<<< HEAD

    $.ajax({
    url: "assets/php/user.php",
    type: "POST",
    data: {action: 'consulta'},
    success: function(output) {
    	alert (output);
             // En caso de que se ejecute
            /*$('#TbHab > tbody').html(data);*/
       }
    });
   

=======
//Esta funcion registra
function registrar(btn, name, pass, date, tipo) {
	var path = 'assets/php/user.php';
	var desc = "Prueba confirmacion";
	var btn = document.getElementById("btnAgregarUser").value; //Obtiene el valor del control por medio del ID
	var name = document.getElementById("name").value;
	var pass = document.getElementById("pass").value;
	var date = document.getElementById("date").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, nomb: name, pas: pass, creac: date tipo: $tipo}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
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