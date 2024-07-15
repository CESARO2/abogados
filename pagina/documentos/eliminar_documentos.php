<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_documentos']))
            {
              $id_documentos=$_REQUEST['id_documentos'];
            }
            else
            {
            $id_documentos=$_POST['id_documentos'];
          }


  mysqli_query($con,"delete from documentos where id_documentos= '$id_documentos'")or die(mysqli_error());
echo "<script>document.location='../documentos/mis_documentos.php'</script>"; 
     // header('Location:../usuario.php');
?>