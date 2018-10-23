<?php session_start(); 
include "includes/dbconnection.php";

$sql_user = "SELECT * FROM users WHERE USER_ID='".$_SESSION['user_id']."'";
$query_user = mysqli_query($dbCon,$sql_user);

$user = mysqli_fetch_array($query_user);




?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    
    <title>Helper- for the little things</title>    

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
    
      <!-- Inline CSS Styles  -->
<style>      
p {
    color :floralwhite;
}
</style>
      
  </head>

  <body>  
      <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <div class="logo-menu">
            <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                  <li>
                    <a href="requestService.html">Request Service </a>
                  </li>
                  <li>
                    <a href="faq.html">My Services </a> 
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
                <a class="active" href="requestService.html">Request Service</a>                       
              </li>
              <li>
                <a href="faq.html">My Services</a>
              </li> 
              <li class="btn-m"><a href="signin.html"><i class="ti-lock"></i>  Sign Out</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>

          <!-- Off Canvas Navigation -->
          
          
      <!-- Header Section End -->  

 <!-- Profile Section Start -->
    <section class="find-job section">
      <div class="container">
          <div class="col-md-12">
              <div class="job-list-content">
                <!--content-->
	<div class="container">
        <h4>Last Login: <?php echo $user['LAST_LOGIN']; ?></h4>
		<div class="row">
			<div class="col-sm-12">

				<br>
				<div class="righty marginleft10 hidden-xs col-sm-4 gallery">
				</div>
				<h2><i class="fa fa-user-circle verybigtext lefty marginright10" style="color: #ee113e;"></i>Hi <?php echo $user['FULLNAME']; ?> </h2>
				<br><br>
                <p><font size="4">Name  : <?php echo $user['FULLNAME']; ?></font></p>
                <p><font size="4">Age   : 74 years</font></p>
                <p><font size="4">D.O.B : 12/06/1944</font></p>
                <p><font size="4">Hobbies   : Reading and Playing Chess</font></p>
                <p><font size="4">Address      : 73A, Jalan Dunggun, Damansara Perdana</font></p>
                
				<br><br>
				<div class="row"><div class="righty marginleft10 hidden-xs col-sm-4 gallery">
				</div>
                    
<h2><i class="fa fa-address-card verybigtext lefty marginright10" style="color: #ee113e;"></i>&ensp;Service History </h2>
                    <br>
                        <br>
					<div class="col-xs-6 col-md-4">
						<a class="col-xs-12 btn btn-default" href="#">
							<span class="verybigtext">3</span>
							<div class="smartlinebreak"></div>
							Upcoming 
							<br><br>
						</a>
						<div class="clear"></div><br>
					</div>

					<div class="col-xs-6 col-md-4">
						<a class="col-xs-12 btn btn-default" href="#">
							<span class="verybigtext">9</span>
							<div class="smartlinebreak"></div>
							Previous 
							<br><br>
						</a>
						<div class="clear"></div><br>
					</div>

					<div class="col-xs-6 col-md-4">
						<a class="col-xs-12 btn btn-default" href="#">
							<span class="verybigtext">12</span>
							<div class="smartlinebreak"></div>
							Upcoming and Previous
							<br><br>
						</a>
						<div class="clear"></div><br>
					</div>
				</div>
			</div>
		</div>
	</div>
<br><br>
                </div>
              </div>
            </div>
        </section>
            </div>
    </section>
    <!-- Profile Section End -->

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
      
      </div>
  </body>
</html>