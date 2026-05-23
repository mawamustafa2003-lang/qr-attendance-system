<?php

include "conn.php";	
$d1=($_POST["d1"]);
	$d2=($_POST["d2"]);
	$d3=($_POST["d3"]);
	$d4=($_POST["d4"]);
	$d5=($_POST["d5"]);

$sql="INSERT INTO stud (d1,d2,d3,d4,d5)VALUES
('$d1','$d2','$d3','$d4','$d5')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if  ($result)
{ header('Location:/qr/emp.php'); }
						
			
?>
