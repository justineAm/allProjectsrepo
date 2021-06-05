           

<?php
function fileLine($filename,$lineNumber){
    $lines = $filename;
    $desired_line = $lineNumber-1;
    $line_counter = 0; 
     $fh = fopen('mytext.txt','r') or die($php_errormsg);
      while ((! feof($fh)) && ($line_counter <= $desired_line)) {
           if ($str = fgets($fh,10122132)) {
                $line_counter++; 
            } 
        } 
        fclose($fh) or die($php_errormsg);
        echo "The text of the line $lineNumber of the text file is : ";
        echo "<br>";
        print "<h3>$str</h3>"; 
   
}
fileLine("myText",3)

?>