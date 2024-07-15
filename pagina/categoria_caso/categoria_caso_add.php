<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre_categoria_caso = $_POST['nombre_categoria_caso'];



	
			mysqli_query($con,"INSERT INTO categoria_caso(nombre_categoria_caso,estado_categoria_caso)
				VALUES('$nombre_categoria_caso','a')")or die(mysqli_error($con));

			
		echo "<script>document.location='../categoria_caso/categoria_caso.php'</script>";	


















?>
