<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee_info");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if(isset($_POST['read'])){
    if (mysqli_num_rows($result) > 0) {
        ?>
          <table class="table table-striped" >
          
          <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City</td>
            <td>Email id</td>
          </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        
            <td><?php echo $row["first_name"]; ?></td>
            <td><?php echo $row["last_name"]; ?></td>
            <td><?php echo $row["city_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </table>
         <?php
        }
        else{
            echo "No result found";
        }
       
}
?>

