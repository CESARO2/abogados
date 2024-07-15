<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre_escenario_caso = $_POST['nombre_escenario_caso'];



	
			mysqli_query($con,"INSERT INTO escenario_caso(nombre_escenario_caso,estado_escenario_caso)
				VALUES('$nombre_escenario_caso','a')")or die(mysqli_error($con));

			
		echo "<script>document.location='../escenario_caso/escenario_caso.php'</script>";	


















?>
