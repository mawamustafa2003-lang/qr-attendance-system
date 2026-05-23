<?php
session_start();
include 'conn.php';

 $username = $_POST['user'];
 $pass = $_POST['pass'];
	
$login = mysql_query("SELECT * FROM users WHERE username='$username' and passw='$pass' ");
// Check username and password match
if (mysql_num_rows($login) == 1) {
	$row=mysql_fetch_array($login);
  $_SESSION['username'] = $username;
   $_SESSION['type'] =$username ;
header('Location:/qr/index.php');

}
else {
// Jump to login page
echo " user or passward erorr";
}





?>