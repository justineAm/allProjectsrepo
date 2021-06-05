<?php
header("Access-Control-Allow-Origin: *");
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Insert Data
	</title>
	<style>
		body  {
		background-image: url("https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80");
        background-repeat :no-repeat;
		background-size: cover;

		}
		form{
			border: 1px solid white;
			padding : 30px;
			background: rgba(0, 100, 100, 0.5); 
  			backdrop-filter: blur(8px);
		}

    </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
  <body>

  <center>
	<div class="container">
		<div style="margin-top:100px; color:white;s"class="col-sm-4">
		<div class="wel">
			<h2>Add user</h2>
		</div>
			<form>
				<div class="form-group">
					First name:<br>
					<input  class="form-control fname" type="text" name="firstname">
				</div>
				<div class="form-group">
					Last name:<br>
					<input class="form-control lname" type="text" name="lastname">
				</div>
				<div class="form-group">
					Address :<br>
					<input class="form-control address" type="text" name="address">
				<div class="form-group">
					Gender:<br><br>
					<input class="form-control gender"  name="gender">
				</div>
					<br><br>
					<button type="button"  name="save"  class="insert btn btn-primary">Submit</button>

			</form>
		</div>
	</div?>

	</center>
	<script src="ajax_function.js"></script>
  </body>
</html>
