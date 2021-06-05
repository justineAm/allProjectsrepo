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
       



        // start of exercise number 5
        echo('<h2>Exercise 5</h2>');
        echo " <h3>The original sorted list of integer</h3>";
            $nums = array(1,2,2,2,3,3,4,5,5,6,6,9,9);
            print_r($nums);
            echo"<h3>After removing the recurring number</h3>";
            print_r(array_unique($nums));
            echo '<br>';
            
        // end of exercise number 5




        
        ?>

        </form>


</body>