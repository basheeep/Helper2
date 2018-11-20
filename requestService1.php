<?php
require_once 'includes/dbcall.php';
$db = new Db();

?>




<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Helper, Login Form</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="assets/css/style.css">

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
                  <a class="navbar-brand logo" href="#"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav">
                  <li>
                    <a href="requestService.php">Request Service </a>
                  </li>
                  <li>
                    <a href="myservices.php">My Services </a> 
                  </li>
                  
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                    <li class="right"><a href="signin.php"><i class="ti-user"></i> Sign Out</a></li>
                </ul>
              </div>                           
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="requestService.html">Request Service</a>                       
              </li>
              <li>
                <a href="myservices.html">My Services</a>
              </li> 
              <li class="btn-m"><a href="signin.html"><i class="ti-lock"></i>  Sign Out</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>

          <!-- Off Canvas Navigation -->
          
      <!-- Header Section End -->  
<div class="row">
                <!-- non breaking space to make the cousour look better!-->
                <div>
                    &nbsp;
                </div>
    
    <?php
        
        if (isset($_POST['submit'])) {
            
            if ($_POST['title']!=""&&$_POST['jobtype']!=""&&$_POST['date']!=""&&$_POST['time']!=""&&$_POST['notes']!=""){

                    $sql = "INSERT INTO `ServiceReq` (`type`, `title`,`jobtype`, `status`, `date`, `time`, `notes`)
                                    VALUES ('type', '{$_POST['title']}','{$_POST['jobtype']}', 'Pending',  '{$_POST['date']}',
                                      '{$_POST['time']}','{$_POST['notes']}')";

                if (($db->query($sql))) {
                    echo '<div class="alert alert-success" span style="color:#000" >
                <strong>Success!</strong> Service Request Saved.
            </div>';



                }
              //}
            }


          else {


                  echo "<div class='row alert alert-success' >
              <div class='col-lg-12'>Please fill out the mandatory fields.</div></div>";
              }

          }
        ?>
    

            </div>
          <!-- Off Canvas Navigation -->
          
  
	<div class="col-md-8">
              <!-- Form -->
        <br>
        <h2 style="color:azure;" >Request Services</h2>
              <form id="contactForm" class="contact-form" method="POST" action="#" data-toggle="validator">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group-addon" style="width: 2.6rem"> Service Title:</div>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Service Title" required data-error="Please Enter Service title">
                          <div class="help-block with-errors"></div>
                        </div>                    
                      </div>
                      <div class="col-md-6">                 
                          <div class="form-group">
                                    <label class="sr-only" for="password">Date</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.6rem color:#000">Date :</div>
                                        <input type="date" name="date" class="form-control" id="date"
                                               placeholder="date" required>
                                    </div>
                                </div>
                          <div class="form-group">
                                    <label class="sr-only" for="password">Time</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.6rem">Time :</div>
                                        <input type="time" name="time" class="form-control" id="time"
                                               placeholder="time" required>
                                    </div>
                                </div>
                            <div class="form-group">
                                     <div class="input-group-addon" style="width: 2.6rem">Job Type :</div>
                        <select class="form-control">
                            <option>Full Time</option>
                            <option>Part Time</option>
                          </select> 
                                </div>
                        
                           <div class="form-group">
                                    <label class="sr-only" for="email">Status</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.6rem">Service Type :</div>
                                        <select class="form-control">
                                            <option>1212 - Cooking</option>
                                            <option>2626 - Cleaning</option>
                                            <option>3131 - Driving</option>
                                            <option>4242 - Nursing</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group"> 
                          <textarea class="form-control" name="notes" id="notes" placeholder="Message" rows="7" data-error="Write your message" required></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                          
                         
                      </div>
                      <div class="col-md-12">
                        <button type="submit" name="submit" id="submit" class="btn btn-common">Request</button>
                        <div id="msgSubmit"  class="h3 text-center hidden"></div> 
                        <div class="clearfix"></div>   
                      </div>
                    </div>
                  </div>                     
                </div> 
              </form>
            </div> 
	</div>
          </section>
    </div>
  
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
</body>

</html>
