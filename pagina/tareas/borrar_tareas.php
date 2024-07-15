<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_tareas']))
            {
              $id_tareas=$_REQUEST['id_tareas'];
            }
            else
            {
            $id_tareas=$_POST['id_tareas'];
          }


  mysqli_query($con,"delete from tareas where id_tareas= '$id_tareas'")or die(mysqli_error());

echo "<script>document.location='../tareas/mis_tareas.php'</script>"; 
     // header('Location:../usuario.php');
?>