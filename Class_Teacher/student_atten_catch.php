<?php 
$sub=$_POST['submit'];
if(isset($sub))
{
session_start();
require "header.php";
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
		$flag++;
}
if($flag  > 0 )
{
	echo "<script> alert('Attendance Successfully Store'); </script>";
	header("Location:class_login.php");
}
else
{
	echo "Failed To Store";
}
}
else
{
	header("Location:clas_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*
	{
		padding:0px;
		margin:0px;
	}
	</style>
</head>
<body>

</body>
</html>