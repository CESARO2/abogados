


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

$id_ubicacion = $_POST['id_ubicacion'];
		$id_categoria_corte = $_POST['id_categoria_corte'];
	$nombre_categoria_corte = $_POST['nombre_categoria_corte'];


	mysqli_query($con,"update categoria_corte set nombre_categoria_corte='$nombre_categoria_corte',id_ubicacion='$id_ubicacion' where id_categoria_corte='$id_categoria_corte'")or die(mysqli_error());


echo "<script>document.location='../categoria_corte/categoria_corte.php'</script>";	

?>
