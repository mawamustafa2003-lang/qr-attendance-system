<?php

include "conn.php";	


		  $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

 $depart = isset($_GET['depart']) ? $_GET['depart'] : '';
$d1="1.jpg";
if ($depart =="depart1")
{
$sql="UPDATE stud SET depar1='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart2")
{
$sql="UPDATE stud SET depar2='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart3")
{
$sql="UPDATE stud SET depar3='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart4")
{
$sql="UPDATE stud SET depar4='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart5")
{
$sql="UPDATE stud SET depar5='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart6")
{
$sql="UPDATE stud SET depar6='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart7")
{
$sql="UPDATE stud SET depar7='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart8")
{
$sql="UPDATE stud SET depar8='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart9")
{
$sql="UPDATE stud SET depar9='$d1' WHERE d2='$filter'";
}elseif ($depart =="depart10")
{
$sql="UPDATE stud SET depar10='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart11")
{
$sql="UPDATE stud SET depar11='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart12")
{
$sql="UPDATE stud SET depar12='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart13")
{
$sql="UPDATE stud SET depar13='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart14")
{
$sql="UPDATE stud SET depar14='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart15")
{
$sql="UPDATE stud SET depar15='$d1' WHERE d2='$filter'";
}
elseif ($depart =="depart16")
{
$sql="UPDATE stud SET depar16='$d1' WHERE d2='$filter'";
}
else
{}
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if  ($result)
{ header('Location:/thema/khatem.php'); 
}
						
			
?>
