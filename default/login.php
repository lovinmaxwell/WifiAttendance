<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Simple HTML & CSS Login Form</title>
  
  
  
      <link rel="stylesheet" href="css1/style.css">
<script src="jquery.min.js" type="text/javascript"></script>
  
    <script src="js/index.js"></script>
  
</head>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

$link=mysqli_connect("localhost","ellipson_lovin","LOVINm2xwell");
mysqli_select_db($link,"ellipson_wifi");

$sql="SELECT * FROM users WHERE Username ='$username' AND Password ='$password' ";
$result=mysqli_query($link,$sql);
$numrows = mysqli_num_rows($result);
if($numrows > 0)
   {
    header("Location:dashboard-2.html");
   }
else
	echo 'sing in';
?>
<body>
  

<form method="post">
<div class="box">
<h1>LOGIN</h1>

<input type="name" name="username" value="" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="password" name="password" value="" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<div class="btn" ><button type="submit" value="" onclick="location.href='index.php';">Sign in</div></button><!-- End Btn -->
  
</div> <!-- End Box -->
  
</form>
  

	
</body>
</html>
