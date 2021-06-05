<?php
   $servername='192.168.0.15';
   $username='Deboy';
   $password='davejustinejurick';
   $dbname = "daveemployee";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>