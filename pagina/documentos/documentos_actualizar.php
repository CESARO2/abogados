


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_documentos = $_POST['id_documentos'];
	$titulo_documentos = $_POST['titulo_documentos'];


	mysqli_query($con,"update documentos set titulo_documentos='$titulo_documentos' where id_documentos='$id_documentos'")or die(mysqli_error());


echo "<script>document.location='../documentos/mis_documentos.php'</script>";	

?>
