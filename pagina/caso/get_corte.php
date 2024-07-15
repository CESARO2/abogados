<?php


include('../../dist/includes/dbcon.php');


    $query=mysqli_query($con,"select * from corte  where id_categoria_corte='$_GET[id_categoria_corte]' and estado_corte='a'")or die(mysqli_error());

$corte = array();
while($r=$query->fetch_object()){ $corte[]=$r; }
if(count($corte)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($corte as $s) {
	print "<option value='$s->id_corte'>$s->nombre_corte</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>