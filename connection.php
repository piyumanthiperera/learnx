<?php  
   $con=mysqli_connect("localhost","testuser","testuser","db_learnx");
   
   if (!$con) {
	   die ("Connection failed!" .mysqli_connect_error());
  }
   else{
echo "connection success...";
   }
 ?>
 
