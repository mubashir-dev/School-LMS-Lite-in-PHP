<?php
require "connection.php";
$roll_id=$_POST["roll_id"];
$query="DELETE FROM student where student_id='$roll_id'";
if(mysqli_query($con,$query))
{
	echo "<script> alert('Student Recored Successfully Deleted from database'); </script>";
	header("refresh:4;url=index.php");
}
else
{
	echo "<script> alert('Student Recored not Successfully Deleted from database'); </script>";
	header("refresh:4;url=index.php");
}

?>