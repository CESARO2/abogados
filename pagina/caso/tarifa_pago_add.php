<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

	$id_caso = $_POST['id_caso'];

	$cantidad = $_POST['cantidad'];

$metodo_pago = $_POST['metodo_pago'];


   $fecha = date('Y-m-d');



//$caja=0;



//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO pago_tarifa(metodo_pago,fecha,cantidad,id_caso)
				VALUES('$metodo_pago','$fecha','$cantidad','$id_caso')")or die(mysqli_error($con));

			

	echo "<script>document.location='../caso/tarifa_pago.php?id_caso=$id_caso'</script>";	

?>
