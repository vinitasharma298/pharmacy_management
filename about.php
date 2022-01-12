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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="shop.php">Store</a></li>
               
                <li><a href="product.php">Product</a></li>
                
                  <li class="active"><a href="about.php">About</a></li>
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

    <div class="site-blocks-cover overlay" style="background-image: url('images/h.gif');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto align-self-center">
            <div class="site-block-cover-content text-center">
              <h1 class="mb-0">We Care <strong class="text-primary">About You</strong></h1>
              <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                  <p>Your health is first priority,Here we are concern about you and your health.<br>
                    We are here to provide Medicine and take care of your health.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section py-5" data-aos="fade">
      <div class="container">
        <div class="row w-100">
          <div class="w-100">
            <div class="p-0 w-100 why-us text-center mx-auto">
              <h1 class="text-black h3 text-center">Why <strong class="text-primary">Us</strong></h1>
              
              <p class="p-0 about-us text-center" style="text-align: inline;">
                Chemist+ 24 is an online, healthcare media publishing company.
                 We provide easy-to-read, in-depth, authoritative medical information for consumers via its robust, user-friendly, interactive website .           
                 Online Medical Store It is a Online Pharmacy, ayurvedic store,Health Store - Its a one stop shop that offers effective Medical products, healthcare solutions to all those individuals who are health enthusiasts. Providing over 20,000 health  and ayurvedic herbal medicines online at the lowest guaranteed price - with the highest pharmaceutical standards. 
                We offer premium and the largest range of original health and fitness products across various categories and leading brands. We dedicate this portal to all those people who are keen to purchase healthcare products online.
              </p>
                <p>The aim is to supply cheaper products to everybody who has access to the internet and deliver those products to their door. Through harnessing the power of the internet and supplying you directly, this website will save up to 75% off the cost of many well known products found in your local Medical Shop.
                We aim at covering various healthcare categories comprehensively which include –Diabetes,Nutrition,Sports and fitness,Body Building, Beauty care and Personel Care Produts,Mother and Baby Care and Health Devices. We enjoy comprehensive understanding of the shopper’s needs and make our best efforts to cater them with an extensive choice of both Indian and globalbrands
                </p>
                

            </div>
          </div>
        </div>
      </div>
    </div>   

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">


          <div class="title-section text-center col-md-7">
            <h2><strong class="text-primary">Developed by</strong></h2>
          </div>

        </div>
        <div class="row">
         
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/vinita_img.png" alt="Image placeholder" class="mb-4">
                  <h3 class="block-38-heading h4">Vinita Sharma</h3>
                  <p class="block-38-subheading">Team Member</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/inject.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
         <div class="col-lg-7">
           <h3 class="text-white">Sign up for discount up to 25%-30% OFF</h3>
           <p class="text-white">Join with ur for more offoers and discount.</p>
           <p class="mb-0"><a href="login.php" class="btn btn-outline-white">Sign up</a></p>
         </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0 aos-init aos-animate" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck text-primary"></span>
            </div>
            <div class="text">
            <h2>Free Shipping</h2>
              <p>The delievery cost will be free all over india. </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2 text-primary"></span>
            </div>
            <div class="text">
            <h2>Return Policy</h2>
              <p>The item purchased from our site can be exchanged incase of expired product within 2days. While Returning the product the product should not be used.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help text-primary"></span>
            </div>
            <div class="text">
              <h2>Customer Support</h2>
              <p>For any queries and questions you can contact us at quality of the services provided by my medical shop and to build new services.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-------Footer-------->

     <?Php
      include('footer.php');
     ?>
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