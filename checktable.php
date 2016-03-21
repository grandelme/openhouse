<?php
include_once("connectdb.php");

echo "Creating table ...<br/>";

$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30),
lastname VARCHAR(30),
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully.<br/>";
} else {
    echo "Error creating table: " . $conn->error . ".<br/>";
}
?>