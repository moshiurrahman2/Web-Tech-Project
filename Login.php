<?php
$sellername="";
$sellerpassword="";

  if(isset($_POST['btnClick']))
    {	
    if(empty($_POST['sname'])){
		$sellename = " * Name is required.";
	}	
	if(empty($_POST['spassword'])){
		$sellerpassword = " * Password is required.";
	}   	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body {
  background-image: url('log.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h1 style="background-color:DodgerBlue; color:white; text-align:center; font-size:50px; max-width: 400px; margin: auto; padding: 10px;">Seller Login</h1>
<form action="Welcome.php" method="POST">
Name: <input type="text" name="sname" placeholder="Enter Name">
<span style="color:red"><?php echo $sellername; ?></span><br><br>
Password: <input type="password" name="spassword" placeholder="Enter password">
<span style="color:red"><?php echo $sellerpassword; ?></span><br><br>
<input type="submit" name="btnClick" value="Login">
<br><br>
<a href="Registration.php">Registration</a><br><br>
<a href="Home.php">Home</a><br><br>
</form>
</body>
</html>