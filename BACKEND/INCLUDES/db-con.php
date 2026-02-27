<?php 
$host = "localhost";
$server = "root";
$password = "";
$dbname = "db_resort";

$conn = new mysqli($host, $server, $password, $dbname);

if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}

echo("Connection Successful");

?>
