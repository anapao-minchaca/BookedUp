<?php

session_start();
    
$enlace = mysqli_connect("sql302.epizy.com", "epiz_25893342", "o8dvj5oNer2", "epiz_25893342_Books");
$Username = $_SESSION["Username"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Booked Up - Los mejores libros | Cambiar Información</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php
    function get() 
    {  
        $insert_query = mysqli_query($enlace, "INSERT INTO Cliente
        (`Username`)
        VALUES
        ('KAM');"); 
    } 
    ?>
    <style>
    body {
        background-image: url('img/bg-img/bg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    </style> 
    <div style="background-image: url('img/bg-img/bg.jpg');"> 
    <?php
    error_reporting(E_ALL); //DEBUG
    ini_set('display_errors', 1);  //DEBUG

    //$nombre = $_POST['nombre'];
    $nombre = '851617068281';
    //$enlace = mysqli_connect("127.0.0.1", "clienteUsuario", "Pass123!", "Books");
    $enlace = mysqli_connect("sql302.epizy.com", "epiz_25893342", "o8dvj5oNer2", "epiz_25893342_Books");
            $Num_Ext = $Num_Int = $Colonia = $Ciudad = $Calle = $CP = $Estado = '';
    if(isset($_POST['submit'])){
        $Num_Ext = mysqli_real_escape_string($enlace, $_POST['Num_Ext']);
        $Num_Int = mysqli_real_escape_string($enlace, $_POST['Num_Int']);
        $Colonia = mysqli_real_escape_string($enlace, $_POST['Colonia']);
        $Ciudad = mysqli_real_escape_string($enlace, $_POST['Ciudad']);
        $Calle = mysqli_real_escape_string($enlace, $_POST['Calle']);
        $CP = mysqli_real_escape_string($enlace, $_POST['CP']);
        $Estado = mysqli_real_escape_string($enlace, $_POST['Estado']);

        $sql = "UPDATE Cliente SET Num_Ext = '$Num_Ext' WHERE Cliente.Username = '$Username'";
        $sql1 = "UPDATE Cliente SET Num_Int = '$Num_Int' WHERE Cliente.Username = '$Username'";
        $sql2 = "UPDATE Cliente SET Colonia = '$Colonia' WHERE Cliente.Username = '$Username'";
        $sql3 = "UPDATE Cliente SET Ciudad = '$Ciudad' WHERE Cliente.Username = '$Username'";
        $sql4 = "UPDATE Cliente SET Calle = '$Calle' WHERE Cliente.Username = '$Username'";
        $sql5 = "UPDATE Cliente SET CP = '$CP' WHERE Cliente.Username = '$Username'";
        $sql6 = "UPDATE Cliente SET Estado = '$Estado' WHERE Cliente.Username = '$Username'";

        if(mysqli_query($enlace, $sql)){  
        }
        if(mysqli_query($enlace, $sql1)){  
        }
        if(mysqli_query($enlace, $sql2)){  
        }
        if(mysqli_query($enlace, $sql3)){  
        }
        if(mysqli_query($enlace, $sql4)){  
        }
        if(mysqli_query($enlace, $sql5)){  
        }
        if(mysqli_query($enlace, $sql6)){  
        }
        header( "Location: http://bookedup.epizy.com/checkout.php" );
        exit ;    

    }


   /* if($enlace)
        echo "Conexión exitosa.<br>";
    else
        die("Conexión no exitosa.");*/

    //$nombre = mysql_real_escape_string($nombre);
        
    $query = "select * from Libro where SKU like '%$nombre%';";    
        
    $resultado_query = mysqli_query($enlace, $query) ; 
        
    /*
    <?php
    $insert_query = mysqli_query($enlace, "INSERT INTO Cliente
    (`Username`, `Contrasena`, `Nombres`, `Apellidos`, `Num_Ext`,`Num_Int`,`Colonia`,`Ciudad`,`Calle`,`CP`,`Estado`,`No_tarjeta`,`CVV`,`Fecha_exp`,`mail`)
    VALUES
    (123459, 'Carlos', '1:00-3:00', 'Mesero plus', '7999.99', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2'', 'PISO 2');");
    ?>
    */
    
    ?>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/cucu.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/cucu.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->

            <!-- Cart Menu -->
            <!-- Social Button -->
             <div class="social-info d-flex justify-content-between">
                <a href="https://www.misprofesores.com/profesores/Luis-Yepez_61887" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.researchgate.net/profile/Luis_Yepez_Perez" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.doctoralia.com.mx/luis-yepez-perez/ginecologo/ciudad-de-mexico" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="http://data.consejeria.cdmx.gob.mx/portal_old/uploads/gacetas/a3af223f6e656a8c64020cb9bad6d50b.pdf" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Actualizar Información</h2>
                            </div>

                            <form action="cambiarinf.php" method="post">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <select class="w-100" name="Estado" required>
                                        <option value="CDMX">CDMX</option>
                                        <option value="Estado de Mexico">EDO MEX</option>
                                        <option value="Nuevo Leon">NUEVO LEON</option>
                                        <option value="Jalisco">JALISCO</option>
                                        <option value="Guerrero">GUERRERO</option>
                                        <option value="Chiapas">CHIAPAS</option>
                                        <option value="Chihuahua">CHIHUAHUA</option>
                                        <option value="Coahuila">COAHUILA</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="Ciudad" placeholder="Ciudad" value="" required>
                                    </div>
                                    <div class="col-8 mb-3">
                                        <input type="text" class="form-control" name="Calle" placeholder="Calle" value="" required>
                                    </div>
                                    <div class="col-4 mb-3">
                                        <input type="text" class="form-control" name="Colonia" placeholder="Colonia" value="" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" class="form-control" name="Num_Ext" placeholder="Numero Exterior" value="" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" class="form-control" name="Num_Int" min="0" placeholder="Numero Interior" value="" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" class="form-control" name="CP" placeholder="CP" value="" required>
                                    </div>

                                </div>      
                                        <div class="cart-summary mt-0">
                                            <div class="cart-btn">
                                                <input type="submit" name="submit" value="Actualizar" class="btn amado-btn w-100">
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-.5">

                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-.5">
                        <form action="#" method="post">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.php"><img src="img/core-img/cucu2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Maximiliano S. & Ana M. & Karen M. </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>