<!DOCTYPE html>
<?php
setcookie($cookie_name, $cooki_value, time() + 3600);
?>
<html>
<head>
	<title>Cookie Delete</title>
</head>
<body>
<?php
if(count($_COOKIE) > 0){
	echo "cookie is enabled.";
}else{
	echo "Cookie is disabled.";
}

?>
</body>
</html>