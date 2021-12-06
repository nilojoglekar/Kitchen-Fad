<?php
session_start();
$conn = mysqli_connect("localhost:3307","root","","customer");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$mob=$_POST['mob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$sql = "INSERT INTO information (c_fname, c_lname, c_age, c_contact, c_gender, email, password) VALUES ('$fname', '$lname', '$age', '$mob', '$gender', '$email', '$pw');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<HTML>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register on Kitchen Fad</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style type="text/css">
    @import url(register.css);
    *	{
        color: #222;
    }
    #register_form	{
        background-image: url('wallpaper1.jpeg');
        opacity:90%;
        width: 40%;
        position: relative; 
        top: 100px;
        margin: auto;
        border-radius: 25px;
        border: 2px solid black; 
    }
   
    #fname,#lname,#age,#mob,#gender,#email,#pw,#cpw{
        margin-bottom: 5px;
    }

    #logintext	{
        margin-top: 10px;
    }
    #login	{
        margin-top: 10px;
        margin-bottom: 20px;
    }
    </style>
   
    <script src="validation.js"></script>
    </head>
    <nav>
    
    
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
    <div id="register_form" align="center" height="200" width="200">
        <form name="register" method="post" action="register.php" onsubmit="return validate()">
            <table border="0">
                <h1><font-size=7" color="white"><br/>Enter your details</font></h1><br>
                <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <tr class="left">
                <td><font size="5" color="white">First name:</font></td>
                <td><input name="fname" type="text" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></td>
            </tr><tr></tr><tr></tr>
            <tR class="left">
                <td><font size="5" color="white">Last name:</FONT></td>
                    <td><input type="text" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></td>
                </tr><tr></tr><tr></tr>
                <tr class="left">
                    <td><font size="5" color="white">Age:</font></td>
                    <td><input type="number" name="age" align="center" size="30" maxlength="3" placeholder="Enter age" id="age"></td>
                </tr><tr></tr><tr></tr>
            <tr class="left">
                <td><font size="5" color="white">Mobile Number:</font></td>
                <td><input type="number" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number" id="mob"></td>
            </tr><tr></tr><tr></tr>
            <tr class="left">
            <tr class="left">
                <td><font size="5" color="white">Gender:</font></td>
                <td>
                    <input type="radio" name="gender" value="Male" align="center" id="gender">Male 
                    <input type="radio" name="gender" value="Female" align="center" id="gender">Female
                    <input type="radio" name="gender" value="notspecifies" align="center" id="gender">Prefer Not to specidy
                </td>
            </tr><tr></tr><tr></tr>
            <tr class="left">
                <td><font size="5" color="white">E-Mail ID:</font></td>
                    <td><input name="email" type="text" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></td>
                </tr><tr></tr><tr></tr>
            <tr class="left">
                    <td><font size="5" color="white">Password:</font></td>
                        <td><input type="PASSWORD" name="pw" size="30"  id="pw"></td>
                        </td><tr></tr><tr></tr>
             <Tr class="left"></Tr>
                <td><font size="5" color="WHITE">Confirm Password:</font></td>
                <td><input type="PASSWORD" name="cpw" size="30" id="cpw"></td>
                <tr></tr><tr></tr><tr></tr>
            </table>
            <p>
                <input type="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">
                <input type="Reset" value="Reset" id="reset" class="button">
            </p>
        </form>
    <br/>
    <hr width="700" style="border-color: black;border-width:2;display: block;" >
    <form action="login.php">
    <p align="center" id="logintext">
        <font size="6" color="white" face="Arial">Already have an account with us?<br/></font></font>
        <input type="submit" value="Login" id="login" class="button">
</p>
    <a href="customerdisp.php" >View Information </a>
    </body>
    </HTML>
    