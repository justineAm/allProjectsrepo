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

        // Exercise number 2
        echo ('<h2>Exercise 2</h2>');
         $quantity1 = 70;
         $quantity2 = 100;
         $price1 = 35;
         $price2 = 30;
         $dealOne = 35/70;
         $dealtwo = 30/100;
        if($dealOne<$dealtwo){
            echo "<p style = \"margin-left:50px;\">".$quantity1." pieces with the price of ".$price1." is the best deal!"."</p>";
        }else{
            echo "<p style = \"margin-left:50px;\">".$quantity2." pieces with the price of ".$price2." is the best deal!"."</p>";
        }        
        //End of Exercise number 2

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
        echo ('<br><br><br><br><br><br><br><br><br><br><br><br>');


        // Exercise number 4
        echo('<h2>Exercise 4</h2>');
        function armstrongCheck($number1){
            $total = 0;  
            $num = $number1;  
            while($num != 0)  
            {  
                $rem = $num % 10;  
                $total = $total + $rem*$rem*$rem;  
                $num = $num / 10;  
            }  
              
            // if true then armstrong number
            if ($number1 == $total)
                return 1;
              
            // not an armstrong number    
            return 0;   
            if ($number2 == $total)
                return 1;
              
            // not an armstrong number    
            return 0;   
        }
          
        // Driver Code
        $number1 = 153;
        $number2 = 154;

        $flag = armstrongCheck($number1);
        if ($flag == 1)
           echo "<p  style = \"margin-left:50px;\">"."<b>$number1 is an Armstrong Number </b></p><br><br>";
        else
        echo "<p  style = \"margin-left:50px;\">"."<b>$number1 is NOT an Armstrong Number </b></p><br><br>";
        $flag1 = armstrongCheck($number2);
        if ($flag1 == 1)
        echo "<p  style = \"margin-left:50px;\">"."<b>$number2 is an Armstrong Number </b></p><br><br>";
        else
        echo "<p  style = \"margin-left:50px;\">"."<b>$number2 is NOT an Armstrong Number </b></p><br><br>";
        
        //End of Exercise number 4



        // start of exercise number 5
        echo('<h2>Exercise 5</h2>');
        echo " <h3>The original sorted list of integer</h3>";
            $nums = array(1,2,2,2,3,3,4,5,5,6,6,9,9);
            print_r($nums);
            echo"<h3>After removing the recurring number</h3>";
            print_r(array_unique($nums));
            echo '<br>';
            
        // end of exercise number 5




        // start of exercise 6
        echo('<h2>Exercise 6</h2>');
        echo " <h3>The original sorted list of string</h3>";
        $sampleString=array("a"=>"Hello","b"=>"Hello","c"=>"World","d"=>"World");
        print_r($sampleString);
        echo"<h3>After removing the recurring string</h3>";
        print_r(array_unique($sampleString));
        //end of exercise 6


        //start of exercise 7
        // "<form method=\"post\">";
            echo('<h2>Exercise 7</h2>');
        //     "<div class=\"input-group mb-4\">";
        //     "<div class=\"input-group-prepend\">";
        //     "<span class=\"input-group-text\" id=\"basic-addon1\">@</span>";
        //     "</div>";
        //     echo"<input name = \"input1\"id=\"input\"type=\"text\" class=\"form-control \" placeholder=\"Enter a number\" aria-label=\"number\" aria-describedby=\"basic-addon1\">";
        //     "</div>";
        //     echo "<button name=\"Submit1\"type=\"submit\" class=\"btn btn-primary\">Submit</button>";
        //     if(isset($_POST["submit1"])){
        //         $num = $_POST["input1"];
        //         echo($num);
        //         // $numRev = 
        //     }
        // "</form>"
       
        //end of exercise 7
?>
        

        <form method="post">

            Enter value1 :<input type="text" name="str1"><br/>

            <button class="btn btn-primary"type="submit" value="Sum" name="Submit1">Submit</button><br/><br/>

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
</html>