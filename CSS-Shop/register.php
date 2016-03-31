<!DOCTYPE html>
<html>

<?php
$cookie_name = "username";
$cookie_value = "Erin Morrison";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>

<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Welcome back, " . $cookie_name . " " ;
} else {
    echo "Welcome to CSS, " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

<script type="text/javascript">

var username, password;

function values()
{
	username= document.getElementById("username");
	password= document.getElementById("password");
}

function login()
{
	if (username = "emorrison19")
	{
		if (password = "Thisisatest6")
		{
			alert("Welcome!");
			window.location.href = 'file:///Z:/public_html/repos/CSS-Project/CSS-Shop/index.html';
		}
		else
		{
			alert("You have entered an incorrect username and/or password");
		}
	}
	else
		{
			alert("You have entered an incorrect username and/or password");
		}
}

</script>



<head>

<link rel="stylesheet" type="text/css" href="css/menus.css">



<title>Custom Snow Shop - Shop for Snowboarding Gear That's Taylored To Your Style</title>
</head>
<h1>
	<a href="index.html" class="logo"> 
			<img src="images/logo.png" alt="Logo" style="width:170px;height:63px;border:0">
	</a>

		<div id="search">
		<form id="searchbox" method="get">
			<input type="search" id="txtSearch" name="search" placeholder="Search..."/>
		
			<input type="submit" value="Search"/>
		</form>
		</div>
<div style="float: right">
	
	


	<a href="register.html">Sign Up</a>
	<a href="login.html">Log In</a>
	
	<a href="cart.html" class="cart">
		<img src="images/cart.png" alt="Your Cart" style="width:42px;height:42px;border:0">
	</a>
	
</div>	
<div style="clear: both"></div>
  
</h1>



<body>


<div class="ad">Ad Space</div>

<form action="profile-setup.html">
<div style="padding-bottom: 10px; padding-top: 5cm">
<input type="email" id="email" placeholder="Enter your e-mail" required>
<input type="email" id="confirmemail" placeholder="Confirm your e-mail" required>
</div>
<div style="padding-bottom: 50px">
<input type="password" id="inputpassword" placeholder="Enter password" requried>
<input type="password" id="confirmpassword" placeholder="Confirm password" required>
</div>
<div>
<input type="submit">
</div>
</form>
</body>

</html>