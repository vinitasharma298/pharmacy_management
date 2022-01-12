<?php
session_start();

require_once('./shopping-cart/inc/config.php');    
    require_once('./shopping-cart/inc/helpers.php');  


    $sql = "SELECT p.*,pdi.img from products p
                    INNER JOIN product_images pdi ON pdi.product_id = p.id
                    WHERE pdi.is_featured = 1";
    $handle = $db->prepare($sql);
    $handle->execute();
    $getAllProducts = $handle->fetchAll(PDO::FETCH_ASSOC);

  
   
    $pageTitle = 'Your Cart';
	$metaDesc = 'Demo PHP shopping cart get products from database';

?>

<?php

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
                    <li class="active"><a href="shop.php">Store</a></li>
                
                <li><a href="product.php">Product</a></li>
              
                    <li><a href="about.php">About</a></li>
                    <li class="#"><a href="contact.php">Contact</a></li>
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
  

<!-----SHOP CART------>

<div class="container mx-auto">
<div class="row">
        <?php
        foreach($getAllProducts as $product)
        {
            $imgUrl = PRODUCT_IMG_URL.str_replace(' ','-',strtolower($product['product_name']))."/".$product['img'];
        ?>
            <div class="col-md-3  mt-2">
                <div class="card" style="min-height:30rem; justify-content:space-around;">
                     <a href="./shopping-cart/single-product.php?product=<?php echo $product['id']?>">
                        <img class="card-img-top" src="<?php echo $imgUrl ?>" alt="<?php echo $product['product_name'] ?>">
                    </a>
                    <div class="card-body" style="flex: none;">
                        <h5 class="card-title">
                            <a href="./shopping-cart/single-product.php?product=<?php echo $product['id'] ?>">
                                <?php echo $product['product_name']; ?>
                            </a>
                        </h5>
                        <strong><span>&#8377;</span> <?php echo $product['price']?></strong>

                        <p class="card-t">
                            <?php echo substr($product['short_description'],0,50) ?>'...
                        </p>
                        <p class="card-text">
                            <a href="./shopping-cart/single-product.php?product=<?php echo $product['id']?>" class="btn btn-primary btn-sm">
                                View
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php 
        }
        ?>
    </div>

  </div>


  <div class="container-fluid my-5">
    <div class="" id="pagination">
      
    </div>
		<div class="col-md-12">
			<div class="row show_data">
				
			</div>
		</div>
	</div>


	<script type="text/javascript">
		
       $(document).ready(function(){
           
             load_data();
           function load_data(page){


           	$.ajax({
               url: "ajax/load_data.php",
               method: "POST",
               data:{page:page},
               dataType:"JSON",
               success:function(data){
                $(".show_data").html(data.output);
                $("#pagination").html(data.pagination);
               }
           	});
           }

        $(document).on("click", ".pagination a",function(event){
        event.preventDefault();
          var id  = $(this).attr("id");
          load_data(id);
       });



           function show_mycart(){
              $.ajax({
              url: "ajax/show_mycart.php",
              method:"POST",
              dataType:"JSON",
              success:function(data){
                $("#cart").text(data.da);
              }
           });
           }

       });

       $(document).on("click",".add_cart", function(event){
       	event.preventDefault();
           var id = $(this).attr("id");
           var name = $("#name"+id+"").val();
           var price = $("#price"+id+"").val();
           var quantity = $("#quantity"+id+"").val();
           var action = "add";


           $.ajax({
              url: "ajax/cart_action.php",
              method:"POST",
              dataType:"JSON",
              data: {id:id,name:name,price:price,quantity:quantity,action:action},
              success:function(data){
                 
              }
           });
       });
	</script>
    

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