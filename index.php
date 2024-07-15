<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">
        <link rel="icon" href="../inicio/image.png"> </link>
     <link rel="stylesheet" href="estilosPortada/estilos.css">
        <!-- Favicon -->
        <link href="<?php echo $URL;?>/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="portada/Portada_index/lib/animate/animate.min.css" rel="stylesheet">
        <link href="portada/Portada_index//lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Template Stylesheet -->
        <link href="portada/Portada_index/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        
    </head>

    <body class="page">
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 - 19:00</h2>
                                <p>Lunes - Viernes</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+591 63332340</h2>
                                <p>Para cita previa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="<?php echo $URL;?>/login/index.php" class="navbar-brand">Confer</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="inicio/index.php" class="nav-item nav-link">Inicio</a>
                        <a href="inicio/contacto.php" class="nav-item nav-link ">Contacto</a>
                        <div class="nav-item dropdown">
                            <div class="dropdown-menu"></div>
                        </div>
                        <a href="index.php" class="nav-item nav-link active">Cliente</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
      
  <?php  require('Portada.php') ?>


        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="portada/Portada_indexx/lib/easing/easing.min.js"></script>
        <script src="portada/Portada_index/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="portada/Portada_index/lib/waypoints/waypoints.min.js"></script>
        <script src="portada/Portada_index/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="portada/Portada_index/mail/jqBootstrapValidation.min.js"></script>
        <script src="portada/Portada_index/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="portada/Portada_index/js/main.js"></script>

        
    </body>
</html>
