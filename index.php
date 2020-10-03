<?php 

include("includes/db.php");
include("functions/functions.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connections SA</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

   
  <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
         <br>  
          
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/logo.png" alt="Store Logo">
                   
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Browse</a>
                       </li>
                      
                     
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
              
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->





   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                  
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                  
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->

<?php
include("includes/sidebar_2.php");
?>
   
   
  <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                    Top Sellers
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
          
          <?php 
           
           get3Pro();
           
           ?>
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>