
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
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> AGREGAR AUDIENCIA</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="mis_casos.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>
                      <form class="form-horizontal" method="post" action="audiencia_add.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_caso" name="id_caso" value="<?php echo $id_caso;?>" required>
    





     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Fecha audiencia</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="date" class="form-control" id="fecha_audiencia" name="fecha_audiencia"  >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

    <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Notas</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
      <textarea class="form-control" id="notas" name="notas"></textarea>

                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

 
          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Archivo</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
            <input type="file" class="form-control" id="archivo" name="archivo"  required>
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


                <div class="box-body">
                

                   <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                
               
                        <th>Fecha</th>
                    <th>Fecha audiencia</th>
                             <th>Notas</th>
         <th>Archivo</th>
                           



                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from audiencia 
 where id_caso='$id_caso'")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){

$id_audiencia=$row['id_audiencia'];


    $i++;
?>
                      <tr >





    

        <td><?php echo $row['fecha'];?></td>              
         <td><?php echo $row['fecha_audiencia'];?></td>     
           <td><?php echo $row['notas'];?></td>                                      
   <td><a class="btn btn-danger btn-print" href="<?php  echo "descargar_directo.php?id_audiencia=$id_audiencia&id_caso=$id_caso";?>"  role="button">Descargar</a>
  
            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>

            


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
