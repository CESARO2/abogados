<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre_ubicacion = $_POST['nombre_ubicacion'];



	
			mysqli_query($con,"INSERT INTO ubicacion(nombre_ubicacion,estado_ubicacion)
				VALUES('$nombre_ubicacion','a')")or die(mysqli_error($con));

			
		echo "<script>document.location='../ubicacion/ubicacion.php'</script>";	


















?>
