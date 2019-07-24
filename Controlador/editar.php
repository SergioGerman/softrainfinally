<?php
	require('../modelo/conexion.php');
	$id=$_GET['id'];
	foreach ($conexion->query("SELECT * from train where id='$id'") as $row){
require('../vista/cabecera.php');
?>
<div class="">
	<div class="container">
		<p class="title has-text-centered">
			<strong>Edicion</strong>
		</p>
	</div>
	<div class="columns">
		<div class="column is-half">
			<div class="">
				<div class="container">
					<div class="notification">
						<form method="post" action="actualizarcarga.php" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
							<input type="hidden" name="fecha" value="<?php echo $row['fecha'] ?>">
							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Numero. Registro:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="numRegistro" value="<?php echo $row['numRegistro']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<abbr title="fecha de registro de la carga">
										<label class="label">Fecha:</label>
									</abbr>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="date" class="input" name="fecha" value="<?php echo $row['fecha']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<abbr title="fecha de Asignacion is-marginless">
										<label class="label">Fecha de Asig.:</label>
									</abbr>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="date" class="input" name="fechaAsignacion" value="<?php echo $row['fechaAsignacion']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<abbr title="fecha de arribo">
										<label class="label">Arribo:</label>
									</abbr>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="date" class="input" name="fechaArribo" value="<?php echo $row['fechaArribo']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Fecha de dev.:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="date" class="input" name="fechaDev" value="<?php echo $row['fechaDev']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Placa del auto:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="placa" value="<?php echo $row['placa']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Empresa:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="empresa" value="<?php echo $row['empresa']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Conductor:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="conductor" value="<?php echo $row['conductor']?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Naviera:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<div class="select">
												<select name="naviera">
													<option value="<?php echo $row['naviera']?>"><?php echo $row['naviera']?> </option>
													<option value="Mapag Lloyd">Mapag Lloyd</option>
													<option value="MSC">MSC</option>
													<option value="Maersk">Maersk</option>
													<option value="Hambug Sud">Hambug Sud</option>
													<option value="Cosco">Cosco</option>
													<option value="CMA CGM">CMA CGM</option>
													<option value="Seabord Marine">Seabord Marine</option>
													<option value="Evergreen lin">Evergreen lin</option>
													<option value="Sea land">Sea Land</option>
													<option value="CSAV">CSAV</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<abbr title="Tamaño del contenedor"><label class="label">Tamaño del contenedor:</label></abbr>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="number" class="input" name="tamCont" value="<?php echo $row['tamCont']?>" step="any" />
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Contenedor:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="contenedor" value="<?php echo $row['contenedor']?>" />
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Cliente:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="cliente" value="<?php echo $row['cliente']?>" />
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Remitente - Consig:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="remitConsig" value="<?php echo $row['remitConsig']?>" />
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Peso:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="number" class="input" name="peso" value="<?php echo $row['pesoKg']?>" step="any" />
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Detalle:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<textarea name="detalle" rows="1" class="textarea" placeholder="Detalle de la carga" value=""><?php echo $row['detalle']?></textarea>											
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Tramo de la carga:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="text" class="input" name="tramo" value="<?php echo $row['tramo']?>" />
										</div>
									</div>
								</div>
							</div>

							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Factura Softrain:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="file" name="ficheroFS" />
										</div>
									</div>
								</div>
							</div>


							<div class="field is-horizontal">
								<div class="field-label">
									<label class="label">Factura apoyo:</label>
								</div>
								<div class="field-body">
									<div class="field">
										<div class="control">
											<input type="file" name="ficheroFA" />
										</div>
									</div>
								</div>
							</div>
							<div class="field  is-grouped is-grouped-left">
								<div class="control is-right">
									<button class="button is-link">Actualizar Datos</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!--container-->
			</div>
		</div>
		<div class="column">
			<?php
		require('../vista/verFicheros.php')
	?>
		</div>
	</div>
</div>
<?php
	}
	require('../vista/pie.php');
?>
