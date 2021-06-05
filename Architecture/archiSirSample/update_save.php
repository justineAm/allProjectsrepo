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

$records = mysqli_query($db,"select * FROM users_table");

$sql = "UPDATE  users_table set User_pass= '".$passW."' where User_name = '".$userN."'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>