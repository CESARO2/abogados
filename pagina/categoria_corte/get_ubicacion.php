<?php
include('../../dist/includes/dbcon.php');
    $query=mysqli_query($con,"select * from categoria_corte where id_ubicacion='$_GET[id_ubicacion]'")or die(mysqli_error());

$modelo = array();
while($r=$query->fetch_object()){ $modelo[]=$r; }
if(count($modelo)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($modelo as $s) {
	print "<option value='$s->id_categoria_corte'>$s->nombre_categoria_corte</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>