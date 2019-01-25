<?php
session_start();

$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Online<br>';
	}
	if(!mysqli_select_db($con,'shopping_cart'))
	{
		echo 'Database Not selected<br>';		
	}
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link href="Product_Page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Product_Page/css/heroic-features.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wiesmann Motors</title>

<link rel="stylesheet" href="getstarted.css" />
<link rel="stylesheet" href="animate2.css" />

<div class="header">
  
  
</div>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="WiesmannHome.php">Wiesmann Motors</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                     
                    
                </ul>
                 <ul class="nav navbar-nav navbar-right">
      <li><?php  if(!isset($_SESSION['SESS_LOGGEDIN']))
                               { 
                                   echo "<a href='Sign Up.php'>Sign Up</a>";
								   
                               }  ?></li>
          
      <li>  <?php 
                           
                           if(!isset($_SESSION['SESS_LOGGEDIN']))
                               { 
                                
								   echo "<a href='Userlogintest.php'>Log In</a>";
                               }  
                            else if(isset($_SESSION['SESS_LOGGEDIN']))
                               {
                                   echo "<a href='logout.php?logout'>LogOut</a>";
                               } ?> 
                           
                             </li>
    </ul>
                
            </div>
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div id="container">


<div id="headertt">
 
<div id="video">
<video poster="wiesmann.png" autoplay="true" width="1521" height="1080" loop="loop"  > 
<source src="2012 Wiesmann GT MF5 Top Gear Track.mp4" type="video/mp4" />
<source src="2012 Wiesmann GT MF5 Top Gear Track.mp4" type="video/webm" />

</video>
</div>
</div>



</div>

<div id="p">
<p>The Caterpillar and Alice looked at each other for some time in silence:
at last the Caterpillar took the hookah out of its mouth, and addressed
her in a languid, sleepy voice.</p>
</div>

</body>
<footer>
  
  <div class="social"  align="center">
    <a href="#"><img src="Media Icons/Untitled-3.svg " width="10px" height="10px"></a>
    <a href="#"><img src="Media Icons/1494886800_youtube_circle_color.svg"></a>
    <a href="#"><img src="Media Icons/1494886813_facebook_circle_color.svg"></a>
    <a href="#"><img src="Media Icons/1494886898_flickr_circle_color.svg"></a>
    <a href="#"><img src="Media Icons/1494886825_twitter_circle_color.svg"></a>
    <a href="#"><img src="Media Icons/1494886914_rss_circle_color.svg"></a>
    
  </div>
</footer>
<div class="footercopyright">
<p1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; Wiesmann Motor  Corporation 2017<p1>
</div>
</body>
</html>
