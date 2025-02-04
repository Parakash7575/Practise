<?php

$username = "root";
$password = "0707";
$dbname = "test";
$host = "localhost";
$port = 3306; 

	$con = mysqli_connect($host, $username, $password, $dbname, $port);

	
	if(!$con){
		echo"not";
	}else{
		echo"sucess";
		
		echo"<br>";
	}
	
	$query="select e_name,e_salary  from em";
	
	$re=mysqli_query($con,$query);
	
	if(!$re){
		echo"not";
	}
		while($row=mysqli_fetch_row($re)){
			echo"Name :$row[0] salary = $row[1]";
			echo"<br>";
			
		}
		
	



?>
