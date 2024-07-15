<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_categoria_corte']))
            {
              $id_categoria_corte=$_REQUEST['id_categoria_corte'];
            }
            else
            {
            $id_categoria_corte=$_POST['id_categoria_corte'];
          }



  mysqli_query($con,"update categoria_corte set estado_categoria_corte='d' where id_categoria_corte='$id_categoria_corte'")or die(mysqli_error());
echo "<script>document.location='../categoria_corte/categoria_corte.php'</script>"; 
     // header('Location:../usuario.php');
?>