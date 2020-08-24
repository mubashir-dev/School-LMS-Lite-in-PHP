<?php
$lhsot="localhost";
$user="root";
$pass="";
$db="portal_database";
$con=mysqli_connect($lhsot,$user,$pass,$db);
if($con)
{
echo "";
}
else 
{
	echo "Failed To Connect ".mysqli_connect_error($con);
}
?>