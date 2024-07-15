<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];


	$id_categoria_corte = $_POST['id_categoria_corte'];
	$nombre_corte = $_POST['nombre_corte'];



	
			mysqli_query($con,"INSERT INTO corte(nombre_corte,estado_corte,id_categoria_corte)
				VALUES('$nombre_corte','a','$id_categoria_corte')")or die(mysqli_error($con));

			
		echo "<script>document.location='../corte/corte.php'</script>";	


















?>
