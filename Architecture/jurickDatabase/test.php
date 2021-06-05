
<!DOCTYPE html>
<html>
<head>
	<title>
		Insert Data
	</title>
		<style>
			body  {
			background-image: url("https://wallpaperaccess.com/full/1900851.png");
		
			}
			.btn{
				margin-left:40%;
				margin-top:20%;

			}
		</style>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
  <body>
  </body>
  </html>

<?php

if(isset($_POST['save']))
{	 
   
	 $first_name = $_POST['firstname'];
	 $last_name = $_POST['lastname'];
	 $city_name = $_POST['address'];
	 $email = $_POST['gender'];
	 
}


$SQLString = "insert into employee_data(firstName,lastName, address, gender) 
		values('$first_name', '$last_name','$city_name', '$email')";


?>


<form method="post" action="http://192.168.0.15:8081/CRUD_Dave/process2.php">
<input type="hidden" name="Query" value="<?=$SQLString?>">
<button class="btn btn-primary"type="submit" value="Add User" name="save">Add User</button>
</form> 