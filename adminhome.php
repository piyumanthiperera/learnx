<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title></title>
</head>
<body>
<div id="header" style="background-color:#aaccff; border:solid 2px;">
<h1 align="center">When ever smart people works <br/>
doors are unlocked!
</h1>
</div>
<div id="registration" style="border:solid 2px; float:left; width:61%;">
<?php 
if(!empty($_SESSION['user'])){
echo "Welcome ".$_SESSION['user']." ";
?>
<a href="index.html?id=logout"><span style="color:green">Logout</span></a>
<?php 
if(isset($_GET['id'])and $_GET['id']=="logout"){
$_SESSION['user']="";
$_SESSION['username']="";
header("location:admin.php");
}?>
<p style="font-size:50px;">Student Information</p>
<a href="second_page.php">Next page</a>
<?php
}
?>
</div>
</body>
</html>
