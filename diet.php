<?php
session_start();

include("connection.php");
include("functions.php");
$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> Chemist &mdash; Pharmative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">

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
              <a href="index.php" class="js-logo-clone"><strong class="text-primary">CHEMIST+</strong>24</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class=""><a href="index.php">Home</a></li>
                <li class=""><a href="shop.php">Store</a></li>
               
                <li class="active"><a href="product.php">Product</a></li>
                
                <li><a href="about.php">About</a></li>
                <li class=""><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="icons">
            
           
            <a href="./logout.php"> Welcome,</a> 
           <?php 
            echo $user_data['user_name'] ; 
             ?> 
           
          </div>
        </div>
      </div>
    </div>  
  
    <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-14 mr-auto">
            <h2 class="text-black text-center">Diet &amp; Nutrition</h2>
              <div class="border text-center">
              <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                <img src="./images/diet1.jfif" alt="Image" class="img-fluid p-4">
              </div>
              </div>
              <div class="col-sm-12">
              <p>
              Nutrition differs from diet. People need to be aware of nutrition and how crucial it is to the improvement of their health. 
              Diet and nutrition are two factors that your consumers need to know about and it’s important to recognize the difference between the two. 
              As a food service provider, your business revolves around helping your customers achieve a good diet and proper nutrition.
            </p>
            <p>
            A diet like this leads to improved health, enhanced vitality, and increased energy. 
            It is also known to combat many diseases and health issues by lowering cholesterol.
             It also protects against type 2 diabetes and cognitive decline and prevents heart disease.
            </p>
        
        </div>
            <div class="col-sm-12">
              <p>
                    Prevention Health authority logo Public Service Announcement Google Stopping the spreadstarts with you
                    Wear a mask.Clean your hands.Maintain safe distance.
                    Get vaccinated.General public health information
                    More Info Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.

            </p></div>
              </div>
                    
            <div class="col-md-12">
             
              <p>Nutrition differs from diet. People need to be aware of nutrition and how crucial it is to the improvement of their health. 
              Diet and nutrition are two factors that your consumers need to know about and it’s important to recognize the difference between the two. 
              As a food service provider, your business revolves around helping your customers achieve a good diet and proper nutrition.</p>
              
              <p>A diet like this leads to improved health, enhanced vitality, and increased energy. 
                It is also known to combat many diseases and health issues by lowering cholesterol. 
                It also protects against type 2 diabetes and cognitive decline and prevents heart disease.</p>

                <p>Nutrition differs from diet. People need to be aware of nutrition and how crucial it is to the improvement of their health. 
              Diet and nutrition are two factors that your consumers need to know about and it’s important to recognize the difference between the two. 
              As a food service provider, your business revolves around helping your customers achieve a good diet and proper nutrition.</p>

                
            </div>
          </div>
        </div>
      </div>

   
    <!-----Footer------>

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-8">We Care <strong class="text-primary">Chemist</strong></h3>
              <p>we are providing medicine which have fever,cough,headech,mask hand wash and handsentizer etc.</p>
            </div>

           </div>
        

            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-2">

              <h3 class="footer-heading mb-6">Go <strong class="text-primary">Here</strong></h3>
              <ul class="list-unstyled">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./shop.php">Store</a></li>
                <li><a href="./product.php">Product</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
                </ul>

            </div>
            
            <div class="col-md-3 mb-md-0 mb-3">

              <h3 class="footer-heading mb-6">Go <strong class="text-primary">Here</strong></h3>
              <ul class="list-unstyled">
                <li><a href="./covid.php">Covid-19</a></li>
                <li><a href="./supplement.php">Supplements</a></li>
                <li><a href="./vitamins.php">Vitamins</a></li>
                <li><a href="./diet.php">Diet &amp; Nutrition</a></li>
                </ul>

            </div>
           
        
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Shop no.105, Borivali Indraprasth building near station.</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">contact@wecarechemist.com</li>
              </ul>
            </div>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>

              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by 
              </a> <a style="color: #007bff;" target="_blank">...</a>
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>