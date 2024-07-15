
  <?php
  include('../../dist/includes/dbcon.php');
     if(isset($_REQUEST['id_audiencia']))
            {
              $id_audiencia=$_REQUEST['id_audiencia'];
            }
            else
            {
            $id_audiencia=$_POST['id_audiencia'];
          }

     if(isset($_REQUEST['id_caso']))
            {
              $id_caso=$_REQUEST['id_caso'];
            }
            else
            {
            $id_caso=$_POST['id_caso'];
          }
?>

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from audiencia    where id_audiencia= '$id_audiencia' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){


?>
<?php
    $archivo=$row['archivo'];
// Definimos el nombre de archivo a descargar.

header("Content-disposition: attachment; filename=$archivo");

header("Content-type: MIME");
readfile("subir_audiencia/$archivo");
  echo "<script>document.location='../audiencia/audiencia.php?id_caso=$id_caso'</script>";  
 }






?>
