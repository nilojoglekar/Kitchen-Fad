<?php
session_start();
if (isset($_POST['submit']))
{
	$conn = mysqli_connect("localhost:3307","root","","customer");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
$email=$_POST['email'];
$pw=$_POST['pw'];
$sql = "SELECT * FROM information WHERE email = '$email' AND password = '$pw';";
$sql_result = mysqli_query ($conn, $sql) or die ('request "Could not execute SQL query" '.$sql);
		$user = mysqli_fetch_assoc($sql_result);
		if(!empty($user)){
			$_SESSION['user_info'] = $user['email'];
			$message='Logged in successfully';
		}
		else{
			$message = 'Wrong email or password.';
		}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css" />  
</head>
<script type="text/javascript">
	function validate()	{
		var EmailId=document.getElementById("email");
		var atpos = EmailId.value.indexOf("@");
    	var dotpos = EmailId.value.lastIndexOf(".");
		var pw=document.getElementById("pw");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
		{
        	alert("Enter valid email-ID");
			EmailId.focus();
        	return false;
   		}
   		if(pw.value.length< 8)
		{
			alert("Password consists of atleast 8 characters");
			pw.focus();
			return false;
		}
		return true;
	}
</script>
<style>
    #loginarea	{
        background-image: url('wallpaper1.jpeg');
        opacity:90%;
        width: 30%;
        position: relative; 
        top: 100px;
        margin: auto;
        border-radius: 25px;
        border: 2px solid black; 
        margin-bottom: 120px;
        font-family:'Times New Roman', Times, serif

    }
    #email,#pw{

        margin-bottom: 5px;
    }
    

</style>

<body>
    <div class="wrapper">
        <nav>

            <div class="navbar">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="recipe.php">Recipes</a></li>
                        <li><a href="community.php">Community</a></li>
                        <li><a href="register.php">Sign Up</a></li>
                    </ul>
            </div>
        </nav>
    </div>
    
        <div id="loginarea" align="center" height="400" width="400">
        <form id="login" action="login.php" onsubmit="return validate()" method="post" name="login">
                <table border="0">
                    <div id="logintext">Login to Kitchen FAD!</div><br/><br/>
                    <table>
		                <tr><td><div class="data">Enter E-Mail ID:</div></td><td><input type="text" id="email" size="30" maxlength="30" name="email"/></td></tr>
		                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
		                <tr><td><div class="data">Enter Password:</div></td><td><input type="password" id="pw" size="30" maxlength="30" name="pw"/></td></tr>
		                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                    </table>
                    <INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button">
                </div>
        
            <div style="text-align:center">    
          <a href="changepw.html"  style="background-color:#ffffa0">Forgot Password</a>
        </div>
    </form>
</body>
<br><br>
<footer class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Contact US</h6>
                <h5 style="font-size: 15px;">HELP LINE </h5>
                <h5 style="font-size: 14px;">50015</h5>
                <h5 style="font-size: 15px;">EMAIL </h5>
                <a href="#"><h5 style="font-size: 14px;">KitchenFAD@yahoo.com </P></a>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="recipe.html">POPULAR</a></li>
                    <li><a href="recipe.html">DESSERTS</a></li>
                    <li><a href="recipe.html">Easy & Quick </a></li>
                    <li><a href="recipe.html">Healthy</a></li>
                </ul>
             </div>
             
             <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="recipe.html">Recipes</a></li>
                    <li><a href="">Community</a></li>
                    <li><a href="register.html">Sign up</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6 col-xs-12">
  <p class="copyright-text">All Rights Reserved by 
<a href="#">Kitchen Fad</a>.
  </p>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
  <ul class="social-icons">
    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
  </ul>
</div>
</div>
</div>
</footer>
</html>