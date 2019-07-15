$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var expediente=$('#id'+id).text();//id span index.php
		var nombre=$('#nombre'+id).text();//id span index.php
		var apellido=$('#apellido'+id).text();//id span index.php
		var direccion=$('#direccion'+id).text();//id span index.php
		var status=$('#status'+id).text();//id span index.php
		var fechaNac=$('#fechaNac'+id).text();//id span index.php
		var telefono=$('#telefono'+id).text();//id span index.php
		var numHab=$('#numHab'+id).text();//id span index.php
		var diagnostico=$('#diagnostico'+id).text();//id span index.php
		var medico=$('#medico'+id).text();//id span index.php
	
		$('#edit').modal('show');
		$('#eid').val(expediente); //id input modal.php
		$('#enombre').val(nombre); //id input modal.php
		$('#eapellidos').val(apellido); //id input modal.php
		$('#edireccion').val(direccion);   //id input modal.php
		$('#eestado').val(status); //id input modal.php
		$('#enacimiento').val(fechaNac); //id input modal.php
		$('#etelefono').val(telefono); //id input modal.php
		$('#ehabitacion').val(numHab); //id input modal.php
		$('#ediagnostico').val(diagnostico); //id input modal.php
		$('#emedico').val(medico); //id input modal.php
	});
	
	//$(document).on('click', '.actualizado', function(){
		//var id=$(this).val();
		//var nombre=$('#nombre'+id).text();//id span index.php
		//var direccion=$('#direccion'+id).text();//id span index.php
		//var email=$('#email'+id).text();//id span index.php
	
		//$('#actualizado').modal('show');
		//$('#enombre').val(nombre); //id input modal.php
		//$('#edireccion').val(direccion);   //id input modal.php
		//$('#eEmail').val(email); //id input modal.php
	//});
});