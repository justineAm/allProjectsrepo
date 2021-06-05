

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
    h3{
        margin-top:50px;
        margin-bottom:50px;
    }
    form{
        margin-left:50px;
    }

    </style>
</head>
<body>
<h3>Exercise number 1</h3>
<h4>This program Calculate the difference between two dates using PHP OOP approach.
</h4><br><br><br>

<form  method="post">
   <p>First Date: <input type="date" name="date1" /></p>
   <p>Second Date: <input type="date" name="date2" /></p>
   <button class="btn btn-success"type="submit" name="submit" value="Submit" >Compare</button>
</form>

</body>
</html>
<?php

    if(isset($_POST['submit'])){
       
        $first = $_POST['date1'];
        $second = $_POST['date2'];
        $date1 = new DateTime($first);
        $date2 = new DateTime($second);
        $interval = $date1->diff($date2);
        echo "<h1 style='color:green;text-align:center;margin-top:50px'>Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days </h1>";
    }


?>
