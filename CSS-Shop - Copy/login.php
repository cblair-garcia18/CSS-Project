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
<head id= "grad">

<link rel="stylesheet" type="text/css" href="css/menus.css">
<script type="text/javascript" src="javascript/login.js">-->

<!--<script type="text/javascript"> -->

var username, password, testuser, testpass;

function values()
{
	username = document.getElementById("username");
	password = document.getElementById("password");
	testuser = "emorrison19";
	testpass = "Thisisatest6";
}

function login()
{
	if (username == testuser)
	{
		if (password == testpass)
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









<title>Custom Snow Shop - Shop for Snowboarding Gear That's Tailored To Your Style</title>
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
	<a href="login.php">Log In</a>
	
	<a href="cart.html" class="cart">
		<img src="images/cart.png" alt="Your Cart" style="width:42px;height:42px;border:0">
	</a>
	
</div>	

<div style="clear: both"></div>
  
</h1>



<body>


<div class="ad">Ad Space</div>


<div style="padding-top: 5cm">


<form action="logincheck.php">
 <input type="text" id="username" placeholder="Username..." required>
 <input type="password" id="password" placeholder="Password..." required>
 <input type="button" onclick="login()" value="Log In">
</form>
</div>


</body>

</html>