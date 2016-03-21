<?php
$servername = "localhost";
$username = "openhouse";
$password = "1234isnotarealpassword";
$database = "openhouse_";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . ".<br/>");
}
else
{
	echo "Connection successful.<br/>";
}
?>