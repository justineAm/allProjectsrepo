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
        // Exercise number 1
        echo('<h2>Exercise 1</h2>');
        $Json_data = json_decode('[
                    {
                    "name" : "John Garg",
                    "age"  : "15",
                    "school" : "Ahlcon Public school"
                    },
                    {
                    "name" : "Smith Soy",
                    "age"  : "16",
                    "school" : "St. Marie school"
                    },
                    {
                    "name" : "Charle Rena",
                    "age"  : "16",
                    "school" : "St. Columba school"
                    }
                ]');

        foreach ($Json_data as $key => $jsons) { // This will search in the 2 jsons
            foreach ($jsons as $key => $value) {
                echo ("<p style = \"margin-left:50px;\">".$key . " :  " . $value ."</p>". "<br>"); // This will show jsut the value f each key like "var1" will print 9
                // And then goes print 16,16,8 ...
            }
            echo ('<br>');
        }
        // End of the exercise number 1

        ?>

</body>