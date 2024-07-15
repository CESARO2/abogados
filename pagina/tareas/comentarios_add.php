<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

	$id_tareas = $_POST['id_tareas'];

	$comentarios_tareas = $_POST['comentarios_tareas'];




   $fecha_comentarios = date('Y-m-d');



//$caja=0;



//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO comentarios_tareas(comentarios_tareas,fecha_comentarios,id_tareas)
				VALUES('$comentarios_tareas','$fecha_comentarios','$id_tareas')")or die(mysqli_error($con));

			

	echo "<script>document.location='../tareas/comentarios_tareas.php?id_tareas=$id_tareas'</script>";	

?>
