<?php
header("Access-Control-Allow-Origin: *");

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $firstname = $_GET['firstName'];
    $lastname = $_GET['lastName'];
    $address = $_GET['address'];
    $gender = $_GET['gender'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><title>Update|Dave</title>
    <title>Retrieve</title>
</head>
<style>
body  {
		background-image: url("https://images.unsplash.com/photo-1557683316-973673baf926?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8&w=1000&q=80");
        background-repeat :no-repeat;
		background-size: cover;

		}
form{
    text-align:center;
    border: 1px solid white;
	padding : 30px;
	background: rgba(0, 100, 100, 0.5);
  	backdrop-filter: blur(8px);
    width:300px;
    margin-left:30%;

}
label{
    color:white;
}
legend{
    color:whitesmoke;
}
</style>
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Update Data</a>
        </div>
    </nav>
<br><br>
<div class="container">

<form method="post">
      <center>
      <legend>Personal information:</legend>
            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="hidden" class = "id" value="<?php echo $id; ?>"><br>
                <input type="text" class = "fname"name="firstName" value="<?php echo $firstname; ?>"><br>
            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label><br>
                <input type="text" class = "lname" name="lastName" value="<?php echo $lastname; ?>"><br>
            </div>

            <div class="form-group">
                <label for="address">Address:</label><br>
                <input type="text" class = "address"name="address" value="<?php echo $address; ?>"><br>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label><br>
                <input type="text" class = "gender"name="address" value="<?php echo $gender; ?>"><br>
            </div>
            <button type="button" id="update"class="btn btn-primary mb-3" value="update" name="update"> Update </button>
      </center>






</form>




<script src="ajax_function.js"></script>
</body>
</html>

