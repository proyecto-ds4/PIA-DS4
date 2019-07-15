<!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Modificar Paciente</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">No. Expediente:</span>
							<input type="text" style="width:350px;" class="form-control" id="eid" name="idu" readonly="readonly">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Nombres:</span>
							<input type="text" style="width:350px;" class="form-control" id="enombre" name="nombrePacienteu">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Apellidos:</span>
							<input type="text" style="width:350px;" class="form-control" id="eapellidos" name="diagnosticou">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Dirección:</span>
							<input type="text" style="width:350px;" class="form-control" id="edireccion" name="rdoEstadou">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Estado:</span>
							<input type="text" style="width:350px;" class="form-control" id="eestado" name="rdoEstadou">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Fecha Nacimiento:</span>
							<input type="text" style="width:350px;" class="form-control" id="enacimiento" name="rdoEstadou">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Telefono:</span>
							<input type="text" style="width:350px;" class="form-control" id="etelefono" name="rdoEstadou">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Habitacion:</span>
							<input type="text" style="width:350px;" class="form-control" id="ehabitacion" name="rdoEstadou">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Diagnostico:</span>
							<input type="text" style="width:350px;" class="form-control" id="ediagnostico" name="rdoEstadou">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Medico:</span>
							<input type="text" style="width:350px;" class="form-control" id="emedico" name="rdoEstadou">
						</div>	
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
						<input class="btn btn-primary " id="enviar" name="guardar" type="submit" value="Actualizar"/>
				
				<button id="btnModificar" value = "modificar" onclick="modificar()">Guardar Cambios</button>
				<!--<button type="button" id="enviar" name="guardar" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Actualizar</button>-->
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Modal Form 
<div id="edit" class="modal-block modal-block-primary mfp-hide" >
	<section class="panel">
		<header class="panel-heading">
			<h2 class="panel-title">Modificar Paciente</h2>
		</header>
		<div class="panel-body">
			<form class="form-horizontal mb-lg" novalidate="novalidate" action="Update.php" id="formulario" method="POST" name="formulario">
				<div class="form-group mt-lg">
					<label class="col-sm-3 control-label">No. de Expediente</label>
					<div class="col-sm-9">
						<input type="text" name="numExpedienteu" class="form-control" required/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres(s)</label>
					<div class="col-sm-9">
						<input type="text" name="nombrePacienteu" class="form-control" placeholder="Ingresa el nombre" required/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido Paterno</label>
					<div class="col-sm-9">
						<input type="text" name="apellidoPaternou" class="form-control" placeholder="Ingresa apellido paterno" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido Materno</label>
					<div class="col-sm-9">
						<input type="text" name="apellidoMaternou" class="form-control" placeholder="Ingresa apellido materno" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Diagnostico</label>
					<div class="col-sm-9">
						<input type="text" name="diagnosticou" class="form-control" placeholder="Ingresa el diagnostico del paciente" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Habitacion</label>
					<div class="col-sm-9">
						<select class="form-control mb-md" name = "numHabitacionu">
							<option>204</option>
							<option>205</option>
							<option>206</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>

					<div class="col-sm-9">

						<div class="radio-custom radio-primary">
							<input type="radio" id="radioExample2" name="rdoEstadou" value="Sin Riesgo">
							<label for="radioExample2">Sin Riesgo</label>
						</div>

						<div class="radio-custom radio-success">
							<input type="radio" id="radioExample3" name="rdoEstadou" value="Bajo Riesgo">
							<label for="radioExample3">Bajo Riesgo</label>
						</div>

						<div class="radio-custom radio-warning">
							<input type="radio" id="radioExample4" name="rdoEstadou" value="Mediano Riesgo">
							<label for="radioExample4">Mediano Riesgo</label>
						</div>

						<div class="radio-custom radio-danger">
							<input type="radio" id="radioExample5" name="rdoEstadou" value="Alto Riesgo">
							<label for="radioExample5">Alto Riesgo</label>
						</div>
					</div>
				</div>
					</div>
					<footer class="panel-footer">
						<div class="row">
							<div class="col-md-12 text-right">
								<input class="btn btn-primary " id="enviar" name="guardar" type="submit" value="Actualizar"/>
					</form>
				
			
					<button class="btn btn-default modal-dismiss">Cancelar</button>
				</div>
			</div>
		</footer>
	</section>
</div>-->
