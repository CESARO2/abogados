


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_caso = $_POST['id_caso'];
	$titulo = $_POST['titulo'];
	$id_cliente = $_POST['id_cliente'];
	$id_categoria_caso = $_POST['id_categoria_caso'];
	$id_escenario_caso = $_POST['id_escenario_caso'];
		$descripcion = $_POST['descripcion'];
		$fecha_audiencia = $_POST['fecha_audiencia'];
	$tarifa_total = $_POST['tarifa_total'];

	mysqli_query($con,"update caso set titulo='$titulo',id_cliente='$id_cliente',id_categoria_caso='$id_categoria_caso',id_escenario_caso='$id_escenario_caso',descripcion='$descripcion',fecha_audiencia='$fecha_audiencia',tarifa_total='$tarifa_total' where id_caso='$id_caso'")or die(mysqli_error());


echo "<script>document.location='../caso/mis_casos.php'</script>";	

?>
