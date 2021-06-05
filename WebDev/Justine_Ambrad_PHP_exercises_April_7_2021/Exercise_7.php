<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
    html {
  height: 100%;
}
body {
  min-height: 100%;
}
input{
    margin-left:50px;
    margin-bottom: 25px;
}
button{
    margin-left:50px;
}
</style>
    
</head>

<body>

 <form method="post">

            Enter value1 :<input type="text" name="str1"><br/>

            <button class="btn btn-primary" value="Sum" name="Submit1">Submit</button><br/><br/>

            <?php
            if(isset($_POST["Submit1"])){
                $number=$_POST["str1"];
                $numReverse = strrev($number);
            
                while(floor($numReverse)) {  
                    $rem = $numReverse % 10;  
                    $numReverse = $numReverse/10;  
                    switch($rem){
                        case 1:
                            echo " One ";
                            break;
                        case 2:
                            echo " Two ";
                            break;
                        case 3:
                            echo " Three ";
                            break;
                        case 4:
                            echo " Four ";
                            break;
                        case 5:
                            echo " Five ";
                            break;
                        case 6:
                            echo " Six ";
                            break;
                        case 7:
                            echo " Seven ";
                            break;
                        case 8:
                            echo " Eight ";
                            break;
                        case 9:
                            echo " Nine ";
                            break;
                    }
                    }
                    
                    

            }
        ?>

        </form>


</body>