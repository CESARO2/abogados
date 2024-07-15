
<?php include '../layout/header.php';


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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
                <a class="btn btn-warning btn-print" href="caso_agregar.php"    style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR CASO</a>


                









                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> LISTA CASOS ARCHIVADOS</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                
               
                        <th>Titulo</th>
                    <th>Codigo</th>
                       
         
                           

    <th>Cliente</th>
 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
<?php

$id_usuario=$_SESSION['id'];

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from caso s inner join usuario c on s.id_cliente = c.id inner join ubicacion u on u.id_ubicacion = s.id_ubicacion inner join categoria_corte cc on cc.id_categoria_corte = s.id_categoria_corte inner join corte t on t.id_corte = s.id_corte inner join categoria_caso ctc on ctc.id_categoria_caso = s.id_categoria_caso inner join escenario_caso esc on esc.id_escenario_caso = s.id_escenario_caso
 where s.estado_caso='archivado'  and s.id_usuario='$id_usuario'")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){

$id_caso=$row['id_caso'];


    $i++;
?>
                      <tr >





    

        <td><?php echo $row['titulo'];?></td>              
         <td><?php echo $row['codigo_caso'];?></td>     
           <td><?php echo $row['nombre'];?></td>                                      

                          <td>
                                 <?php
                   




                    
                      ?>
<a class="btn btn-primary btn-print" href="<?php  echo "../caso/ver_caso.php?id_caso=$id_caso";?>"    role="button">Ver</a>



<a class="btn btn-primary btn-print" href="<?php  echo "../caso/restaurar_caso.php?id_caso=$id_caso";?>"  onClick="return confirm('¿Está seguro de que quieres restaurar??');"  role="button">Restaurar</a>

<a class="btn btn-primary btn-print" href="<?php  echo "../caso/borrar_caso.php?id_caso=$id_caso";?>"  onClick="return confirm('¿Está seguro de que quieres borrar caso??');"  role="button">Borrar</a>
      <?php
                      
                      ?>






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
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
