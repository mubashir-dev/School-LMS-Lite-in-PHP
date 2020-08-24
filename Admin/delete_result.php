<?php
session_start();
require "connection.php";
$roll_id=$_SESSION['rollno'];
$query="DELETE FROM student where student_id='$roll_id'";
if(mysqli_query($con,$query))
{
	echo "<script> alert('Student Recored Successfully Deleted from database'); </script>";
	header("refresh:1;url=student_module.php");
}
else
{
	echo "<script> alert('Student Recored not Successfully Deleted from database'); </script>";
	header("refresh:1;url=student_module.php");
}

?>