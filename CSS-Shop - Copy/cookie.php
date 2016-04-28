<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
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