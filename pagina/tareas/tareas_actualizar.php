


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_tareas = $_POST['id_tareas'];
	$titulo_tareas = $_POST['titulo_tareas'];
	$prioridad = $_POST['prioridad'];
	$fecha_vencimiento = $_POST['fecha_vencimiento'];
	$id_caso = $_POST['id_caso'];
		$id_empleado = $_POST['id_empleado'];
		$descripcion_tareas = $_POST['descripcion_tareas'];


	mysqli_query($con,"update tareas set titulo_tareas='$titulo_tareas',prioridad='$prioridad',fecha_vencimiento='$fecha_vencimiento',id_caso='$id_caso',id_empleado='$id_empleado',descripcion_tareas='$descripcion_tareas' where id_tareas='$id_tareas'")or die(mysqli_error());


echo "<script>document.location='../tareas/mis_tareas.php'</script>";	

?>
