<?php
$servername = "cs3620danielbaird.mysql.database.azure.com";
$username = "daniel@cs3620danielbaird";
$password = "Lolman908";
$dbname = "cs3620";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


$sql = "INSERT INTO shows (showid, showTitle)
VALUES (3, 'Community')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>