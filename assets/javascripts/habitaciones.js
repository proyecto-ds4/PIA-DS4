
function registrar(){

	$.ajax ({
		type: 'POST', //aqui depende la funcion que se le dara POST o GET
		url: 'assets/php/habitaciones.php', //ruta de la funcion php
		data: {id:1, otrovalor: 'valor'}, //datos
		success:function(data){
			console.log("Se llamo bien");

		},
		error:function(data){
			console.log("fallo tu chingadera");
		}
	}
		);
	k
}
