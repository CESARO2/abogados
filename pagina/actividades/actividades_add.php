<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$titulo = $_POST['titulo'];
	$fecha_notificacion = $_POST['fecha_notificacion'];
$descripcion = $_POST['descripcion'];

	
			mysqli_query($con,"INSERT INTO actividades(titulo,descripcion,fecha_notificacion)
				VALUES('$titulo','$descripcion','$fecha_notificacion')")or die(mysqli_error($con));

			
		echo "<script>document.location='../actividades/actividades.php'</script>";	


















?>
