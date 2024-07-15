
<?php include '../layout/header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->

    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
                                         <?php 
//    if ($usuario=="si") {
      # code...
    
?>
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->

 </div>
  <?php
     if(isset($_REQUEST['id_tareas']))
            {
              $id_tareas=$_REQUEST['id_tareas'];
            }
            else
            {
            $id_tareas=$_POST['id_tareas'];
          }


?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> MODIFICAR TAREA</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="mis_tareas.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

                <div class="box-body">
                

<?php
    $query=mysqli_query($con,"select * from tareas s inner join usuario c on s.id_empleado = c.id inner join caso t on s.id_caso = t.id_caso where s.id_tareas='$id_tareas'  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
$id_tareas=$row['id_tareas'];
$id_caso=$row['id_caso'];
$id=$row['id_empleado'];
$prioridad=$row['prioridad'];
$empleado=$row['nombre'].'  '.$row['apellido'];
       
?>
      
        <form class="form-horizontal" method="post" action="tareas_actualizar.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_tareas" name="id_tareas" value="<?php echo $id_tareas;?>" required>
    





     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >titulo</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="titulo_tareas" name="titulo_tareas" value="<?php echo $row['titulo_tareas'];?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                              <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Prioridad</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">


                <select class="form-control select2" style="width: 60%;" name="prioridad" id="prioridad"> <br>
                     <option value="alta" <?php if($prioridad=="alta") {echo "selected"; }?>>Alta</option> 
                     <option value="media" <?php if($prioridad=="media") {echo "selected"; }?>>Media</option> 
                 
             <option value="baja" <?php if($prioridad=="baja") {echo "selected"; }?>>Baja</option> 
              </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>




               <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >fecha vencimiento</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="date" class="form-control" id="fecha_vencimiento"  name="fecha_vencimiento"  value="<?php echo $row['fecha_vencimiento'];?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                             <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Caso</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">


            <select class="form-control select2" name="id_caso" required>

                <?php

              $queryc=mysqli_query($con,"select * from caso")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                                     <option value="<?php echo $rowc['id_caso'];?>" <?php if($id_caso==$rowc['id_caso']) {echo "selected"; }?>><?php echo $rowc['titulo'];?></option> 

                <?php }?>
              </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
 </div>
                            <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Asignado a</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">


            <select class="form-control select2" name="id_empleado" required>

                <?php

              $queryc=mysqli_query($con,"select * from usuario")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                                     <option value="<?php echo $rowc['id'];?>" <?php if($id==$rowc['id']) {echo "selected"; }?>><?php echo $rowc['nombre'].'  '.$rowc['apellido'];?></option> 

                <?php }?>
              </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
 </div>







   




     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">


                   <textarea  class="form-control" id="descripcion_tareas" name="descripcion_tareas"><?php echo $row['descripcion_tareas'];?></textarea>

                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


         





   



 



        
          
 








  


     
                
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

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
                   <a href="#"></a>
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
                                         <?php 
 // }    
?>



    <!-- /gauge.js -->
  </body>
</html>
