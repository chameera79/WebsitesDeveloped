<!DOCTYPE html>
<html>
<head>
	<link rel="styleSheet" type="text/css" href="Style 1.css"/>
<script src="SweetAlert/sweetalert.min.js"></script> 
<script src="SweetAlert/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="SweetAlert/sweetalert.css">
</head>
<body>

</body>
</html>




}

?>
<?php
$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo 'Online<br>';
	}
	if(!mysqli_select_db($con,'wiesmann_sign_up'))
	{
		echo 'Database Not selected<br>';		
	}

if(isset($_POST['submit']))
{
	
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$UserName=$_POST['UserName'];
	$Gender=$_POST['gender'];
	$Email=$_POST['email'];
	$Phone=$_POST['usrtel'];
	$Password=md5($_POST['password']);
	$ConfPassword=$_POST['ConfirmPassword'];


	$sql="INSERT INTO `sign_up_details`(`FirstName`, `LastName`, `UserName`, `Gender`, `E-mail`, `Phone`, `Password`, `confPassword`) VALUES ('$FirstName','$LastName','$UserName','$Gender','$Email','$Phone','$Password','$ConfPassword')";

	if(!mysqli_query($con,$sql))
	{
     	header("location:Sign Up.php?stat=2"); 
	}

	else
	{
		header("location:Userlogintest.php?stat=1");
	}

}
	

?>