<?php
   $servername='192.168.0.20';
   $username='jurick';
   $password='jurick';
   $dbname = "jurickEmployee";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
   
?>