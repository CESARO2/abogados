
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
     if(isset($_REQUEST['id_categoria_corte']))
            {
              $id_categoria_corte=$_REQUEST['id_categoria_corte'];
            }
            else
            {
            $id_categoria_corte=$_POST['id_categoria_corte'];
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
                  <h3 class="box-title"> MODIFICAR CATEGORIA CORTE</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="categoria_corte.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

                <div class="box-body">
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from categoria_corte where id_categoria_corte= '$id_categoria_corte' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_ubicacion=$row['id_ubicacion'];
        
?>
      
        <form class="form-horizontal" method="post" action="categoria_corte_actualizar.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_categoria_corte" name="id_categoria_corte" value="<?php echo $id_categoria_corte;?>" required>
    








     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombre Categoria corte</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="nombre_categoria_corte" name="nombre_categoria_corte" value="<?php echo $row['nombre_categoria_corte'];?>" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



                                                  <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Ubicacion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">


            <select class="form-control select2" name="id_ubicacion" required>

                <?php

              $queryc=mysqli_query($con,"select * from ubicacion")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                                     <option value="<?php echo $rowc['id_ubicacion'];?>" <?php if($id_ubicacion==$rowc['id_ubicacion']) {echo "selected"; }?>><?php echo $rowc['nombre_ubicacion'];?></option> 

                <?php }?>
              </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
 
 </div>
     

                
          
    <button type="submit" class="btn btn-primary">MODIFICAR</button>          
  
                   
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
