<!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modalMedico" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Modificar Medico</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Cedula:</span>
							<input type="text" style="width:350px;" class="form-control" id="cedula" name="idu" readonly="readonly">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Nombres:</span>
							<input type="text" style="width:350px;" class="form-control" id="nombre" name="nombrePacienteu">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Apellidos:</span>
							<input type="text" style="width:350px;" class="form-control" id="apellidos" name="diagnosticou">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Dirección:</span>
							<input type="text" style="width:350px;" class="form-control" id="direccion" name="rdoEstadou">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Telefono:</span>
							<input type="text" style="width:350px;" class="form-control" id="telefono" name="rdoEstadou">
						</div>	
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modalMedico"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
						<input class="btn btn-primary " id="enviar" name="Guardar" type="submit" value="Actualizar"/>
						<button id="btnModificar" value = "modificar" onclick="modificar()">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>