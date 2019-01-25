  <?php session_start(); 
  $ses=session_id();

  $con=mysqli_connect('localhost','root','','wiesmann_sign_up');
  
  ?>
                             
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home| Wiesmann Motors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/mystyle.css">
   <link rel="stylesheet" type="text/css" href=";background.css">
  <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
 
 

</head>
<body background="Elegant_Background-8.jpg">
<div class="background">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="WiesmannHome.php">Wiesmann Motors</a>
    </div>
    <ul class="nav navbar-nav">
    
     <li><a href="#">MF3</a></li>
      <li><a href="Webglmf3gt.php">MF3 Roadster</a></li>
      <li><a href="#">MF4</a></li>
     <li><a href="#">MF5</a></li>
   
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
     
      <li>  <li><?php  if(!isset($_SESSION['SESS_LOGGEDIN']))
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
</nav>
 
</body>
</html>