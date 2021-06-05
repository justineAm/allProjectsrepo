<?php

header("Access-Control-Allow-Origin: *");

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
<body>
<nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Retrieve Data</a>
        </div>
    </nav>
<br><br>
<div class="container">
<a href="http://192.168.0.14:8080/JustineAmbrad/Architecture/jurickDatabase/insert.php"> <button type="button"  class="btn btn-outline-dark"> Add User</button></a>
<br><br>
        <table class="table">
            <thead class="table-dark">
                <tr>
                
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="tbody" >
            
            </tbody>
          

        
                    
          
        </table>
    </div>

    <script src="ajax_function.js"></script>
</body>
</html>