<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$titulo_documentos = $_POST['titulo_documentos'];
	$id_caso = $_POST['id_caso'];
$id_usuario_do=$_SESSION['id'];

	
			mysqli_query($con,"INSERT INTO documentos(titulo_documentos,id_caso,id_usuario_do)
				VALUES('$titulo_documentos','$id_caso','$id_usuario_do')")or die(mysqli_error($con));

			
		echo "<script>document.location='../documentos/mis_documentos.php'</script>";	


















?>
