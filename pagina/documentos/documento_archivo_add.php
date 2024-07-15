<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_documentos = $_POST['id_documentos'];
	$titulo_archivo = $_POST['titulo_archivo'];


   $fecha = date('Y-m-d');

if (!empty($_FILES['archivo']['name'])){
    
      
$target_dir = "subir_archivo/";
	$target_file = $target_dir.basename($_FILES["archivo"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["archivo"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una archivo - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una archivo.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["archivo"]["size"]>500000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["archivo"]["name"]);
	



			mysqli_query($con,"INSERT INTO documento_archivo(titulo_archivo,archivo,id_documentos)
				VALUES('$titulo_archivo','$img','$id_documentos')")or die(mysqli_error($con));

			
	echo "<script>document.location='../documentos/documento_archivo.php?id_documentos=$id_documentos'</script>";	
	//header('Location:../usuario.php');

	
	
		} else{
			echo "No se pudo subir.";
		}



   
}















?>
