<?php

include("../connection.php");
include("../functions.php");
$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (isset($metaDesc)?$metaDesc:'Shopping Cart')?>">
	<meta name="author" content="Ahsan Zameer">
  
    <title><?php echo (isset($pageTitle)?$pageTitle:'PHP Shopping Cart')?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">


  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div style="min-height:100vh;" class=" site-wrap ">
        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="../index.php" class="js-logo-clone"><strong class="text-primary">CHEMIST+</strong>24</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="../index.php">Home</a></li>
                        <li class="active"><a href="../shop.php">Store</a></li>
               
                <li><a href="../product.php">Product</a></li>
               
                        <li><a href="../about.php">About</a></li>
                        <li class=""><a href="../contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    </div>
                     <div class="icons">
                            
                          
                            <a href="../logout.php"> Welcome,</a> 
                            <?php 
                                echo $user_data['user_name'] ; 
                                ?> 
                      
                        </div>
                </div>
            </div>
        </div>
        <div class="container bg-white">
        <div class="container bg-white">
                
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="../shop.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="cart.php" style="color:#ffffff">
                            <i class="bi bi-cart4" style="font-size:30px;"></i>
                            <?php 
                                echo (isset($_SESSION['cart_items']) && count($_SESSION['cart_items'])) > 0 ? count($_SESSION['cart_items']):'';
                            ?>
                        </a>
                    </div>
                    
                </nav>
        
    
