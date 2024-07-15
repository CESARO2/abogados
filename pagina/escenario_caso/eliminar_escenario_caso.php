<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_escenario_caso']))
            {
              $id_escenario_caso=$_REQUEST['id_escenario_caso'];
            }
            else
            {
            $id_escenario_caso=$_POST['id_escenario_caso'];
          }



  mysqli_query($con,"update escenario_caso set estado_escenario_caso='d' where id_escenario_caso='$id_escenario_caso'")or die(mysqli_error());
echo "<script>document.location='../escenario_caso/escenario_caso.php'</script>"; 
     // header('Location:../usuario.php');
?>