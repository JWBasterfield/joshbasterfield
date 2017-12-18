<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Josh Basterfield - Data Architect</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> <a class="logo" href="#"><img src="images/logo.png" alt="Mafolio"></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="about.html">About Me</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="#">External link</a></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  --> 
  </header>
  
  	<?
		$page = $_GET[page];
		if (isset($page)) {
			if (file_exists($page.".php")) {
				require($page.".php");
			}else {
				echo $page." does not exist in our page's.";
			}
		}else {
			require("news.php");
		}
	?>
<!-- hire me section --> 
<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <ul class="footer-share">
          <li><a href="https://twitter.com/JWBasterfield"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/in/josh-basterfield-10006258/"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        </p>
        <p>© 2017 All rights reserved. All Rights Reserved<br>
          Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 

<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script>
</body>
</html>