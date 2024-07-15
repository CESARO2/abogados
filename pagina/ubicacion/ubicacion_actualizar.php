


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_ubicacion = $_POST['id_ubicacion'];
	$nombre_ubicacion = $_POST['nombre_ubicacion'];


	mysqli_query($con,"update ubicacion set nombre_ubicacion='$nombre_ubicacion' where id_ubicacion='$id_ubicacion'")or die(mysqli_error());


echo "<script>document.location='../ubicacion/ubicacion.php'</script>";	

?>
