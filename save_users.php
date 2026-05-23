<?php

include "conn.php";	
$Name1=($_POST["Name1"]);
	$Username=($_POST["Username"]);
	$email=($_POST["email"]);
	$pass=($_POST["pass"]);
	$typ=($_POST["typ"]);

$sql="INSERT INTO users (username,passw)VALUES
('$Username','$pass')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if  ($result)
{ header('Location:/thema/index.php'); }
						
			
?>
