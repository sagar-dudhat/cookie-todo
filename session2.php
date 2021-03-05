<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
<?php
echo "Favorite color is " . $_SESSION["favcolor"] = "yellow". "<br>";
echo "Favourie animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>