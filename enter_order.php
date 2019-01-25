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
                <a class="navbar-brand" href="file:///C|/wamp/www/B&B2/WiesmannHome.php">Wiesmann Motors</a>
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
          <h2 align="center"> Order Details</h2>
<div>
<form action="enter_order.php" method="post">
<table width="300" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Receiver Name</td>
    <td><label for="fname"></label>
      <input type="text" name="fname" id="fname" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>zip code</td>
    <td><label for="lname"></label>
      <input type="text" name="lname" id="lname" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact Number</td>
    <td><label for="age"></label>
      <input type="text" name="age" id="age" /></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Payment Method</td>
    <td><label for="gender"></label>
      <select name="gender" id="gender">
      <option>Paypal</option>
      <option>Payoneer</option>
      </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>City</td>
    <td><label for="country"></label>
      <input type="text" name="city" id="city" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Address</td>
    <td><label for="address"></label>
      <input type="text" name="address" id="address" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
</table>
</form>
</div>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 
</div>

</body>
</html>