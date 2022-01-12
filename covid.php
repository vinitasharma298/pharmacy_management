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
            <h2 class="text-black text-center">Covid-19</h2>
              <div class="border text-center">
              <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                <img src="./images/covid1.jpg" alt="Image" class="img-fluid p-4">
              </div>
              </div>
              <div class="col-sm-12">
              <p>
              Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.

Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness. Anyone can get sick with COVID-19 and become seriously ill or die at any age. 

The best way to prevent and slow down transmission is to be well informed about the disease and how the virus spreads. Protect yourself and others from infection by staying at least 1 metre apart from others, wearing a properly fitted mask, and washing your hands or using an alcohol-based rub frequently. Get vaccinated when it’s your turn and follow local guidance.

The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols. It is important to practice respiratory etiquette, for example by coughing into a flexed elbow, and to stay home and self-isolate until you recover if you feel unwell.
            </p>
        
        </div>
            <div class="col-sm-12">
              <p>Protect yourself and those around you:

              <div class="step-number d-flex mb-4" >
                        <span>1</span>
                        <p style="color: lightslategray;">Get vaccinated as soon as it’s your turn and follow local guidance on vaccination.</p>
                                    </p></div>
                        <div class="step-number d-flex mb-4" >
                        <span>2</span>
                        <p style="color: lightslategray;">Keep physical distance of at least 1 metre from others, even if they don’t appear to be sick. Avoid crowds and close contact.
                        </p></div>
                        <div class="step-number d-flex mb-4" >
                        <span>3</span>
                        <p style="color: lightslategray;">Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings.
                        </p></div>
                        <div class="step-number d-flex mb-4" >
                        <span>4</span>
                        <p style="color: lightslategray;">Clean your hands frequently with alcohol-based hand rub or soap and water.
                        </p></div>
                        <div class="step-number d-flex mb-4" >
                        <span>5</span>
                        <p style="color: lightslategray;">Cover your mouth and nose with a bent elbow or tissue when you cough or sneeze. Dispose of used tissues immediately and clean hands regularly. 
                        </p></div>
                        <div class="step-number d-flex mb-4" >
                        <span>6</span>
                        <p style="color: lightslategray;">If you develop symptoms or test positive for COVID-19, self-isolate until you recover.

 



            </p></div>
              </div>
                    
                <div class="col-lg-10">
                <p>What to do if you feel unwell.
                    <div class="title-section">
                    
                    <div class="step-number d-flex mb-4" >
                        <span>1</span>
                        <p style="color: lightslategray;">If you have a fever, cough and difficulty breathing, seek medical attention immediately. Call by telephone first and follow the directions of your local health authority..</p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>2</span>
                        <p style="color: lightslategray;">Know the full range of symptoms of COVID-19. The most common symptoms of COVID-19 are fever, dry cough, tiredness and loss of taste or smell. Less common symptoms include aches and pains, headache, sore throat, red or irritated eyes, diarrhoea,  a skin rash or discolouration of fingers or toes..</p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>3</span>
                        <p style="color: lightslategray;">Stay home and self-isolate for 10 days from symptom onset, plus three days after symptoms cease. Call your health care provider or hotline for advice. Have someone bring you supplies. If you need to leave your house or have someone near you, wear a properly fitted mask to avoid infecting others.</p>
                    </div>

                    <div class="step-number d-flex mb-4">
                        <span>4</span>
                        <p style="color: lightslategray;">Keep up to date on the latest information from trusted sources, such as WHO or your local and national health authorities. Local and national authorities and public health units are best placed to advise on what people in your area should be doing to protect themselves.</p>
                    </div>
                    </div>
                </div>
            <div class="col-md-12">
             
              <p>"PROTECT YOURSELF, PROTECT OTHERS"</p>

                
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
              </a> <a style="color: #007bff;" target="_blank">Vinita...</a>
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