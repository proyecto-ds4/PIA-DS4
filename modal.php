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
							<input type="text" style="width:350px;" class="form-control" id="enombre" name="nombrePacienteu" readonly="readonly">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Apellidos:</span>
							<input type="text" style="width:350px;" class="form-control" id="eapellidos" name="diagnosticou" readonly="readonly">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Dirección:</span>
							<input type="text" style="width:350px;" class="form-control" id="edireccion" name="rdoEstadou" readonly="readonly">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Estado:</span>
							<div class="radio-custom radio-primary">
								<input type="radio"  name="erdoEstado" value="Sin Riesgo" required />
								<label>Sin Riesgo</label>
							</div>

							<div class="radio-custom radio-success">
								<input type="radio" name="erdoEstado" value="Bajo Riesgo" />
								<label>Bajo Riesgo</label>
							</div>

							<div class="radio-custom radio-warning">
								<input type="radio" name="erdoEstado" value="Mediano Riesgo" />
								<label>Mediano Riesgo</label>
							</div>

							<div class="radio-custom radio-danger">
								<input type="radio" name="erdoEstado" value="Alto Riesgo" />
								<label >Alto Riesgo</label>
							</div>
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Fecha Nacimiento:</span>
							<input type="text" style="width:350px;" class="form-control" id="enacimiento" name="rdoEstadou" readonly="readonly">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Telefono:</span>
							<input type="text" style="width:350px;" class="form-control" id="etelefono" name="rdoEstadou" readonly="readonly">
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Habitacion:</span>
								<?php
									$linkHab  = conectarse();
									$sqlHab = "SELECT numHabitacion FROM habitaciones";
									$resulHab = mysqli_query($linkHab, $sqlHab);
									
									
									echo "<select style='width:350px;' class='form-control mb-md' id='numHab' name='enumHab' required disabled>";
									while ($filaHab = mysqli_fetch_array($resulHab)) {
										echo "<option value='" . htmlspecialchars($filaHab['numHabitacion']) . "'>"
										. htmlspecialchars($filaHab['numHabitacion']) 
										. "</option>";
									}
									echo "</select>";

								?>
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Diagnostico:</span>
								<?php
									$linkDia  = conectarse();
									$sqlDia = "SELECT * FROM diagnostico";
									$resulDia = mysqli_query($linkDia, $sqlDia);
									

									echo "<select style='width:350px;' class='form-control mb-md' id='diagnostico' name='ediagnostico' required >";
									while ($filaDia = mysqli_fetch_array($resulDia)) {
										echo "<option value='" . htmlspecialchars($filaDia['claveDiagnostico']) . "'>"
										. htmlspecialchars($filaDia['descripcion']) 
										. "</option>";
									}
									echo "</select>";

								?>
						</div>	
						<div class="form-group input-group">
							<span class="input-group-addon" style="width:150px;">Medico:</span>
							<?php
								$linkMed  = conectarse();
								$sqlMed = "SELECT cedula, CONCAT(nombre, ' ', apellidos) As Nombre FROM medicos";
								$resulMed = mysqli_query($linkMed, $sqlMed);
								

								echo "<select style='width:350px;' class='form-control mb-md' id='medicos' name='emedicos' required >";
								while ($filaMed = mysqli_fetch_array($resulMed)) {
									echo "<option value='" . htmlspecialchars($filaMed['cedula']) . "'>"
									. htmlspecialchars($filaMed['Nombre']) 
									. "</option>";
								}
								echo "</select>";

							?>
						</div>	
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
						<button type="button" id="btnSalida" onclick="salida();" class="btn btn-danger" value="salida"> Salida de Paciente</button>
						<button id="btnModificar" class="btn btn-primary " value = "modificar" onclick="modificar();">Guardar Cambios</button>
				<!--<button type="button" id="enviar" name="guardar" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Actualizar</button>-->
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->
