<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];


	$id_ubicacion = $_POST['id_ubicacion'];
	$nombre_categoria_corte = $_POST['nombre_categoria_corte'];



	
			mysqli_query($con,"INSERT INTO categoria_corte(nombre_categoria_corte,estado_categoria_corte,id_ubicacion)
				VALUES('$nombre_categoria_corte','a','$id_ubicacion')")or die(mysqli_error($con));

			
		echo "<script>document.location='../categoria_corte/categoria_corte.php'</script>";	


















?>
