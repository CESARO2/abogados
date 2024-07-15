<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_caso']))
            {
              $id_caso=$_REQUEST['id_caso'];
            }
            else
            {
            $id_caso=$_POST['id_caso'];
          }


  mysqli_query($con,"delete from caso where id_caso= '$id_caso'")or die(mysqli_error());

echo "<script>document.location='../caso/mis_casos.php'</script>"; 
     // header('Location:../usuario.php');
?>