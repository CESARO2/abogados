<?php 
$id=$_SESSION['id'];
?>

<?php

?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                                   <li><a href = "../layout/inicio.php"><i class="fa fa-dashboard"></i> inicio <span class="fa fa-chevron-right"></span></a></li>
           


                           <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
          
                     
                                  <?php
                      }
                      ?>

                            <?php
 
                    
                      ?>

     





                          <li><a><i class="fa fa-legal"></i> Caso<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                              <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>
<li><a href="../caso/caso.php">caso</a></li>
  <?php
                      }
                      ?>
                           <?php
                               if ($tipo=="empleado" or $tipo=="administrador" ) {
                    
                      ?>
<li><a href="../caso/mis_casos.php">Mis casos</a></li>
  <?php
                      }
                      ?>

                              <?php
                        if ($tipo=="empleado" or $tipo=="administrador" ) {
                    
                      ?>
<li><a href="../categoria_caso/categoria_caso.php">Categoria caso</a></li>
<li><a href="../escenario_caso/escenario_caso.php">Escenario caso</a></li>



  <?php
                      }
                      ?>
                    </ul>
                  </li>

  
       <?php
                        if ($tipo=="cliente") {
                    
                      ?>


       <li><a href = "../casos_cliente/casos_cliente.php"><i class="fa fa-archive"></i>Mis Casos<span class="fa fa-chevron-right"></span></a>
     
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
                        if ($tipo=="administrador" ) {
                    
                      ?>
       <li><a href = "../caso/caso_archivado.php"><i class="fa fa-archive"></i> Casos archivados<span class="fa fa-chevron-right"></span></a>
           <?php
                      }
                      ?>

                          <?php
                               if ($tipo=="empleado") {
                    
                      ?>                 
             <li><a href = "../caso/mis_caso_archivado.php"><i class="fa fa-archive"></i> Mis casos archivados<span class="fa fa-chevron-right"></span></a>  

                        <?php
                      }
                      ?>

                          
                    <ul class="nav child_menu">
        <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>


    <?php
                      }
                      ?>
        <?php
                        if ($tipo=="empleado" or $tipo=="administrador" ) {
                    
                      ?>


    
      <?php
                      }
                      ?>

                    </ul>
                  </li>
        <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>
       <li><a href = "../documentos/documentos.php"><i class="fa fa-file"></i> Documentos<span class="fa fa-chevron-right"></span></a>
  
      <?php
                      }
                      ?>


        <?php
                        if ($tipo=="empleado" ) {
                    
                      ?>
       <li><a href = "../documentos/mis_documentos.php"><i class="fa fa-archive"></i>Mis Documentos<span class="fa fa-chevron-right"></span></a>
  
      <?php
                      }
                      ?>


          <?php
                        if ($tipo=="empleado" or $tipo=="administrador" ) {
                    
                      ?>

       

                          <li><a><i class="fa fa-balance-scale"></i> Corte<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
<li><a href="../ubicacion/ubicacion.php">Ubicacion</a></li>
<li><a href="../categoria_corte/categoria_corte.php">Categoria corte</a></li>
<li><a href="../corte/corte.php">Corte</a></li>





                       

                    </ul>
                  </li>
    
      <?php
                      }
                      ?>


                                  <?php
        
                      ?>
                    
                
           <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>
            
                                  <li><a><i class="fa fa-users"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">


  
   <li><a href="../cliente/cliente.php">Cliente</a></li>
    
  
        <li><a href="../empleado/empleado.php">Abogados</a></li>

<li><a href="../usuario/usuario.php">Usuario</a></li>

    
                    </ul>
                  </li>
                      <?php
                      }
                      ?>
           <?php
                      if ($tipo=="empleado" or $tipo=="administrador" ) {
                    
                      ?>
        <li><a href = "../actividades/actividades.php"><i class="fa fa-commenting"></i> Actividades<span class="fa fa-chevron-right"></span></a>
        
    <?php
                      }
                      ?>



                             <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>

                 <li><a><i class="fa fa-gear"></i> Configuracion<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="../configuracion/configuracion.php">Empresa</a></li>
      

                    </ul>
                  </li>


                    
                    <ul class="nav child_menu">

                      <li><a href="../otros/vaciar_bd.php" onClick="return confirm('¿Está seguro de que quieres vaciar la base de datos ??');">Vaciar base de datos</a></li>
       
                       <li><a href="../otros/respaldo_add.php">Respaldo</a></li>

                    </ul>
                  </li>
             <?php
                      }
                      ?>


                   
              </div>
             <!--- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>--->

            </div>
