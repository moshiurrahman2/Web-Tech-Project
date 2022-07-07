<?php
$sellername="";
$selleremail="";
$sellerpassword="";
$sellerphonenumber="";
$sellergender="";
$selleraddress="";
  if(isset($_POST['submit']))
    {
	if(empty($_POST['sname'])){
		$sellername = " * Name is required.";
	}
    if(empty($_POST['semail'])){
		$selleremail = " * Email is required.";
	}	
	if(empty($_POST['spassword'])){
		$sellerpassword = " * Password is required.";
	}
    if(empty($_POST['sphone'])){
		$sellerphonenumber = " * Phone Number is required.";
	}	
    if(empty($_POST['sgender'])){
		$sellergender = " * Gender is required.";
	}
    if(empty($_POST['saddress'])){
		$selleraddress = " * Address is required.";
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Seller Registration</title>
<style>
body {
  background-image: url('pet6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
<h1 style="background-color:MediumSeaGreen; color:white; text-align:center; font-size:50px; max-width: 400px; margin: auto; padding: 10px;">Seller Registration</h1>
<form action="json_store.php" method="POST">
Name: <input name="sname" type="text" placeholder="Enter Your Name">
<span style="color: red"><?php echo $sellername; ?></span><br><br>
Email: <input name="semail" type="text" placeholder="Enter Your Email">
<span style="color:red"><?php echo $selleremail; ?></span><br><br>
Password: <input name="spassword" type="text" placeholder="Enter Your Password">
<span style="color:red"><?php echo $sellerpassword; ?></span><br><br>
Phone Number: <input name="sphone" type="text" placeholder="Enter Your Phone Number">
<span style="color:red"><?php echo $sellerphonenumber; ?></span><br><br>
Gender: <input name="sgender" type="radio" value="male">Male
<input name="sgender" type="radio" value="female">Female
<input name="sgender" type="radio" value="other">Other
<span style="color:red"><?php echo $sellergender; ?></span><br><br>
Address: <textarea name="saddress" rows="5" cols="40" ></textarea><br>
<span style="color:red"><?php echo $selleraddress; ?></span><br><br>
<input type="submit" name="submit" value="Submit"></a>
<br><br>
<a href="Login.php">Back</a>
</form>
</body>
</html>