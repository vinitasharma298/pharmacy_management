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

<style>
.container {
  position: relative;
  width: 100%;
}  
.img-fluid p-8 {
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: lightskyblue ;
  overflow: hidden;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transition: .3s ease;
}

.container:hover .overlay {
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Store</a></li>
             
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
            <div class="col-md-5 mr-auto">
              <div class="border text-center">
              <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                <img src="./images/covid2.jpg" alt="Image" class="img-fluid p-8">
                <div class="overlay">
                  <div class="text"> <img src="./images/covid2.jpg" alt="Image" class="img-fluid p-8"></div>
                </div>
              </div>
              </div>
              </div>
            
            <div class="col-md-6">
              <h2 class="text-black">Covid-19</h2>
             
              <p>Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.

Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age. 

The best way to prevent and slow down transmission is to be well informed about the disease and how the virus spreads.

                <p>
                  <a href="./covid.php" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
      
        <script>
            function on() {
            document.getElementById("overlay").style.display = "block";
          }

          function off() {
            document.getElementById("overlay").style.display = "none";
          }
       </script>

      <div class="site-section">
        <div class="container">
          <div class="row">
           
            <div class="col-md-6">
              <h2 class="text-black">Supplements</h2>
              <p>A supplement is an addition to something that completes it or makes up for a shortcoming, as in He takes vitamin supplements to make up for his vitamin C deficiency.

A supplement is also an addition to a book that provides important information or corrects errors.</p>
                <a href="./supplement.php" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
            <div class="col-md-5 mr-auto">
              <div class="border text-center">
                <img src="./images/supplement.jfif" alt="Image" class="img-fluid p-8">
                <div class="overlay">
                  <div class="text"> <img src="./images/supplement.jfif" alt="Image" class="img-fluid p-8"></div>
                </div>
              </div>
            </div>
         </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mr-auto">
              <div class="border text-center">
                <img src="./images/vitamins.jfif" alt="Image" class="img-fluid p-8">
                <div class="overlay">
                  <div class="text"> <img src="./images/vitamins.jfif" alt="Image" class="img-fluid p-8"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="text-black">Vitamins</h2>
              <p>
                Vitamins are usually designated by selected letters of the alphabet, as in vitamin D or vitamin C, though they are also designated by chemical names, such as niacin and folic acid. Biochemists traditionally separate them into two groups, the water-soluble vitamins and the fat-soluble vitamins. 

              </p>

              
                <a href="./vitamins.php" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
           
            <div class="col-md-6">
              <h2 class="text-black">Diet & Nutrition</h2>
              <p>Nutrition differs from diet. People need to be aware of nutrition and how crucial it is to the improvement of their health.
                 Diet and nutrition are two factors that your consumers need to know about and it’s important to recognize the difference between the two. 
                As a food service provider, your business revolves around helping your customers achieve a good diet and proper nutrition.</p>
                <a href="./diet.php" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
            <div class="col-md-5 mr-auto">
              <div class="border text-center">
                <img src="./images/diet3.jfif" alt="Image" class="img-fluid p-8">
                <div class="overlay">
                  <div class="text"> <img src="./images/diet3.jfif" alt="Image" class="img-fluid p-8"></div>
                </div>
              </div>
            </div>
         </div>
        </div>
      </div>





      
    
    

    <!---Footer---->
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