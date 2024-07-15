<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

	$titulo_tareas = $_POST['titulo_tareas'];
	$prioridad = $_POST['prioridad'];
	$fecha_vencimiento = $_POST['fecha_vencimiento'];
	$id_caso = $_POST['id_caso'];

$id_empleado = $_POST['cliente'];


$descripcion_tareas = $_POST['descripcion_tareas'];




$estado_caso = "abierto";
//$caja=0;



//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO tareas(titulo_tareas,prioridad,fecha_vencimiento,id_caso,id_empleado,descripcion_tareas)
				VALUES('$titulo_tareas','$prioridad','$fecha_vencimiento','$id_caso','$id_empleado','$descripcion_tareas')")or die(mysqli_error($con));

			

	echo "<script>document.location='../tareas/mis_tareas.php'</script>";	

?>
