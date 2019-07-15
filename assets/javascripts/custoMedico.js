$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).attr('value');
		var cedula=$('#cedula'+id).text();//id span index.php
		var nombre=$('#nombre'+id).text();//id span index.php
		var apellidos=$('#apellidos'+id).text();//id span index.php
		var direccion=$('#direccion'+id).text();//id span index.php
		var telefono=$('#telefono'+id).text();//id span index.php
	
		$('#mdCedula').val(cedula); //id input modal.php
		$('#mdNombre').val(nombre); //id input modal.php
		$('#mdApellidos').val(apellidos); //id input modal.php
		$('#mdDireccion').val(direccion);   //id input modal.php
		$('#mdTelefono').val(telefono); //id input modal.php
	});
});
