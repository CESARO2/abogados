


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

$id_escenario_caso = $_POST['id_escenario_caso'];
		$nombre_escenario_caso = $_POST['nombre_escenario_caso'];



	mysqli_query($con,"update escenario_caso set nombre_escenario_caso='$nombre_escenario_caso' where id_escenario_caso='$id_escenario_caso'")or die(mysqli_error());


echo "<script>document.location='../escenario_caso/escenario_caso.php'</script>";	

?>
