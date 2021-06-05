<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 
    echo("hello world!!!");
	 $first_name = $_POST['firstname'];
	 $last_name = $_POST['lastname'];
	 $address = $_POST['address'];
	 $gender = $_POST['gender'];
	 $sql = "INSERT INTO employee_data (firstName,lastName,address,gender)
	 VALUES ('$first_name','$last_name','$address','$gender')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}




