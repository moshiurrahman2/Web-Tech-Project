<!DOCTYPE html>
<html>
<head>
<title>Seller Dashboard</title>
<style>
body {
  background-image: url('ds.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>
</head>
<body>
</body>
</html>
<?php
session_start();
   if(isset($_SESSION['sname'])){
	
	echo "<h2>Welcome to Product Page</h2>";
	
	echo "<br><a href = 'Welcome.php'><input type=button value=back name=back></a>";	
}
else{
	echo "<script>location.href='Login.php'</script>";
}
?>
