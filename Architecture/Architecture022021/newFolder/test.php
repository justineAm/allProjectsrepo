<?php



$SQLString = "insert into employee_data(firstName,lastName, address, gender) 
		values('Romeo', 'Rodemio','dalaguete', 'male')";


?>


<form method="post" action="http://192.168.0.15:8081/CRUD_DAVE/process.php">
<input type="hidden" name="Query" value="<?=$SQLString?>">
<input type="submit" value="Add Data" name="save">
</form>


