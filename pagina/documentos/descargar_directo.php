
  <?php
  include('../../dist/includes/dbcon.php');
     if(isset($_REQUEST['id_documentos']))
            {
              $id_documentos=$_REQUEST['id_documentos'];
            }
            else
            {
            $id_documentos=$_POST['id_documentos'];
          }

     if(isset($_REQUEST['id_documento_archivo']))
            {
              $id_documento_archivo=$_REQUEST['id_documento_archivo'];
            }
            else
            {
            $id_documento_archivo=$_POST['id_documento_archivo'];
          }
?>

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from documento_archivo    where id_documento_archivo= '$id_documento_archivo' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){


?>
<?php
    $archivo=$row['archivo'];
// Definimos el nombre de archivo a descargar.

header("Content-disposition: attachment; filename=$archivo");

header("Content-type: MIME");
readfile("subir_audiencia/$archivo");
  echo "<script>document.location='../documentos/documento_archivo.php?id_documentos=$id_documentos'</script>";  
 }






?>
