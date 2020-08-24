<?php
$lhsot="localhost";
$user="";
$pass="";
$db="student_portal";
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