


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

$id_categoria_caso = $_POST['id_categoria_caso'];
		$nombre_categoria_caso = $_POST['nombre_categoria_caso'];



	mysqli_query($con,"update categoria_caso set nombre_categoria_caso='$nombre_categoria_caso' where id_categoria_caso='$id_categoria_caso'")or die(mysqli_error());


echo "<script>document.location='../categoria_caso/categoria_caso.php'</script>";	

?>
