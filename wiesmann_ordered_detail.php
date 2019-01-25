<?php

session_start();
$ses=session_id();
$add=$_SESSION['Username'];
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
		  echo $sum;

if(!empty($_POST['fname']) && !empty($_POST['lname']))
{
	$receiver = $_POST['fname'];
	$zipcode = $_POST['lname'];
	$contact = $_POST['age'];
	$payment = $_POST['gender'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	
		
mysqli_query($con,"insert into orders values ('','$date','$zipcode','$address','$payment','$num','$contact','$sum')");
	echo "info added";
}
	else
{
	echo "try again";
	}	

	
	

?>