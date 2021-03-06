<?php  
include "includes/dbconnection.php";

$sql_user = "SELECT * FROM signup WHERE user_id='".$_SESSION['user_id']."'";


//var_dump($_SESSION);
$query_user = mysqli_query($dbCon,$sql_user);
echo mysqli_error($dbCon);
$user = mysqli_fetch_array($query_user);




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    
    
    <title>Helper - Senior Profile</title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">  
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="assets/fonts/themify-icons.css"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />
    
  </head>

  <body>  
      <!-- Header Section Start -->
      <div class="header">    
        <div class="logo-menu">
          <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="assets/img/logo.png" alt=""></a>
              </div>

              <div class="collapse navbar-collapse" id="navbar">              
                 <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                  <li>
                    <a href="AcceptService.html">Accept Service </a>
                  </li>
                  <li>
                    <a href="myservices.php">My Services </a> 
                  </li>
                  
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                    <li class="right"><a href="includes/logout.php"><i class="ti-user"></i> Sign Out</a></li>
                </ul>
              </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a href="requestService.php">Request Service</a>                       
              </li>
              <li>
                <a href="myservices.php">My Services</a>
              </li>
              <li class="btn-m"><a href="includes/logout.php"><i class="ti-user"></i>  Sign Out</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>

          <!-- Off Canvas Navigation -->
          
      <!-- Header Section End -->  

      <!-- Page Header Start -->
      <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
              <div class="breadcrumb-wrapper">
                <h2 class="product-title">Accept Services</h2>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="ti-home"></i> Helper</a></li>
                  <li class="current">Accept Services</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End --> 

      <section class="section text-center" >
      <div class="container">
                <!-- Start Animations Text -->
                <!-- Profile Section Start -->
    <section class="find-job section">
      
                <!--content-->
	     <!-- Header Section End -->  
 <!-- Find Job Section Start -->
    <section class="find-job section" style="color: black">
      <div class="container">
        <h2 class="section-title">Accept Services</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Need a Fulltime Cook</a><span class="pending">Pending</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <div class="meta-tag"><span><i class="ti-tag"></i></span>
                      <span><i class="ti-info"></i>Nursing</span>
                      <span><i class="ti-calendar"></i>2-18-11-03</span>
                      <span><i class="ti-time"></i>1.00 PM</span>
                    
                    </div>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-star"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Accept</a>
                      <a href="job-details.html" class="btn btn-common btn-rm">Reject</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-2.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Require Nanny/Nurse</a><span class="rejected">Rejected</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. rehenderit, officiis, praesentium?</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag"><span><i class="ti-tag"></i>1009</span>
                      <span><i class="ti-info"></i>Nursing</span>
                      <span><i class="ti-calendar"></i>2-18-11-03</span>
                      <span><i class="ti-time"></i>1.00 PM</span>
                    
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-shine"></i>
                      </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Rejected</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-list">
              <div class="thumb">
                <a href="job-details.html"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
              </div>
              <div class="job-list-content">
                <h4><a href="job-details.html">Part time Maid</a><span class="complete">Completed</span></h4>
                <p>Looking for a part time maid to Clean the house thrice a week and to run some errands.
Contact me on 01234567 if interested. Accept and call if confirmed</p>
                <div class="job-tag">
                  <div class="pull-left">
                    <div class="meta-tag">
                      <span><i class="ti-tag"></i>1008</span>
                      <span><i class="ti-info"></i>Cleaning</span>
                      <span><i class="ti-calendar"></i>2018-10-12</span>
                      <span><i class="ti-time"></i>12.50 PM</span>
                    </div>
                  </div>
                  <div class="pull-right">
                    <div class="icon">
                      <i class="ti-shine"></i>
                    </div>
                    <a href="job-details.html" class="btn btn-common btn-rm">Completed</a>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          
          <div class="col-md-12">
            <div class="showing pull-left">
              <a href="#">Showing <span>1-3</span> Of 3 Jobs</a>
            </div>                    
            <ul class="pagination pull-right">              
              <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
              <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
              <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
            </ul>
          </div>
    </section>
    <!-- Find Job Section End -->
          <!-- Off Canvas Navigation -->
          </section>
</div></section>

     	<!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<section class="footer-Content">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title"><img src="assets/img/logo.png" class="img-responsive" alt="Footer Logo"></h3>
                <div class="textwidget">
                  <p>Helper is a web application that provides support to elderly citizen.<br>
                  Helper focuses mainly on providing better solutions for the elderly.
                  </p>
                </div>
              </div>
            </div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
    					<div class="widget">
    						<h3 class="block-title">Quick Links</h3>
  							<ul class="menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="faq.html">Faqs</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                  <h3 class="block-title">Follow Us</h3>
                  <div class="bottom-social-icons social-icon">  
                    <a class="twitter"><i class="ti-twitter-alt"></i></a>
                    <a class="facebook" href=""><i class="ti-facebook"></i></a>             
                  </div>  
                  <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                  <form class="subscribe-box">
                    <input type="text" placeholder="Your email">
                    <input type="submit" class="btn-system" value="Send">
                  </form> 
                </div>
              </div>
    			</div>
    		</div>
    	</section>
    	<!-- Footer area End -->
    	
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info text-center">
                <p>All Rights reserved &copy; 2018 - Designed & Developed by Bashim Mahir </p>
              </div>   
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  
      
      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="ti-arrow-up"></i>
      </a>
        
      <div id="loading">
        <div id="loading-center">
          <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
          </div>
        </div>
      </div>
        
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>    
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
          </div></div>  
  </body>
</html>