<?php

session_start();
$ses=session_id();
echo "$ses";
$add=$_SESSION['Username'];

  
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
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wiesmann Shopping Cart</title>

    <!-- Bootstrap Core CSS -->
    <link href="Product_Page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Product_Page/css/heroic-features.css" rel="stylesheet">
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
                        <a href="ordered_products.php">Ordered Products</a>
                    </li>
                     <li>
                        <a href="wiesmann_Cart_Products.php">View Cart</a>
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

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1> Your Ordered Products</h1>
            <p>Your Recently Ordered Product...!!!!</p>
            <p><a  href="wiesmann_cart_products.php?pid=<?php echo '$id'?>"class="btn btn-primary btn-large">Continue Ordering..!!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Spare Parts</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
      <div class="row text-center" >

        <div class="col-md-3 col-sm-6 hero-feature" >
           <?php
		   
      	if(isset($_GET['pid']))
	{
		$id=(int) $_GET['pid'];
	     if(!empty($id))
		   {
			 

			mysqli_query($con,"insert into temp_orders values ('','$id','$add')");
			echo " This  product is  added Your Cart"."<br>";
			}
			else
			   {
				echo "try again";
				}
				}
		$result=mysqli_query($con,"select * from `products` where pid='$id'");

      while($data=mysqli_fetch_array($result))
       {

               $path = $data['item_path'] ;
                               
            ?>
                <div class="thumbnail" >
                    <div class="caption" >
             <?php echo "<img width=70px height=50px src=". $path . "><br>"; ?>
                        <h3> <?php echo $data['pid']?></h3>
                        <p><?php echo $data['pname']?></p>
                        <p>
                             <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
                <?php }?>
            </div>
            
      </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    </nav>

</body>
</html>