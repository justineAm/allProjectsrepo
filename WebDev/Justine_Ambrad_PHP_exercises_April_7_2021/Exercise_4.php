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



        
        ?>

        </form>


</body>