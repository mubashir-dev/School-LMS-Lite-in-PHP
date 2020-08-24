<?php 
require "connection.php";
echo $uid=$_POST['Student_id'];
echo $pwd=$_POST['password'];
$sql="SELECT *FROM class_teacher WHERE user_name = '$uid' AND password = '$pwd'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	header("Location:class_login.php");

}
else
{
header("Location:log_in.php");	
}
?>