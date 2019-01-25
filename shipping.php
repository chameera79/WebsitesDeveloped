<?php
session_start();
$add=$_SESSION['Userame'];
 $date= date("Y/m/d") ;

$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Online<br>';
	}
	if(!mysqli_select_db($con,'shopping_cart'))
	{
		echo 'Database Not selected<br>';		
	}
	$query = mysqli_query($con,"select count(*) as total from temp_orders");
$result = mysqli_fetch_array($query);

$num= $result['total'];
$sum=0;
           $result=mysqli_query($con,"select pid from `temp_orders` where username='$add'");
         while($data1=mysqli_fetch_array($result))
          {
                 $id = $data1['pid'] ;
				 $shopping=mysqli_query($con,"select * from `products` where pid='$id'");
				 
				   while($data2=mysqli_fetch_array($shopping))
          {
				  $price = $data2['price'] ;
				    $sum=$sum+$price;       
		  }
		  }
		  

if(!empty($_POST['fname']) && !empty($_POST['lname']))
{
	$receiver = $_POST['fname'];
	$zipcode = $_POST['lname'];
	$contact = $_POST['age'];
	$payment = $_POST['gender'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	
		
mysqli_query($con,"insert into orders values ('','$date','$zipcode','$address','$payment','$num','$contact','$sum')");
	echo "";
}
	else
{
	echo "";
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
                <a class="navbar-brand" href="WiesmannHome.php">Wiesmann Motors</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    
                    
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
     

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Spare Parts</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
      <div class="row text-center" id="row text-center">

        <div class="col-md-3 col-sm-6 hero-feature"  >
           <?php
           $result=mysqli_query($con,"select * from `orders`");
          while($data=mysqli_fetch_array($result))
          {
                 $id = $data['order_id'] ;
				$date=$data['date'];
			  $zip_code = $data['zip_code'];
			  $address = $data['address'];
			  $pay = $data['payment_method'];
			  $numofproducts = $data['numof_products'];
			  $contact_number= $data['contact_number'];
			  $total = $data['total'];
		  }?>
           
                <div class="thumbnail" >
                    <div class="caption" >
                         <h1>Shipping Information</h1>
                       
                        <p><?php echo "  Order Id=" ?><?php echo  $id ?></p>
                         <p><?php echo "  Order date=" ?> <?php echo $date ?></p>
                          <p> <?php echo "  zip_code=" ?><?php echo $zip_code ?></p>
                           <p> <?php echo "  address=" ?><?php echo $address ?></p>
                            <p> <?php echo "  payment method=" ?><?php echo $pay ?></p>
                             <p> <?php echo "  Number of products you buy=" ?><?php echo $numofproducts ?></p>
                              <p><?php echo "  contact number=" ?> <?php echo $contact_number ?></p>
                               <p><?php echo "  Total cost=" ?> <?php echo $total ?></p>
                        
                            
                        </p>
                    </div>
                </div>
               
        </div>
            
      </div>
        <!-- /.row --><!-- Footer -->
       

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="Product_Page/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="Product_Page/js/bootstrap.min.js"></script>

</body>

</html>
