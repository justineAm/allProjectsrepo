<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd204";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $_POST["Query"];

if ($conn->query($sql) === TRUE) {
  echo "Operation Successful";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





?>