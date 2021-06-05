<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exercise 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Exercise number 4</h3><br><br>
  <p> This program checks a passed form, and verifies if the form contains a field for name, address, age, and contact number. Once verified, display the said form with the input values in the page.</p>
  
  <br><br>
  <form method="post" >
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
        </div>
        <input type="text" class="form-control" placeholder="Username" id="usr" name="name">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Address</span>
            </div>
            <input type="text" class="form-control" placeholder="Your place" id="mail" name="address">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Age</span>
            </div>
            <input type="text" class="form-control" placeholder="Your Address" id="address" name="age">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text">Contact Number</span>
            </div>
            <input type="text" class="form-control" placeholder="Your number" id="pass" name="number">
        </div>
        <button type="submit" class="btn btn-primary"name="submit">Submit</button>
  </form>
</div>
<?php
    if(isset($_POST['submit'])){
        class checksForm{
            public $form;
            public function verifyform() { 
                

                if(!empty($_POST['name'])&
                    !empty($_POST['address'])&
                    !empty($_POST['age'])&
                    !empty($_POST['number'])
                    ){
                        echo("<h4 style='text-align:center;color:green;'>".$_POST['name']."</h4>");
                       
                        echo("<h4 style='text-align:center;color:green;'>".$_POST['address']."</h4>");
                       
                        echo("<h4 style='text-align:center;color:green;'>".$_POST['age']."</h4>");
                       
                        echo("<h4 style='text-align:center;color:green;'>".$_POST['number']."</h4>");

                }else{
                    echo"<script type='text/javascript'>alert('Please fill up all the form!')</script>";
                }
            }
        
        }
        $myform = new checksForm();
        $myform->verifyform();
    
    
    }

    
?>



</body>
</html>
