<?php
  session_start();
  $ses=session_id();
  if(isset($_GET['logout']))
  {
	  session_destroy();
	  unset($ses);
	   
  unset($_SESSION['UserName']);
  header("location:WiesmannHome.php");
  }

?>