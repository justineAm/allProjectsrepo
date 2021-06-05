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
        

        // Start of exercise number 3
        echo('<h2>Exercise 3</h2>');
        echo "<table   style = \"margin-left:50px;\" align=\"left\" border=\"1\" cellpadding=\"3\" cellspacing=\"0\">";

        for($i=1;$i<=10;$i++){
            echo "<tr>";
            for ($j=1;$j<=10;$j++){
                $qoutient = number_format(($i/$j), 2, '.', '');
                echo "<td>$i / $j = ".$qoutient ."</td>";
            }
            echo "</tr>";
            }

            echo "</table>";
        // End of exercise number 3
    


        
        ?>

        </form>


</body>