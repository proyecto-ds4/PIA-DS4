//Esta funcion imprime el mensaje, puede imprimir cualquier tipo, success, error, info, etc
function notifyUser(title, type, msg) {
	new PNotify({
		title: title,
		text: msg,
		type: type
	});
}

//Esta funcion registra
function registrar() {
	var path = 'assets/php/habitaciones2.php';
	var desc = "Prueba confirmacion";
	var btn = document.getElementById("btnRegistrar").value; //Obtiene el valor del control por medio del ID
	var hab = document.getElementById("numhab").value;
	var stat = document.getElementById("status").value;
	var desc = document.getElementById("desc").value;
	$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, numhab: hab, status: stat, descripcion: desc}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
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

function confirmacion(title, msg, funcion){
	var notice = new PNotify({
  	title: title,
  	text: msg,
  	icon: 'fas fa-question-circle',
  	hide: false,
  	stack: {
  	  'dir1': 'down',
  	  'modal': true,
  	  'firstpos1': 25
  	},
  	modules: {
  	  Confirm: {
  	    confirm: true
  	  },
  	  Buttons: {
  	    closer: false,
  	    sticker: false
  	  },
  	  History: {
  	    history: false
  	  },
  	}
	});
	notice.on('pnotify.confirm', function() {
	  registrar();
	});
	notice.on('pnotify.cancel', function() {
		//No haría nada
	});
}

function confirma(){
	var notice = new PNotify({
  title: 'Confirmation Needed',
  text: 'Are you sure?',
  icon: 'fas fa-question-circle',
  hide: false,
  modules: {
    Confirm: {
      confirm: true
    },
    Buttons: {
      closer: false,
      sticker: false
    },
    History: {
      history: false
    }
  }
});
notice.on('pnotify.confirm', function() {
  alert('Ok, cool.');
});
notice.on('pnotify.cancel', function() {
  alert('Oh ok. Chicken, I see.');
});
}