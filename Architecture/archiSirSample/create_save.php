<?php

$userN  = $_GET["thisUser"];
$passW  = $_GET["thisPass"];
$userEm  = $_GET["thisEmail"];



////specifying the credentials for connection
//$servername = "192.168.254.100";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users_table(User_name, User_pass, User_email)   
VALUES ('".$userN."', '".$passW."','.$userEm')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>