<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Not To Young To Lead</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
  <?php
include("includes/header.php");

  ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(pix/contact.jpg);">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>contact</h1>
                <ul class="bread-crumb">
                	<li><a href="index.php">Home</a></li>
                    <li>contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            <div class="contact-info">
            	<div class="row clearfix">
                	
                	<div class="info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="flaticon-house-outline"></span></div>
                            <h4>VISIT</h4>
                           Asaba,  <br>Delta State Nigeria.
                        </div>
                    </div>
                    
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="flaticon-technology-1"></span></div>
                            <h4>Call</h4>
                           +234 (0) 803 781 9862 <br> 
                        </div>
                    </div>
                    
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box">
                        	<div class="icon-box"><span class="flaticon-envelope-1"></span></div>
                            <h4>Mail</h4>
                            Info@ntytl.org<br> callback@ntytl.org
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <h2>Say Hello</h2>
                    
            <!--Contact Form-->
            <div class="contact-form">
                <form method="post" action="sendemail.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="username" value="" placeholder="Name *" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email *" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="phone" value="" placeholder="Phone *" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="subject" value="" placeholder="Subject *" required>
                        </div>
                        
                        <div class="column col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Type Your Message"></textarea>
                            </div>
                        </div>
                        
                        <div class="column col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one">Submit Now</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            <!--End Contact Form-->
            
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
   
    
	<!--Subscribe Style One-->
<?php   include("includes/footer.php") ?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div> 

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>