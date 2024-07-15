


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_actividades = $_POST['id_actividades'];
	$titulo = $_POST['titulo'];
$fecha_notificacion = $_POST['fecha_notificacion'];
$descripcion = $_POST['descripcion'];

	mysqli_query($con,"update actividades set titulo='$titulo',fecha_notificacion='$fecha_notificacion',descripcion='$descripcion' where id_actividades='$id_actividades'")or die(mysqli_error());


echo "<script>document.location='../actividades/actividades.php'</script>";	

?>
