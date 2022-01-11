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
            
            
            Welcome, <?php 
            echo $user_data['user_name']; 
             ?> 
           
          </div>
        </div>
      </div>
    </div>  
  
    <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-14 mr-auto">
            <h2 class="text-black text-center">Vitamis</h2>
              <div class="border text-center">
              <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                <img src="./images/vitamins1.jfif" alt="Image" class="img-fluid p-4">
              </div>
              </div>
              <div class="col-sm-12">
              <p>
              Vitamins are usually designated by selected letters of the alphabet, as in vitamin D or vitamin C, though they are also designated by chemical names, such as niacin and folic acid. Biochemists traditionally separate them into two groups, the water-soluble vitamins and the fat-soluble vitamins. 
            
            </p>
            <p>
            vitamin, any of several organic substances that are necessary in small quantities for normal health and growth in higher forms of animal life.
             Vitamins are distinct in several ways from other biologically important compounds such as proteins, carbohydrates, and lipids. 
             Although these latter substances also are indispensable for proper bodily functions, almost all of them can be synthesized by animals in adequate quantities. 
            
            </p>
        
        </div>
            <div class="col-sm-12">
              <p>
              Vitamins are usually designated by selected letters of the alphabet, as in vitamin D or vitamin C, though they are also designated by chemical names, such as niacin and folic acid. Biochemists traditionally separate them into two groups, the water-soluble vitamins and the fat-soluble vitamins. 
            
            </p>
          </div>
              </div>
                    
                <div class="col-lg-10">
                    <div class="title-section">
                    
                    <div class="step-number d-flex mb-4" >
                        <span>Vit-A</span>
                        <p style="color: lightslategray;">
                        Vitamin A is a fat-soluble vitamin that is stored in the liver.
                        Vitamin A helps form and maintain healthy teeth, skeletal and soft tissue, mucus membranes, and skin. 
                        It is also known as retinol because it produces the pigments in the retina of the eye.
                      </p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>Vit-B</span>
                        <p style="color: lightslategray;">B vitamins are a group of eight essential nutrients that play roles in many organs and bodily systems. 
                        Although they can work together in the body, they also carry out their own unique functions.</p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>Vit-C</span>
                        <p style="color: lightslategray;">Vitamin C, also known as L-ascorbic acid, is a water-soluble vitamin that is naturally present in some foods, added to others, and available as a dietary supplement. 
                        Humans, unlike most animals, are unable to synthesize vitamin C endogenously, so it is an essential dietary component</p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>Vit-D</span>
                        <p style="color: lightslategray;">Vitamin D is essential for several reasons, including maintaining healthy bones and teeth. 
                        It may also protect against a range of diseases and conditions, such as type 1 diabetes.

Despite its name, vitamin D is not a vitamin, but a prohormone, or precursor of a hormone.</p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>Vit-E</span>
                        <p style="color: lightslategray;">Vitamin E is a fat-soluble vitamin. Your body stores vitamin E in fatty tissue and the liver.</p>
                    </div>
                    </div>
                </div>
            <div class="col-md-12">
             
              <p> Vitamins, on the other hand, generally cannot be synthesized in amounts sufficient to meet bodily needs and therefore must be obtained from the diet or from some synthetic source. 
             For this reason, vitamins are called essential nutrients. Vitamins also differ from the other biological compounds in that relatively small quantities are needed to complete their functions.
              In general these functions are of a catalytic or regulatory nature, facilitating or controlling vital chemical reactions in the body’s cells. 
            If a vitamin is absent from the diet or is not properly absorbed by the body, a specific deficiency disease may develop.</p>
              
             

                
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
              </a> <a style="color: #007bff;" target="_blank">Vinita | Daksha | Sakshi...</a>
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