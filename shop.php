
<?php

session_start();
    
$enlace = mysqli_connect("sql302.epizy.com", "epiz_25893342", "o8dvj5oNer2", "epiz_25893342_Books");
$Username = $_SESSION["Username"];
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

if (isset($_GET['enviar'])) 
{
    echo '<script>alert("Gracias por su compra, pronto recibirá un correo de confirmación de orden.")</script>'; 
}

if($Username=='coco'){
    header( "Location: http://bookedup.epizy.com/admin.php" );
    exit;
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
    <title>Booked Up - Los mejores libros | Shop</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
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
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <form action="#" method="post">
            <div class="amado-btn-group mt-30 mb-30">
                <form action="#" method="post">
                <input type="submit" name="submit" value="<?php if(isset($_SESSION['Username'])) echo "Log Out"; else echo "Log In" ?>" class="btn amado-btn active">
                </form>
           </div>
           </form>
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

        

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

            <div class="header">
                <h1>Libros</h1>
            </div> 

                <div class="row">
                    <!-- Single Product Area -->
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '173216744891' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '173216744891' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '173216744891' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>
                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '173216744891' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  
                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-left">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "173216744891"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '305178183775' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '305178183775' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '305178183775' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '305178183775' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "305178183775"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '143932911323' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '143932911323' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '143932911323' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '143932911323' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "143932911323"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '780616115592' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '780616115592' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '780616115592' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '780616115592' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "780616115592"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '975021324798' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '975021324798' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '975021324798' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '975021324798' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "975021324798"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '506436004188' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '506436004188' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '506436004188' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '506436004188' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "506436004188"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '467974702359' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '467974702359' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '467974702359' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '467974702359' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "467974702359"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '447213912717' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '447213912717' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '447213912717' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '447213912717' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "447213912717"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '695055278612' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '695055278612' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '695055278612' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '695055278612' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "695055278612"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '669551870586' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '669551870586' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '669551870586' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '669551870586' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "669551870586"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '799246826010' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '799246826010' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '799246826010' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '799246826010' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "799246826010"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '988708115766' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '988708115766' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '988708115766' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '988708115766' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "988708115766"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '536189332112' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '536189332112' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '536189332112' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '536189332112' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "536189332112"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4 col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '102969360763' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '102969360763' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '102969360763' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '102969360763' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "102969360763"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-4col-md-12 col-xl-4">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="img__wrap">
                                <img class="img__img" 
                                
                                src="img/product-img/<?php $sql = "SELECT ID_Img FROM Libro where SKU like '360462822963' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["ID_Img"];
                                }
                                ?> " 
                                
                                alt="">
                                <p class="img__description"> 

                                <?php $sql = "SELECT Sinopsis FROM Libro where SKU like '360462822963' "; $result = $enlace->query($sql); 
                                while($row = $result->fetch_assoc()) {
                                    echo $row["Sinopsis"]. ".<br>";
                                }
                                ?> 
                                
                                </p>
                                
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">
                                        <?php $sql = "SELECT Precio FROM Libro where SKU like '360462822963' "; $result = $enlace->query($sql); 
                                        while($row = $result->fetch_assoc()) {
                                        echo "$" . $row["Precio"]. "<br>";
                                        }
                                        ?> 
                                    </p>
                                    <a>
                                        <h6>

                                            <?php $sql = "SELECT Titulo FROM Libro where SKU like '360462822963' "; $result = $enlace->query($sql); 
                                            while($row = $result->fetch_assoc()) {
                                                echo $row["Titulo"];
                                            }
                                            ?>  

                                        </h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="cart">
                                    <form method="post" action="cart.php?action=add&id=<?php echo "360462822963"; ?>">
                                        <input type="image" name="add" src="img/core-img/cart.png" alt="submit" data-toggle="tooltip" data-placement="left" title="Agregar al carrito">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="shop.php">01.</a></li>
                                <li class="page-item"><a class="page-link" href="shop2.php">02.</a></li>
                            </ul>
                        </nav>
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