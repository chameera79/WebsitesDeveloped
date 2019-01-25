<?php
session_start();
$ses=session_id();

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

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="Product_Page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="Product_Page/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
            <h1>Welcome to our Store!</h1>
            <p>Buy your genuie Wiesmann spare parts here ...!!!!</p>
            <p><a class="btn btn-primary btn-large">Get Started ....!!!</a>
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
		  
            ?>
                <div class="thumbnail" >
                    <div class="caption" >
        <?php echo "<img width=70px height=50px src=" . $path . "><br>"; ?>
                        <h3> <?php echo $name ?></h3>
                        <p><?php echo $price ?></p>
                        <p>
                            <a href="cart.php?pid=<?php echo $data['pid']?>" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
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
    <!-- /.container -->

    <!-- jQuery -->
    <script src="Product_Page/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Product_Page/js/bootstrap.min.js"></script>

</body>

</html>
