


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

$id_corte = $_POST['id_corte'];
		$id_categoria_corte = $_POST['id_categoria_corte'];
	$nombre_corte = $_POST['nombre_corte'];


	mysqli_query($con,"update corte set nombre_corte='$nombre_corte',id_categoria_corte='$id_categoria_corte' where id_corte='$id_corte'")or die(mysqli_error());


echo "<script>document.location='../corte/corte.php'</script>";	

?>
