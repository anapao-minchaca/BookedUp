<?php

     session_start();
    
$enlace = mysqli_connect("sql302.epizy.com", "epiz_25893342", "o8dvj5oNer2", "epiz_25893342_Books");

if (isset($_POST['submit']))
{
   if(isset($_SESSION['Username'])) // if session status is none then start the session
    {
        session_destroy();
        header( "Location: http://bookedup.epizy.com/index.php" );
        exit ;
    } else {
        header( "Location: http://bookedup.epizy.com/login.php" );
    }
}
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
    <title>Booked Up - Los mejores libros | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <style>
    body {
        background-image: url('img/bg-img/bg2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    </style> 
    <?php
    error_reporting(E_ALL); //DEBUG
    ini_set('display_errors', 1);  //DEBUG

    //$nombre = $_POST['nombre'];
    $nombre = '851617068281';
    //$enlace = mysqli_connect("127.0.0.1", "clienteUsuario", "Pass123!", "Books");
    $enlace = mysqli_connect("sql302.epizy.com", "epiz_25893342", "o8dvj5oNer2", "epiz_25893342_Books");
   /* if($enlace)
        echo "Conexión exitosa.<br>";
    else
        die("Conexión no exitosa.");*/

    //$nombre = mysql_real_escape_string($nombre);
        
    $query = "select * from Libro where SKU like '%$nombre%';";    
        
    $resultado_query = mysqli_query($enlace, $query) ; 
        
    /*
    $insert_query = mysqli_query($enlace, "INSERT INTO EMPLEADO
    (`nomina`, `nombre`, `horario`, `puesto`, `salario`,`sucursal`)
    VALUES
    (123459, 'Carlos', '1:00-3:00', 'Mesero plus', '7999.99', 'PISO 2');");
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
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->

            <!-- Cart Menu -->
            
            <!-- Social Button -->
            <p>‌‌ ‌‌ </p>
            <p>‌‌ ‌‌ </p>
            <p>‌‌ ‌‌ </p>
            <p>‌‌ ‌‌ </p>
            <p>‌‌ ‌‌ </p>
           <div class="social-info d-flex justify-content-between">
                <a href="https://www.misprofesores.com/profesores/Luis-Yepez_61887" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="https://www.researchgate.net/profile/Luis_Yepez_Perez" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.doctoralia.com.mx/luis-yepez-perez/ginecologo/ciudad-de-mexico" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="http://data.consejeria.cdmx.gob.mx/portal_old/uploads/gacetas/a3af223f6e656a8c64020cb9bad6d50b.pdf" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start --><!-- Product Catagories Area Start --><!-- Product Catagories Area Start -->

        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
                    
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                        
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div> 
                                <h4>
                                    <form action="#" method="post">
                                        <div class="amado-btn-group">
                                            <form action="#" method="post">
                                                <input type="submit" name="submit" value="<?php if(isset($_SESSION['Username'])) echo "Log Out"; else echo "Log In" ?>" class="btn cart-btn active">
                                            </form>
                                        </div>
                                    </form>
                                </h4>
                            </div>
                </div>

            </div>
        </div>

        

        <!-- Product Catagories Area End -->
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