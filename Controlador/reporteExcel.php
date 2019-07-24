<?php
require("../modelo/conexion.php");
$id=$_GET['id'];
$sql="SELECT *, datediff(fechaLimDev,fechaDev) as sobre,
                  date_format(fecha, '%d/%m/%y') as fecha,
                  date_format(fechaAsignacion, '%d/%m/%y') as fechaAsignacion,
                  date_format(fechaLimDev, '%d/%m/%y') as fechaLimDev,
                  date_format(fechaArribo, '%d/%m/%y') as fechaArribo,
                  date_format(fechaDev, '%d/%m/%y') as fechaDev
                  from train
                  WHERE id='$id'";
$resultado=$conexion->query($sql);

?>
<h2>Softrain</h2>
<table border="1">
  <tr style="background-color: green;color:white;">
    <td>Nro. Registro</td>
    <td>Fecha</td>
    <td>Fecha de Asignacion</td>
    <td>Fecha de Arribo</td>
    <td>Fecha de Limite</td>
    <td>Fecha de Devolucion</td>
    <td>Sobre Estadias</td>
    <td>Placa</td>
    <td>Empresa</td>
    <td>Conductor</td>
    <td>Naviera</td>
    <td>TM Conte</td>
    <td>Contenedor</td>
    <br>
    <td>Cliente</td>
    <td>Remit/Consig</td>
    <td>PESO</td>
    <td>Detalle</td>
    <td>Tramo</td>
    <td>Bill of Landing</td>
    <td>Fact. Softrain</td>
    <td>Fact. Apoyo</td>
    <!--td>Nota Contable</td-->
  </tr>
<?php
while($row=mysqli_fetch_assoc($resultado)){
  $rutaFS=$row["facSoftrain"];
  $rutaFA=$row["facturaApoyo"];
  $NumRegistro=$row["numRegistro"];
  $registro = str_replace(' ', '', $NumRegistro);

?>
<tr>
    <td><?php echo $row['numRegistro'] ?></td>
    <td><?php echo $row['fecha']?></td>
    <td><?php echo $row['fechaAsignacion']?></td>
    <td><?php echo $row['fechaArribo']?></td>
    <td><?php echo $row['fechaLimDev']?></td>
    <td><?php echo $row['fechaDev']?></td>
    <td><?php echo $row['sobre']?></td>
    <td><?php echo $row['placa']?></td>
    				<td><?php echo $row['empresa']?></td>
    				<td><?php echo $row['conductor']?></td>
    				<td><?php echo $row['naviera']?></td>
    				<td><?php echo $row['tamCont']?></td>
    				<td><?php echo $row['contenedor']?></td>
    				<td><?php echo $row['cliente']?></td>
    				<td><?php echo $row['remitConsig']?></td>
    				<td><?php echo $row['pesoKg']?></td>
    				<td><?php echo $row['detalle']?></td>
    				<td><?php echo $row['tramo']?></td>
<td>
<?php
foreach ($conexion->query("SELECT *	from Ficheros where id_train='$id'") as $row2){
?>
    <?php echo $row2['nombre'] ?>
    <br>
<?php
}
?>
</td>
<td><?php echo $rutaFS ?></td>
<td><?php echo $rutaFA ?></td>
</tr>
<?php
}
 ?>
</table>
<?php
header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header("Content-Disposition: attachment; filename='$registro'.xls");
?>
<!--?php
require("../modelo/conexion.php");
require("../Classes/PHPExcel.php");
// inicio de reportes en exel//
$sql="select * from train";
$resultado=$conexion->query($sql);
$fila=0;
$objPHPExcel=new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Softrain")->setDescription("Reportes");
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Cargas");

$objPHPExcel->getActiveSheet()->setCellValue('A1', 'id');

while ($row=$resultado->fetch_assoc()) {
  $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row.['id']);
  $fila++;
}

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Excel.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
?-->
