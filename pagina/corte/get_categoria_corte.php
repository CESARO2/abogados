<?php
include('../../dist/includes/dbcon.php');
    $query=mysqli_query($con,"select * from corte where id_categoria_corte='$_GET[id_categoria_corte]'")or die(mysqli_error());

$modelo = array();
while($r=$query->fetch_object()){ $modelo[]=$r; }
if(count($modelo)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($modelo as $s) {
	print "<option value='$s->id_corte'>$s->nombre_corte</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>