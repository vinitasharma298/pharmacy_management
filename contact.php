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
               
                  <li><a href="about.php">About</a></li>
                  <li class="active"><a href="contact.php">Contact</a></li>
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

    <div class="bg-light py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a><span class="mx-2 mb-0">/</span>
            <strong class="text-black mx-sm-1">Contact</strong>
          </div>
        </div>
      </div>
    </div>

    <div style="padding-left: 0;" class="site-section-contact mx-auto">
      <div class="contact-container w-100">
        
          <div class="row mx-auto ">
         
            <div class="mx-auto to-animate-2" >
            <div class="">
              <h2 class="section-title text-center pt-5 mb-50">Get In Touch</h2>
            </div>
              <form action="contact_database.php" method="post">
    
                <div class="p-3 p-lg-5 border">
                  <div class="form-group row">
                    <div class="col-md-6">
                     <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname" required>
                   </div>
                   <div class="col-md-6">
                     <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="lname" placeholder="Enter Your Last Name" name="lname" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                     <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                     <input type="email" class="form-control" id="email" placeholder="Enter your Email Id" name="email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_subject" class="text-black">Phone Number </label>
                     <input type="text" class="form-control" id="mob" placeholder="Enter your mobile number" name="mob" required>
                   </div>
                 </div>
    
                 <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_message" class="text-black">Message </label>
                      <textarea id="msg" cols="30" rows="7" class="form-control" placeholder="Enter Your Message" name="msg" required></textarea>
                   </div>
                 </div>
                 <div class="form-group row">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message" name="submit">
                    </div>
                  </div>
               </div>
              </form>
            </div>
          </div>
     
          <div class="mx-auto justify-content-center align-content-center">
            <div class="mx-auto contact">
             <figure>
              <p class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.756559816874!2d72.87160481485336!3d19.205832287013518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7275c400003%3A0x7051cdcc8b1cc74f!2sThakur%20Institute%20of%20Management%20Studies%2C%20Career%20Development%20%26%20Research!5e0!3m2!1sen!2sin!4v1637743109405!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
             </figure>
           </div>   
          </div>
      
      </div>
    </div>

<!----footer----->
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

</body>
</html>