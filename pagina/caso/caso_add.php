<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

	$titulo = $_POST['titulo'];

	$codigo_caso = $_POST['codigo_caso'];

$id_cliente = $_POST['cliente'];

$id_ubicacion = $_POST['id_ubicacion'];
$id_categoria_corte = $_POST['id_categoria_corte'];
$id_corte = $_POST['id_corte'];
$id_categoria_caso = $_POST['id_categoria_caso'];
$id_escenario_caso = $_POST['id_escenario_caso'];

$descripcion = $_POST['descripcion'];
$fecha_audiencia = $_POST['fecha_audiencia'];
   $fecha_registro = date('Y-m-d');
$tarifa_total = $_POST['tarifa_total'];

$estado_caso = "abierto";
//$caja=0;


$id_usuario=$_SESSION['id'];
//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO caso(titulo,codigo_caso,id_cliente,id_ubicacion,id_categoria_corte,id_corte,id_categoria_caso,id_escenario_caso,descripcion,fecha_registro,fecha_audiencia,tarifa_total,estado_caso,id_usuario)
				VALUES('$titulo','$codigo_caso','$id_cliente','$id_ubicacion','$id_categoria_corte','$id_corte','$id_categoria_caso','$id_escenario_caso','$descripcion','$fecha_registro','$fecha_audiencia','$tarifa_total','$estado_caso','$id_usuario')")or die(mysqli_error($con));

			

	echo "<script>document.location='../caso/mis_casos.php'</script>";	

?>
