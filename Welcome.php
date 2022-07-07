<?php
$sname = "seller";
$spassword = "seller";

session_start();
if(isset($_SESSION['sname'])){
	
	echo "<h1>Welcome ".$_SESSION['sname']."</h1>";
	
	echo "<a href = 'Product.php'>Product</a><br>";
	
	echo "<br><a href = 'Logout.php'><input type=button value=logout name=logout></a>";	
}

   else{
	   if($_POST['sname']==$sname && $_POST['spassword']==$spassword){
	   $_SESSION['sname']=$sname;
	   echo "<h1><a href='Welcome.php'</a></h1>";
	   }
	   else{
		  echo "<script>alert('Username or Password incorrect!')</script>";
		  
		  echo "<a href='Login.php'</a>";
		  
	   }
   }























?>