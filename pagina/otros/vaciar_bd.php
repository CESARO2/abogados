<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');






    mysqli_query($con,"delete from actividades ")or die(mysqli_error());
    mysqli_query($con,"delete from audiencia ")or die(mysqli_error());
       mysqli_query($con,"delete from caso ")or die(mysqli_error());
       mysqli_query($con,"delete from categoria_caso ")or die(mysqli_error());
              mysqli_query($con,"delete from categoria_corte ")or die(mysqli_error());
              mysqli_query($con,"delete from comentarios_tareas ")or die(mysqli_error());
            mysqli_query($con,"delete from corte ")or die(mysqli_error());
                   mysqli_query($con,"delete from documentos ")or die(mysqli_error());
                      mysqli_query($con,"delete from documento_archivo ")or die(mysqli_error());
                         mysqli_query($con,"delete from  escenario_caso ")or die(mysqli_error());
                            mysqli_query($con,"delete from  escenario_caso ")or die(mysqli_error());
              mysqli_query($con,"delete from  pago_tarifa ")or die(mysqli_error());
     mysqli_query($con,"delete from  tareas ")or die(mysqli_error());
 mysqli_query($con,"delete from  ubicacion ")or die(mysqli_error());

 
  echo "<script>document.location='../layout/inicio.php'</script>";  
  
  
?>