
<?php include '../layout/header.php';

?>


           <?php
                    $id_usuario=$_SESSION['id'];
                      
                

                //  if ($guardar=="si") {
        $id_usuario=$_SESSION['id'];            
                      ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

<?php

if(isset($_POST['btn_temporada']))

{
  $year = $_POST['year'];


        mysqli_query($con,"update temporada set year='$year' where id='1'")or die(mysqli_error());
}

?>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->
                        <div class="box-body">
                  <!-- Date range -->

          </div>

                  <div class="box-header">
                  <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                                   <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      <h4>
<?php
$num=0;
$select = mysqli_query($con, "SELECT * FROM usuario ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Usuarios</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/comittee.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../usuario/usuario.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                                 <?php
                      }
                      ?>


                                   <?php
                     if ($tipo=="administrador" ) {
                    
                      ?>


       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
      
      <h4>
<?php
$num=1;
echo $num;
?>
      </h4>
              <p>Configuracion empresa</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/setting.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../configuracion/configuracion.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>

        
                                 <?php
                      }
                      ?>

         <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>
 

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php


$num=0;
    $query=mysqli_query($con,"select * from caso where estado_caso='abierto' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p> Casos abiertos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/room.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../caso/caso.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
                    <?php
                      }
                      ?>



         <?php
                        if ($tipo=="empleado") {
                    
                      ?>
 

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php


$num=0;
    $query=mysqli_query($con,"select * from caso where estado_caso='abierto' and id_usuario='$id_usuario'")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Mis Casos abiertos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/room.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../caso/mis_casos.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
                    <?php
                      }
                      ?>


         <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php

$num=0;
    $query=mysqli_query($con,"select * from caso where estado_caso='archivado'")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p> Casos archivados</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/room.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../caso/caso_archivado.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
          <?php
                      }
                      ?>







         <?php
                        if ($tipo=="empleado") {
                    
                      ?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php

$num=0;
    $query=mysqli_query($con,"select * from caso where estado_caso='archivado'  and id_usuario='$id_usuario'")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Mis Casos archivados</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/room.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../caso/mis_caso_archivado.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
          <?php
                      }
                      ?>







         <?php

                        if ($tipo=="cliente") {
               $id_cliente=$_SESSION['id'];  
               $num=0;  
                      ?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php


    $query=mysqli_query($con,"select * from caso where id_cliente='$id_cliente' ")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Mis Casos </p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/room.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../casos_cliente/casos_cliente.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
          <?php
                      }
                      ?>












                               <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>
    
          <?php
                      }
                      ?>
                               <?php
                        if ($tipo=="empleado") {
                    
                      ?>
    
          <?php
                      }
                      ?>
                 <?php
                        if ($tipo=="administrador" ) {
                      ?>


            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php

$num=0;
    $query=mysqli_query($con,"select * from documentos s inner join caso c on s.id_caso = c.id_caso ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p> documentos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/documentos.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../documentos/documentos.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
      <?php
                      }
                      ?>






                        <?php
                        if ($tipo=="empleado") {
                    
                      ?>


            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php

$num=0;
    $query=mysqli_query($con,"select * from documentos s inner join caso c on s.id_caso = c.id_caso and c.id_usuario='$id_usuario' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>Mis documentos</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/documentos.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../documentos/documentos.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
      <?php
                      }
                      ?>

                   <?php
                        if ($tipo=="empleado" or $tipo=="administrador" ) {
                    
                      ?>
                      

            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      <h4>
<?php

$num=0;
    $query=mysqli_query($con,"select * from actividades  ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $num++;
  }
echo $num;
?>
      </h4>
              <p>actividades</p>
            </div>
            <div class="icon"><img height="80" width="80" src="img/ass.png">
              <i class=""></i>
            </div>
            <?php echo ($num > 0) ? '<a href="../actividades/actividades.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>' : '<a href="#" class="small-box-footer">-------</a>'; ?>
          </div>
        </div>
  <?php
                      }
                      ?>
                  </div><!--row-->
            </div><!-- /.col (right) -->
                          <div class="box-body">
                  <div class="row">
                </div>
            </div>
                  </div><!--row-->
  
            </div><!-- /.col (right) -->
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->

                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
                   
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>


    <!-- /gauge.js -->
  </body>
</html>
