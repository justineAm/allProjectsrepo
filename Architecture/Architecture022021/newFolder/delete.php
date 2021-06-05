<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee_info");
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table class="table table-striped">

	<tr class="thead-dark">
		<td scope="col">Employee Id</td>
		<td scope="col" >First Name</td>
		<td scope="col">Last Name</td>
		<td scope="col">City</td>
		<td scope="col">Email id</td>
		<td scope="col">Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="thead-dark" class="<?php if(isset($classname)) echo $classname;?>">
	<td scope="col" ><?php echo $row["userid"]; ?></td>
	<td scope="col" ><?php echo $row["first_name"]; ?></td>
	<td scope="col"><?php echo $row["last_name"]; ?></td>
	<td scope="col"><?php echo $row["city_name"]; ?></td>
	<td scope="col"><?php echo $row["email"]; ?></td>
	<td scope="col"><a href="delete-process.php?userid=<?php echo $row["userid"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
	<div class="container">
            <div class="row">
                <div class="col-sm">
                    <form method="post" action="insert.php">
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="save" value="Create Data">
                    </form>
                </div>
                <div class="col-sm">
                    <form method="post" action="retrieve.php">
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="save" value="Retrieve Data">
                    </form>
                </div>
                <div class="col-sm">
                    <form method="post" action="update.php">
                        <br><br>
                        <input class="btn btn-primary"type="submit" name="save" value="Update Data">
                    </form>
                </div>
                <div class="col-sm">
                    <form method="post" action="delete.php">
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="save" value="Delete Data">
                    </form>
                </div>
            </div>
    </div>
</body>
</html>