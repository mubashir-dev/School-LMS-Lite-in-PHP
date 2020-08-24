<?php 
require "connection.php";
$flag=0;
foreach($_POST['status'] as $id => $status )
{
         $student_id=$_POST['student_id'][$id];
	echo $student_id."<br>";
         $Status=$_POST['status'][$id];
	echo $Status."<br>";
	echo $date=date("Y-m-d")."<br>";
	$query="INSERT INTO  attendance VALUES ('$date','$student_id','$Status')";
	echo $query;
	
	  mysqli_query($con,$query);
		$flag
}
if($flag  > 0 )
{
	echo "<script> alert('Attendance Successfully Store'); </script>";
}
else
{
	echo "Failed To Store";
}

?>