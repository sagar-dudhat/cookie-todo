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
session_unset();
session_destroy();

echo "All session are removed and the destroyed!!"
?>

</body>
</html>