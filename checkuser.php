<?php
include_once("checktable.php");

echo "Creating user ...<br/>";

$email=$_GET['email'];

$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES (NULL, NULL, '$email')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully.<br/>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error . ".<br/>";
}

?>