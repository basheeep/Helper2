
<?php  include "includes/signup.php"; ?>

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
                    <a class="active" href="index.html">
                    Home
                    </a>
                    
                  </li>
                  <li>
                    <a href="about.html">About </a>
                  </li>
                  <li>
                    <a href="faq.html">FAQs </a> 
                  </li>
                  <li>
                    <a href="contact.html">Contact</a>
                  </li>
                  <li>
                    <a href="blog.html">Blog </a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  <li class="right"><a href="signin.php"><i class="ti-lock"></i>  Log In</a></li>
                </ul>
              </div>                           
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="index.html">Home</a>                       
              </li>
              <li>
                <a href="about.html">About</a>
              </li>
              <li>
                <li><a href="faq.html">FAQ</a></li>
              <li>
                <li><a href="contact.html">Contact</a></li>
              <li>
                <a href="blog.html">Blog</a>
              </li>  
              <li class="btn-m"><a href="signin.php"><i class="ti-lock"></i>  Log In</a></li>          
            </ul>
            <!-- Mobile Menu End --> 
          </nav>
      <!-- Header Section End -->  

          <!-- Off Canvas Navigation -->
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">      
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" value="senior" checked><label for="tab-1" class="tab tab_no">Senior</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" value="service-provider"><label for="tab-2" class="tab">Service Provider</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username" value="<?php echo $username; ?>">
          <span><?php echo $username_error; ?></span>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password">
          <span><?php echo $password_error; ?></span>

				</div>
				<div class="group">
					<label for="pass" class="label">fullname</label>
					<input id="fullname" type="text" class="input" name="name" value="<?php echo $name; ?>">
          <span><?php echo $name_error; ?></span>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="email" type="text" class="input" name="email" value="<?php $email; ?>">
          <span><?php echo $email_error; ?></span>
				</div>
                <div class="group">
					<label for="number" class="label">Mobile No</label>
					<input id="number" type="integer" class="input" name="mobile" value="<?php $phone; ?>">
          <span><?php echo $phone_error; ?></span>
				</div>
                <div class="group">
					<label for="address" class="label">Address</label>
					<input id="address" type="text" class="input" name="address" value="<?php $address; ?>">
          <span><?php echo $phone_error; ?></span>
				</div>

 <div class="group">
 <label for="pass" class="label">User type</label><br/>
        <input type="radio" value="senior" name="user_type"><label>Senior User</label>
        <input type="radio" value="service-provider" name="user_type"><label>Service Provider</label>
        <br/><br/>
        </div>
                
				<div class="group">
					<input type="submit" class="button" name="SignUp" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
                    <label for="tab-1">Already Member?</label>
				</div>
			</div>


    
		</div>
      </div>
      </div>
</form>
    </div>
    

</body>

</html>
