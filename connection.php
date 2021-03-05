<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
	echo "Connection Failed";
}
else{
	echo "Connection Succesf";
}

?>