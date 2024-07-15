<?php
include('../../dist/includes/dbcon.php');
    $query=mysqli_query($con,"select * from categoria_corte where id_ubicacion='$_GET[id_ubicacion]'  and estado_categoria_corte='a'")or die(mysqli_error());

$categoria_corte = array();
while($r=$query->fetch_object()){ $categoria_corte[]=$r; }
if(count($categoria_corte)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($categoria_corte as $s) {
	print "<option value='$s->id_categoria_corte'>$s->nombre_categoria_corte</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>