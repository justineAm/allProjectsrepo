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
  <h3>Exercise number 3</h3>
  <p> This program accepts a user input and checks if the user input is a valid email address..</p>
  
  
  <form method="post" >
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">name</span>
        </div>
        <input type="text" class="form-control" placeholder="Username" id="usr" name="name">
        </div>

        <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Your Email" id="mail" name="email">
        <div class="input-group-append">
            <span class="input-group-text">@example.com</span>
        </div>
        </div>
        <button type="submit" class="btn btn-primary"name="submit">Submit</button>
  </form>
</div>
<?php
    if(isset($_POST['submit'])){
        class verifymyEmail{
            public $email;
            public function verifyEmail($email) { 
                

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo("<h3 style='color:green;text-align:center;'>$email is a valid email address</h3>");
                } else {
                    echo("<h3 style='color:green;text-align:center;'>$email is not a valid email address</h3>");
                }
                }
        
        }
    
    $myEmail = new verifymyEmail();
    $myEmail->verifyEmail($_POST['email']);
    
    }
    
?>



</body>
</html>
