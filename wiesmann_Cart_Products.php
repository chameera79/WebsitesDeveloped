<?php
session_start();
$ses=session_id();
//$add=$_SESSION['Username'];
$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Online<br>';
	}
	if(!mysqli_select_db($con,'shopping_cart'))
	{
		echo 'Database Not selected<br>';		
	}
	?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
</head>

<body>

    <!-- Navigation -->
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
                <div id="TabbedPanels1" class="TabbedPanels">
                  <ul class="TabbedPanelsTabGroup">
                    <li class="TabbedPanelsTab" tabindex="0">Tab 1</li>
                    <li class="TabbedPanelsTab" tabindex="0">Tab 2</li>
                  </ul>
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent">Content 1</div>
                    <div class="TabbedPanelsContent">Content 2</div>
                  </div>
              </div>
                <a class="navbar-brand" href="#">Wiesmann Motors</a>
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

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Your Shopping Cart</h1>
            <p>Buy your genuie Wiesmann spare parts here ...!!!!</p>
            <p><a  href="wiesmann_store.php"class="btn btn-primary btn-large">Continue Shopping</a>
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
		   
           $result=mysqli_query($con,"select pid from `temp_cart` where ses_id='$ses'");
         while($data1=mysqli_fetch_array($result))
          {
                 $id = $data1['pid'] ;
				 $shopping=mysqli_query($con,"select * from `products` where pid='$id'");
				 
				   while($data2=mysqli_fetch_array($shopping))
          {
				 $name = $data2['pname'] ;
				  $price = $data2['price'] ;
				    

                  $path = $data2['item_path'] ;
		  
            ?>
                <div class="thumbnail" >
                    <div class="caption" >
        <?php echo "<img width=70px height=50px src=" . $path . "><br>"; ?>
                        <h3> <?php echo $name ?></h3>
                        <p><?php echo $price ?></p>
                        
                        <p>
                            <a href="wiesmann_cart_ordered.php?pid=<?php echo $data1['pid']?>" class="btn btn-primary">Order Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
                <?php }}?>
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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="Product_Page/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Product_Page/js/bootstrap.min.js"></script>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>
</body>

</html>
