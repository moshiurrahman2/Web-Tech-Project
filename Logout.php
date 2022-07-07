<?php
session_start();

   if(isset($_SESSION['sname']))
   {  
   session_destroy();
   
   echo "<script>location.href='Login.php'</script>";
   }
   else 
   {
   echo "<script>location.href='Login.php'</script>"; 
}
?>