<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_corte']))
            {
              $id_corte=$_REQUEST['id_corte'];
            }
            else
            {
            $id_corte=$_POST['id_corte'];
          }



  mysqli_query($con,"update corte set estado_corte='d' where id_corte='$id_corte'")or die(mysqli_error());
echo "<script>document.location='../corte/corte.php'</script>"; 
     // header('Location:../usuario.php');
?>