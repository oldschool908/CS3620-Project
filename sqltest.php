<?php
session_start();

$servername = "cs3620danielbaird.mysql.database.azure.com";

$username = (isset($_SESSION['SQLUSER']) ? $_SESSION['SQLUSER'] : $_ENV['SQLUSER']);
$password = (isset($_SESSION['SQLPW']) ? $_SESSION['SQLPW'] : $_ENV['SQLPW']);
$dbname = "cs3620";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";


$sql = "INSERT INTO shows (showid, showTitle)
VALUES (5, 'Rick and Morty')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT showid, showTittle FROM shows";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  //output data of each row
  while($row = $result->fetch_assoc()){
    echo "ID: " . $row["showid"]." - Title: ". $row["showTitle"] . "<br>";
  }
}else{
  echo "0 results";
}

$sql = "DELETE FROM shows WHERE showid=5";

if ($conn->query($swl) === TRUE){
  echo "Record deleted successfully";
}else{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>