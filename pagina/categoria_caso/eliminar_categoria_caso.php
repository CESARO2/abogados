<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_categoria_caso']))
            {
              $id_categoria_caso=$_REQUEST['id_categoria_caso'];
            }
            else
            {
            $id_categoria_caso=$_POST['id_categoria_caso'];
          }



  mysqli_query($con,"update categoria_caso set estado_categoria_caso='d' where id_categoria_caso='$id_categoria_caso'")or die(mysqli_error());
echo "<script>document.location='../categoria_caso/categoria_caso.php'</script>"; 
     // header('Location:../usuario.php');
?>