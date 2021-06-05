<!DOCTYPE html>
<html>
<head>
	<title>
		Insert Data
	</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>
</head>
  <body>
  <center>
	<div class="container">
		<div style="margin-top:100px"class="col-sm-4">
			<form   method="post" action="process.php">
				<div class="form-group">
					First name:<br>
					<input  class="form-control" type="text" name="first_name">
				</div>
				<div class="form-group">
					Last name:<br>
					<input class="form-control" type="text" name="last_name">
				</div>
				<div class="form-group">
					City name:<br>
					<input class="form-control" type="text" name="city_name">
				<div class="form-group">
					Email Id:<br>
					<input class="form-control" type="email" name="email">
				</div>	
					<br><br>
					<button type="submit"  onclick = "" name="save"  class="btn btn-primary">Submit</button>
				
			</form>
			
		</div>
	</div?>
	</center>
	<script>
	</script>
  </body>
</html>