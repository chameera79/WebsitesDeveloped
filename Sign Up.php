<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="styleSheet" type="text/css" href="Style 1.css"/>
<script src="SweetAlert/sweetalert.min.js"></script> 
<script src="SweetAlert/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="SweetAlert/sweetalert.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>

<script language="javascript" type="text/javascript">

function agree()
  {
  if(document.getElementById("agree").checked==false)
   {
      swal("You Must Agree To Our Tos!!");
		return false;  
   }
   else
    {
     return true
     }
  }
function validateFirstName()
{
	var FirstName = document.getElementById("Fname").value;
	if((FirstName == "")||(FirstName == null))
	{
		swal("Please enter your first name !!");
		return false;
	}
	else
	{
		return true;
	}
}

function validateLastName()
{
	var LastName = document.getElementById("Lname").value;
	if((LastName == "")||(LastName == null))
	{
		swal("Please enter your Last name !!");
		return false;
	}
	else
	{
				return true;
		
	}
}

function validateScreenName()
{
	var UserName = document.getElementById("UserName").value;
	if((UserName == "")||(UserName == null))
	{
		swal("Enter User Name !!");
		return false;
	}
	else
	{
				return true;
		
	}
}

function Gender()
{
	var g = document.getElementById("selectG");
	var check = g.options[g.selectedIndex].value;
	if(check!="0")
	{
		
		return true;
	}
	else
	{
		swal("Select Your Gender !!");
		return false;	
	}
}

function validateEmail()
{
	var email = document.getElementById("txtEmail").value;
	var at = email.indexOf("@");
	var dot = email.lastIndexOf(".");
	var len = email.length;	
	if((((dot - at) > 2))&& (len > dot)&& (at > 1))
	{
			return true;
	}
	else{
		swal("Please enter a valid email");
		return false;
	}
}

function validateContactNum()
{
	var no = document.getElementById("telNum").value;
	if((no.length != 10)||(isNaN(no)))
	{
		swal("Number is Not Valid", "Please Enter Valid Number");
		return false;
	}
	else
		return true;
	
}

function validatePassword()
{
	var password = document.getElementById("txtPassword").value;
	var cpassword = document.getElementById("txtConPassword").value;
	
	if((password.length < 5) || (password != cpassword))
	{
			swal("Incorrect Password", "The password length should be more than five and you should enter the same for confirm password");
			
			return false;
	}
	return true;
}


function Validate()
{
	if(validateFirstName() && validateLastName() && validateScreenName())
	{
		if(Gender() && validateEmail() && validateContactNum() && validatePassword() && agree())
		{
			return true;
		}
		else
		{
			event.preventDefault();	
		}
	}
	else
	{
		event.preventDefault();	
	}
}




	function A()
	{
	swal({   
	title: "Are you sure?",   
	type: "warning",   
	showCancelButton: true,   
	confirmButtonColor: "#DD6B55",   
	confirmButtonText: "Yes",   
	cancelButtonText: "No",  
	closeOnConfirm: false,   
	}, 
	function(isConfirm){   
	if (isConfirm) 
	{   
         swal("Canceled!", "", "success");    
	location.reload();
	} 
	
	});
        
	}

</script>
</head>
<body>
<form id="newForm" action="inserted.php" method="POST">
<div class="d1">
&nbsp;<label class="l1"> <font size="4" color="#FFFFFF"> Sign Up&nbsp;&nbsp;</font></label>
<label class> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size="4" color="#FFFFFF">Wiesmann Motors<br />
</font></label>
&nbsp;

<div class="d2"><br><br>
	<table width="550" height="470" border="0">
    	<tr>
    	<td width="200" >
        	<label class="te">First Name</label>
	    </td>
        <td width="350">
        <input type="text" name="FirstName" placeholder="Enter First Name..." id="Fname" />
    	
        </td>
        </tr>
        <tr>
    	<td width="200">
        	 <label class="te">Last Name</label>
		</td>
        <td width="350">
        <input type="text" name="LastName" placeholder="Enter Last Name..." id="Lname" />
    	
        </td>
         </tr>
        
        <tr>
    	<td width="200">
        	 <label class="te">User Name</label>
		</td>
        <td width="350">
        	<input type="text" name="UserName" placeholder="Enter User Name..." id="UserName" />
    	
        </td>
        </tr>
        
       
        
        <tr>
    	<td width="200">
        	 <label class="te">Gender</label>
		</td>
        <td width="350">
        
      		<!--<font color="#FFFA17"><input type="radio" name="gender" value="male" id="male"> Male &nbsp;<input type="radio" name="gender" value="female" id="female">Female</font>-->
    	    <select name="gender" id="selectG">
    	      <option value="0">Please Select</option>
			  <option value="Male">Male</option>
			  <option value="Female">Female</option>
			</select>
        </td>
        </tr>
        
       
        
        <tr>
    	<td width="200">
        	 <label class="te">E-mail</label>
		</td>
        <td width="350">
      		<input type="email" name="email" id="txtEmail" placeholder="Enter E-mail..."/>
    	
        </td>
        </tr>
        
        <tr>
    	<td width="200">
        	 <label class="te">Phone</label>
		</td>
        <td width="350">
        <input type="tel" name="usrtel" id="telNum" placeholder="Enter Phone..." />
    	
        </td>
        </tr>
        
        <tr>
    	<td width="200">
        	 <label class="te">Password</label>
		</td>
        <td width="350">
      		<input type="password" name="password" id="txtPassword" />
    	
        </td>
        </tr>
        
        <tr>
    	<td width="200">
        	 <label class="te">Confirm Password</label>
		</td>
        <td width="350">
      		<input type="password" name="ConfirmPassword" id="txtConPassword" />
    	
        </td>
        </tr>
        
         <tr>
    	<td width="200"></td>
        <td width="350">
      		<input type="checkbox" id="agree" name="Agree" value=""/><font color="#FFFA17"> I agree to the Terms of Use</font>
    	
        </td>
        </tr>
        
        
        
    </table>

</div>
<table width="550" height="65" border="0">
	<tr>
    	<td width="300">
    	<td width="100">
        	<input type="submit" name="submit" id="submit" value="Submit" onclick="Validate()"/>
        <td width="100">
        	<input type="button" onclick="A()" value="Cancel">
		</form>
        
        </td>

  </tr>
</table>
  
 
        

</div>


</div>

</body>

</html>

<?php
if(isset($_GET['stat']))
{
	if($_GET['stat']==1)
      {
        echo "<script>
         swal('Success', 'Your Feedback Has Been Submitted', 'success');
		
      	</script>";
      } 

      if($_GET['stat']==2)
      {
        echo "<script>
         swal('Oops....', 'Username Exists .Try Again', 'error');
      </script>";
      }
}
