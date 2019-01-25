<?php
    session_start();	
	$ses=session_id();
	$con = mysqli_connect('localhost','root','','wiesmann_sign_up');
	if($con)
	{
		echo 'Online<br>';
	}	
	// get values
if(isset($_POST['lgnbtn']))
{
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	
		
	$res=mysqli_query($con,"select * from sign_up_details where UserName='$UserName'");
	$userRow=mysqli_fetch_array($res);

	if(md5($Password)==$userRow['Password'])
	{
		if($UserName==$userRow['UserName'])
		{	
		   $_SESSION['Userame']=$userRow['UserName'];
		   $_SESSION['SESS_LOGGEDIN'] = 1;
			
			header("location:wiesmannHome.php");
			
		}
	}
	else
	{
       echo "alert('wrong name')";
	   header("location:Userlogintest.php");
	 

	}

}
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="StyleSheet" type="text/css" href="Style.css"/>
<script src="SweetAlert/sweetalert.min.js"></script> 
<script src="SweetAlert/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="SweetAlert/sweetalert.css">

<title>Untitled Document</title>
<script type="text/javascript">


function ValidateUserName()
{

	var uName = document.getElementById("UserName").value;
	
	if((uName == "") || (uName == null))
	{
		 msg.innerHTML = "User Name is Invalid !!";
		 name_error.textContent = "Username is required";
		 uName.style.border = "1px solid red";
		return false;
	}
	else
	{
		return true;
	}
}


function ValidatePassword()
{
	var pswrd = document.getElementById("Password").value;
	
	if((pswrd == "") || (pswrd == null))
	{
		 msg.innerHTML = "Password is Invalid !!";

		return false;
	}
	else
	{
		
		return true;
	}
}

function validate()
{
	if(ValidateUserName() && ValidatePassword())
	{
		return true;
	}
	
	else
	{
		event.preventDefault();	
	}
}
     
</script>
</head>

<body>
<div class="wrapper">
&nbsp;
  		<p>&nbsp;</p>
  		<div class="d1">
        &nbsp;
       	  <p><center>
       	    <p><font style="color:#666">Have an account? Sign in</font></p>
       	    <form id="form1"  method="post">
       	      <p>
       	      <div>
              <input type="text" name="UserName" placeholder="Username" id="UserName" />
              
              </div>

              <div>
              <input type="password" name="Password" placeholder="Password" id="Password" /><br><br>
               <label id="msg"></label><br>
			   <p></p>
			   </div>
              <input name="lgnbtn" type="submit" value="LOGIN" onclick="validate()">
       	      </p>
               
   	        </form>
       	  </center>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="Remember" value="Remember me"><font style="color:#666"> Remember me</font><br>
       	  </p>
          
         
  </div>
</div>
</body>
</html>