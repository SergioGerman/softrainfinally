<?php
	require ("../vista/cabecera.php")
?>
<div class="container">
	<p class="title has-text-centered">
		<strong>SOFTRAIN</strong>
	</p>
	<p class="subtitle has-text-centered">
		Registro de informacion para la logistica y transporte.
	</p>
</div>
<div class="box">
	<div class="field is-horizontal">
		<button class="button is-info has-text-black is-large is-outlined" onclick="refs.modalEdicion.open()">
			<span class=""><strong>Nueva Carga.</strong></span>
			<span class="icon is-small">
      <i class="fas fa-plus"></i>
    </span>
		</button>
		<div class="field-label is-medium">
			<label for="caja_busqueda" class="label">Buscar:</label>
		</div>
		<div class="field-body">
			<div class="field">
				<p class="control has-icons-left">
					<input name="caja_busqueda" id="caja_busqueda" class="input is-medium is-link" placeholder="Ingrese la busqueda"></input>
					<span class="icon is-left">
						<i class="fas fa-search-plus"></i>
					</span>
				</p>
			</div>
		</div>
	</div>
	<!-- Tabla donde esta toda la informacion -->
	<div id="datos" class="table-container">
		<!--aqui esta la tabla de la informacion de las cargas-->
	</div>
</div>

<?php
foreach ($conexion->query("SELECT * from usuarios where usuario='$usuario'") as $row){
	$id_usuario=$row['id'];
}
//$pagina=$_GET['pagina'];
?>

<div class="modal" id="modalEdicion">
	<div onclick="refs.modalEdicion.close()" class="modal-background"></div>
	<div class="modal-content">
		<section class="is-fullheight is-medium is-bold">

				<div class="container">
					<div class="is-centered">
						<article class="card is-rounded">
							<div class="card-content">
								<div class="container">
									<p class="title has-text-centered">
										<strong>Formulario</strong>
									</p>
									<p class="subtitle has-text-centered">
										Ingrese los datos del registro para la carga
									</p>
									<p></p>
								</div>
								<form method="post" action="enviar.php" enctype="multipart/form-data">
									<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Numero de registro"><label class="label">Registro:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field has-addons">
												<div class="control has-text-centered">
													<span class="select">
														<select name="Reg" class="">
															<option value="I-">I -</option>
															<option value="E-">E -</option>
														</select>
													</span>
												</div>
												<div class="control is-expanded">
													<input class="input" name="numRegistro" required placeholder="Numero de registro" />
												</div>
											</div>
										</div>
									</div>

									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Fecha de registro de la carga"><label class="label">Fecha:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="date" name="fecha" required="true" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Fecha de asignación"><label class="label">Asignación:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="date" name="fechaAsignacion" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Fecha de Arribo"><label class="label">Arribo</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="date" name="fechaArribo" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Fecha de Devolucion"><label class="label">Devolucion:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="date" name="fechaDev" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Placa de Automovil"><label class="label">Placa</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="placa" placeholder="Placa del automovil transportador" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Empresa"><label class="label">Empresa:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="empresa" placeholder="Empresa" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<label class="label">Conductor:</label>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="conductor" placeholder="Nombre del conductor" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<label class="label">Naviera:</label>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="select">
													<select name="naviera">
														<option value="Mapag Lloyd">Mapag Lloyd</option>
														<option value="MSC">MSC</option>
														<option value="Maersk">Maersk</option>
														<option value="Hambug Sud">Hambug Sud</option>
														<option value="Cosco">Cosco</option>
														<option value="CMA CGM">CMA CGM</option>
														<option value="Seabord Marine">Seabord Marine</option>
														<option value="Evergreen lin">Evergreen lin</option>
														<option value="Sea Land">Sea Land</option>
														<option value="CSAV">CSAV</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Tamaño del Contenedor"><label class="label">TM Conte:</label><abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="number" class="input" name="tamCont" step="any" placeholder="Tamaño del contenedor" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Identificacion del contenedor"><label class="label">Contenedor:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="contenedor" placeholder="Identificacion del Contenedor" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Informacion del cliente"><label class="label">Cliente:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="cliente" placeholder="Informacion del Cliente" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Remitente y/o Consignatario"><label class="label">Rte./Consig:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="remitConsig" placeholder="Remitente y/o Consignatario" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Peso de la carga"><label class="label">Peso:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="number" name="peso" step="any" class="input" placeholder="Peso de la carga" />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<label class="label">Detalle:</label>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<textarea name="detalle" rows="1" class="textarea" placeholder="Detalle de la carga"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
											<abbr title="Tramo de la carga"><label class="label">Tramo:</label></abbr>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input class="input" name="tramo" placeholder="Tramo de la carga " />
												</div>
											</div>
										</div>
									</div>
									<div class="field is-horizontal">
										<div class="field-label is-normal">
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
										<div class="field-label is-normal">
											<label class="label">Factura Apoyo:</label>
										</div>
										<div class="field-body">
											<div class="field">
												<div class="control">
													<input type="file" name="ficheroFA">
												</div>
											</div>
										</div>
									</div>
									<div class="field  is-grouped is-grouped-right">
										<div class="control is-right">
											<button class="button is-link">Enviar Datos</button>
										</div>
									</div>
								</form>
							</div>
				</article>
			</div>
			</div>
		</section>
	</div>
</div>
<button class="modal-close is-large is-danger" aria-label="close" onclick="refs.modalEdicion.close()"> cerrar X</button>
</div>
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/main.js"></script>

	<?php
	require ("../vista/pie.php");
	?>
