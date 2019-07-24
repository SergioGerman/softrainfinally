<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	require("../modelo/conexion.php");

	//inicio 1 de paginacion
	$tamanho_pagina=25;
		if(isset($_GET["pagina"])){
			if($_GET["pagina"]==1){
				header ("Location:formulario.php");
			}else{
				$pagina=$_GET["pagina"];
			}
		}else {
			$pagina=1;
		}
	$empezar_desde=($pagina-1)*($tamanho_pagina);
	$sql_total="select numRegistro from train";
	$row3=$conexion->query($sql_total);
	$num_filas=$row3->num_rows;
	$total_paginas=ceil($num_filas/$tamanho_pagina);

	/*
	echo "Numeros de registros en la base de datos: ".$num_filas."<br>";
	echo "total de paginas: ".$total_paginas."<br>";
	echo "mostrando la pagina ".$pagina." de ".$total_paginas."<br>";*/

	$salida="";
	$query="SELECT *, datediff(fechaLimDev,fechaDev) as sobre,
										date_format(fecha, '%d/%m/%y') as fecha,
										date_format(fechaAsignacion, '%d/%m/%y') as fechaAsignacion,
										date_format(fechaLimDev, '%d/%m/%y') as fechaLimDev,
										date_format(fechaArribo, '%d/%m/%y') as fechaArribo,
										date_format(fechaDev, '%d/%m/%y') as fechaDev
										from train order by id  desc limit $empezar_desde,$tamanho_pagina";

//pregunta si es llenado la entrada del buscador
	if (isset($_POST['consulta'])) {
		$q=$conexion->real_escape_string($_POST['consulta']);
		$query="SELECT *, datediff(fechaLimDev,fechaDev) as sobre,
											date_format(fecha, '%d/%m/%y') as fecha,
											date_format(fechaAsignacion, '%d/%m/%y') as fechaAsignacion,
											date_format(fechaLimDev, '%d/%m/%y') as fechaLimDev,
											date_format(fechaArribo, '%d/%m/%y') as fechaArribo,
											date_format(fechaDev, '%d/%m/%y') as fechaDev
											from train
											WHERE
											numRegistro LIKE '%".$q."%' or
											cliente LIKE '%".$q."%' or
											conductor LIKE '%".$q."%' or
											contenedor LIKE '%".$q."%' or
											detalle LIKE '%".$q."%' or
											empresa LIKE '%".$q."%' or
											facSoftrain LIKE '%".$q."%' or
											facturaApoyo LIKE '%".$q."%' or
											fecha LIKE '%".$q."%' or
											fechaArribo LIKE '%".$q."%' or
											fechaAsignacion LIKE '%".$q."%' or
											fechaDev LIKE '%".$q."%' or
											fechaLimDev LIKE '%".$q."%' or
											naviera LIKE '%".$q."%' or
											numBillOflanding LIKE '%".$q."%' or
											pesoKg LIKE '%".$q."%' or
											placa LIKE '%".$q."%' or
											remitConsig LIKE '%".$q."%' or
											tamCont LIKE '%".$q."%' or
											tramo LIKE '%".$q."%'";


	}

//ejecutar la consulta
	$row2=$conexion->query($query);
	if ($row2->num_rows > 0) {
		$salida.=
		"<table class='table is-fullwidth tabla_datos is-bordered is-striped is-narrow is-hoverable'>
		<thead class='has-background-info'>
				<tr>
						<th><abbr title='Numero de registro'>Nro Reg.</abbr></th>
						<th><abbr title='Fecha de ingreso de carga'>Fecha</abbr></th>
						<th><abbr title='Fecha de asignacion'>Asignacion</abbr></th>
						<th><abbr title='Fecha Arribo'>Arribo</abbr></th>
						<th><abbr title='Fecha Limite Devolucion'>Limite</abbr></th>
						<th><abbr title='Fecha Devolucion de la carga'>Devolucion</abbr></th>
						<th><abbr title='Sobre Estadias'>SE</abbr></th>
						<th>Naviera</th>
						<th><abbr title='Tamaño del contenedor'>TM Conte</th>
						<th>Contenedor</th>
						<th>Cliente</th>
						<th><abbr title='Remitente Consignatario'>Remit/Consig</th>
						<th>PESO</th>
						<th>Detalle</th>
						<th>Tramo</th>
						<th><abbr title='Placa del vehículo transportador'>Placa</abbr></th>
						<th><abbr title='Empresa a la que se le presta los servicios de transporte'>Empresa</abbr></th>
						<th><abbr title='Nombre del conductor encargado'>Conductor</th>
						<th>Bill of Landing</th>
						<th>Fact. Softrain</th>
						<th>Fact. Apoyo</th>
						<th>Nota Contable</th>
						<th>accion</th>
						<th>accion</th>
						<th align='center'><span class='icons is-medium'>
							Excel
							<i class='fas fa-file-excel'></i>
						</span></th>
				</tr>
		</thead>
		<tbody>";

//recorrer el resultado de la consulta
	while ($row=$row2->fetch_assoc()) {
		$id=$row['id'];
		$salida.="
			<tr>
				<td>".$row['numRegistro']."</td>
				<td>".$row['fecha']."</td>
				<td>".$row['fechaAsignacion']."</td>
				<td>".$row['fechaArribo']."</td>
				<td>".$row['fechaLimDev']."</td>
				<td>".$row['fechaDev']."</td>
				<td>".$row['sobre']."</td>
				<td>".$row['naviera']."</td>
				<td>".$row['tamCont']."</td>
				<td>".$row['contenedor']."</td>
				<td>".$row['cliente']."</td>
				<td>
				<div style='width:100%;height: 50px;margin: 0;padding: 0;overflow-y: scroll'>
				".$row['remitConsig']."
				</div>
				</td>
				<td>".$row['pesoKg']."</td>
				<td>
				<div style='width:100%;height: 50px;margin: 0;padding: 0;overflow-y: scroll'>
				".$row['detalle']."</div>
				</td>
				<td>	<div style='width:100px'>".$row['tramo']."</div>
				</td>
				<td>".$row['placa']."</td>
				<td>
				<div style='width:100%;height: 50px;margin: 0;padding: 0;overflow-y: scroll'>
				".$row['empresa']."
				</div>
				</td>
				<td>".$row['conductor']."</td>";

//consultar por el id en la BD
		$queryFile="select id_train, nombre FROM ficheros where id_train='$id'";
		$resultado2=mysqli_query($conexion, $queryFile);
		$columna=mysqli_fetch_array($resultado2);

//preguntar para anadir Bill of Landing
		if(empty($columna['id_train'])){
			$salida.="
				<td class='has-text-centered'>
				<span class='icon'>
				<a href='editar.php?id=".$id.";'><abbr title='subir un archivo'><i class='fas fa-upload has-text-black'></i></abbr></a>
				</span>
				</td>";
		}else{
			$salida.="
				<td class='has-text-centered'>
				<span class='icon'>
				<a href='editar.php?id=".$id.";'><abbr title='".($columna['nombre'])."'><i class='fas fa-file-alt has-text-link'></i></abbr></a>
				</span>
				</td>";
		}

		$pathFS = $row['facSoftrain'];
		$pathFA = $row['facturaApoyo'];
		$fileFS = basename($pathFS, ".jpg");
		$fileFA = basename($pathFA, ".jpg");

//preguntar para anadir facturas
//preguntar por el campo de facotura softrain
		if(empty($pathFS)){
			$salida.="
					<td class='has-text-centered'>
					<span class='icon'>
  					<abbr title='no existe archivos cargados'><i class='fas fa-upload'></i></abbr>
					</span>
					</td>";
					if(empty($pathFA)){
						$salida.="
						<td class='has-text-centered'>
							<span class='icon'>
								<abbr title='no existe archivos cargados'><i class='fas fa-upload'></i></abbr>
							</span>
						</td>";
					}else{
						$salida.="
						<td class='has-text-centered'>
							<span class='icon'>
				      	<abbr title='".$fileFA."'><i class='fas fa-images has-text-link'></i></abbr>
							</span>
						</td>";
					}
		}else{
			$salida.="
					<td class='has-text-centered'>
						<span class='icon'>
							<abbr title='".$fileFS."'><i class='fas fa-images has-text-link'></i></abbr>
						</span>
					</td>";

//preguntar por el campo de factura apoyo
		if(empty($pathFA)){
						$salida.="
						<td class='has-text-centered'>
							<span class='icon'>
								<abbr title='subir un archivo'><i class='fas fa-upload'></i></abbr>
							</span>
						</td>";
		}else{
						$salida.="
						<td class='has-text-centered'>
							<span class='icon'>
								<abbr title='".$fileFA."'><i class='fas fa-images has-text-link'></i></abbr>
							</span>
						</td>";
					}
		}

//consultar a la BD  id para las notas contables
		$query2="select id_carga from notaContables where id_carga='$id'";
		$resultado3=mysqli_query($conexion, $query2);
		$columna2=mysqli_fetch_array($resultado3);
		if(empty($columna2['id_carga'])){
		$salida.="
			<td class='has-text-centered'>
				<a href='../vista/vistaNotaContable.php?id=".$row['id']."'><abbr title='Añadir nota Contable'>Añadir</abbr></a>
			</td>";
		}else{
		$salida.="
			<td class='has-text-centered'><a href='../vista/vistaEditarNotaContable.php?id=".$id."'>actualizar</a></td>";
		}
		$salida.="
			<td class='has-text-centered'>
			<a href='editar.php?id=".$row['id']."'>Editar</a>
			</td>

			<td class='has-text-centered'><a onclick='return eliminarcarga(".$row['id'].");'
			href='../controlador/eliminar.php?id=".$row['id']."'>Eliminar</a></td>
			<td class='has-text-centered'><a href='reporteExcel.php?id=".$row['id']."'>Reporte</a></td>
			</tr>
			<script type='text/javascript' src='../js/main2.js'></script>";
		}
		$salida.="</tbody>
		<tfoot class='has-background-info'>
		<tr>
				<th><abbr title='Numero de registro'>Nro Reg.</abbr></th>
				<th><abbr title='Fecha de ingreso de carga'>Fecha</abbr></th>
				<th><abbr title='Fecha de asignacion'>Asignacion</abbr></th>
				<th><abbr title='Fecha Arribo'>Arribo</abbr></th>
				<th><abbr title='Fecha Limite Devolucion'>Limite</abbr></th>
				<th><abbr title='Fecha Devolucion de la carga'>Devolucion</abbr></th>
				<th><abbr title='Sobre Estadias'>SE</abbr></th>
				<th>Naviera</th>
				<th><abbr title='Tamaño del contenedor'>TM Conte</th>
				<th>Contenedor</th>
				<th>Cliente</th>
				<th><abbr title='Remitente Consignatario'>Remit/Consig</th>
				<th>PESO</th>
				<th>Detalle</th>
				<th>Tramo</th>
				<th><abbr title='Placa del vehículo transportador'>Placa</abbr></th>
				<th><abbr title='Empresa a la que se le presta los servicios de transporte'>Empresa</abbr></th>
				<th><abbr title='Nombre del conductor encargado'>Conductor</th>
				<th>Bill of Landing</th>
				<th>Fact. Softrain</th>
				<th>Fact. Apoyo</th>
				<th>Nota Contable</th>
				<th>accion</th>
				<th>accion</th>
				<th align='center'><span class='icons is-medium'>
					Excel
					<i class='fas fa-file-excel'></i>
				</span></th>
		</tr>
</tfoot>
		</table>";
				}else{
					$salida.="El criterio de busqueda non coincide con los parametros escritos en el buscador<br>";
				}
				echo $salida;

//-------Paginaci'on------------
//for($i=1; $i<=$total_paginas; $i++){
//	echo "<a href='buscar.php?pagina=".$i."'>".$i."</a>  ";
//}
?>
<script>
	function eliminarcarga(id){
		if(confirm("¡Se eliminará este registro permanentemente!")==true){
			return true;
		}else{
			return false;
		}
	}
</script>
