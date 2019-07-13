$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var nombre=$('#nombre'+id).text();//id span index.php
		var direccion=$('#direccion'+id).text();//id span index.php
		var email=$('#email'+id).text();//id span index.php
	
		$('#edit').modal('show');
		$('#enombre').val(nombre); //id input modal.php
		$('#edireccion').val(direccion);   //id input modal.php
		$('#eEmail').val(email); //id input modal.php
	});
});