<?php
if(isset($_POST['login']))
{
	$msg="";
   $name=$_POST['un'];
   $pass=$_POST['pw'];
  $con=new mysqli("localhost","testuser","testuser","learnx_db");
$sql_fetch="SELECT * FROM tblreg WHERE uname='$name' AND pass='$pass'";

$result=$con->query($sql_fetch);

while($row=$result->fetch_assoc()){
$name=$row['name'];
$uname=$row['uname'];
$pass=$row['pass'];
/*echo $name."<br/>";
echo $uname."<br/>";
echo $pass;*/
}
if($result->num_rows>0){

		session_start();
		$_SESSION['user']=$name;
		$_SESSION['username']=$uname;
		header('location:adminhome.php');
}
else{
	$msg="<p style='color:red;'>Incorrect Username or Password!</p>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>For Register</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="index.html"><img src="images/logo.png"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">For Registration</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                     </ul>
                     <div class="call_section">
                        <ul>
                           <div class="donate_bt"><a href="#"><img src="images/search-icon.png"></a></div>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <!--header section end -->
<div id="header" style="background-color:#aaccff; border:solid 2px;">
</div>
 <div class="services_section layout_padding">
<div id="container">



<div id="login"style="float:center;width:50%;width: 400px;height: 500px;margin:10% auto;
		border-radius: 25px;background-color: rgba(50,0,0,0.1);box-shadow: 0 0 17px #333;">
<form action="" method="post">
<center><h3 style="color:blue; font-size: 25px; padding-top: 75px;font-weight: bold;">User login</h3>
Username :<input type="text" name="un" placeholder="username" 
style= "width: 350px;height: 40px;margin:7% auto;border-radius: 7px;background-color: rgba(0,0,10,0.1);"/><br/>
Password :<input type="password" name="pw" placeholder="password"
style= "width: 350px;height: 40px;margin:7% auto;border-radius: 7px;background-color: rgba(0,0,10,0.1);"/><br/><br/>
<input type="submit" value="Login" name="login" style="width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 10px;
	box-sizing: border-box;
	font-size: 15px;
	color: #333;
	margin-bottom: 40px;
	box-shadow: 2px 2px 5px #555;
	text-align: center;
	background-color: #83acf1;
	font-weight: bold;"/>
</form>
</center>
<?php
if(isset($_POST['login']))
{
	echo $msg;
}
?>


</div>
</div>

</div>
</body>
</html>
