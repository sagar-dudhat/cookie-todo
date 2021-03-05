<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Zara";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
?>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "cookie named '" . $cookie_name . "'is not set!<br>";
}
else{
	echo "cookie '" . $cookie_name . "'' is set!<br>";
	echo "Value is : " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>