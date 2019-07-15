$(document).ready(function(){
	$(document).on('click', '.btn-danger', function(){
		var path = 'assets/php/medicos.php';
		var id=$(this).attr('value');
		var ced=$('#cedula'+id).text();
		var btn="eliminar";
		console.log(id,ced,btn);
		$.ajax({
		type:'POST',
		url:path,
		data: {opc: btn, cedula: ced}, //Aquí le pasa los datos al file de php que los puede leer por el $_POST
		success:function(response){ //Se devuelve el echo que de el script
		if (response.substring(0,3).includes('1')) { //Si el primer caracter es 1, quiere decir que todo salió bien
			localStorage.setItem("title",'Éxito!');
			localStorage.setItem("type",'success');
			localStorage.setItem("msg",response.substring(2));
			location.reload();
			//notifyUser('Éxito!','success',response.substring(4)); //Aquí manda a llamar la funcion que muestra la notificacion de resultado
		} //Se le pasa el titulo, tipo(o sea error, correcto, etc) y el response.substring le pasa el resultado que dió la base
		else{ //Sino hay algun error
			localStorage.setItem("title",'Error!');
			localStorage.setItem("type",'error');
			localStorage.setItem("msg",response.substring(2));
			location.reload();
			//notifyUser('Error!','error',response.substring(4));
		}
		},
		error:function(){
			alert("Error al ejecutar la funcion");
		}
	});
	});
});

$(document).ready(function(){
    //get it if Status key found
    if(localStorage.getItem("title"))
    {
        notifyUser(localStorage.getItem("title"),localStorage.getItem("type"),localStorage.getItem("msg"));
        localStorage.clear();
    }
});
