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



    <?php
        

        // Exercise number 2
        echo ('<h2>Exercise 2</h2>');
         $quantity1 = 70;
         $quantity2 = 100;
         $price1 = 35;
         $price2 = 30;
         $dealOne = $price1/$quantity1;// this get the individual price of the item  out of the quantity1 and price1
         $dealtwo = $price2/$quantity2; // this get the individual price of the item  out of quantity1 and price1
        if($dealOne<$dealtwo){
            echo "<p style = \"margin-left:50px;\">".$quantity1." pieces with the price of ".$price1." is the best deal!"."</p>";
        }else{
            echo "<p style = \"margin-left:50px;\">".$quantity2." pieces with the price of ".$price2." is the best deal!"."</p>";
        }        
        //End of Exercise number 2

        ?>

        </form>


</body>