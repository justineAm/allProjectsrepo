<?php
    include_once 'database.php';
    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE employee_info set userid ='" . $_POST['userid'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE userid='" . $_POST['userid'] . "'");
    $message = "Record Modified Successfully";
    }
    $result = mysqli_query($conn,"SELECT * FROM employee_info WHERE userid ='" . $_GET['userid'] ."'");

    $row= mysqli_fetch_array($result);
?>
<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <div class="container" >
                <div style="margin-top:100px"class="col-sm-4">
                    <form name="frmUser" method="post" action="">
                        <div>
                            <?php if(isset($message)) { echo $message; } ?>
                        </div>
                        <div style="padding-bottom:5px;">
                        
                        </div>
                        <div class="form-group">
                            Username: <br>
                            <input class="form-control" type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
                            <input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
                        </div>
                        <div class="form-group">
                            First Name: <br>
                            <input class="form-control" type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
                        </div>
                        <div class="form-group">
                            Last Name :<br>
                            <input class="form-control" type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
                        </div>
                        <div class="form-group">
                            City:<br>
                            <input class="form-control" type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
                        </div>
                        <div class="form-group">
                            Email:<br>
                            <input class="form-control" type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
                        </div>
                        <a href="retrieve.php"><input type="submit" name="submit" value="Submit" class="buttom"></a>
                    </form>
                </div>
            </div>
        </center>
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