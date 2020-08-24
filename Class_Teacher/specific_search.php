<?php 
require "connection.php";
session_start();
require 'header.php';
$id=$_POST['Student_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Result Student
	</title>
	<style type="text/css">
			*
			{
				padding:0px;
				margin: 0px;
			}
			#Mian_window
			{
				width: 750px;
				height: 620px;
				border:0px solid black;
				margin:0 auto;
			}
			#main_heading 
			{
				width:280px;
				height: 35px;
				background-color: orange;
				font-size: 1.9em;
				text-align: center;
				margin:0 auto;
				margin-top:120px;
				border-radius: 25px 5px;
				border:1px solid black; 
				font-family: Agency Fb;
			}
			#Mian_window table
			{
				
				margin:0 auto;
				margin-top: 15px;
				font-family: AgencY fB;
				font-size: 1.6em;
				text-align:center;

			}
			#Mian_window table, th			{
				width: auto;
				height: 25px;
				border: 2px solid black;
				border-collapse:collapse;
	}		
	</style>
</head>
<body>
<!-- PHP CODE END ABOVE  -->
<div id="Mian_window">
	<h4 id="main_heading">Result Sheet</h4>
<table>
	<tr>
		<th>Student id</th>
		<th>Obtain Marks</th>
		<th>Percentage</th>
		<th>Grade</th>
		<th>Status</th>
	</tr>
<?php 
$query="SELECT *FROM  Exam_Result WHERE student_id = '$id'";
//echo $query;
$fire=mysqli_query($con,$query);
if($fire)
{
		 $row=mysqli_num_rows($fire);
		if($row > 0)
		{
		while ($rows=mysqli_fetch_assoc($fire))
		{
	echo "<tr>";
		    echo "<td>".$rows['student_id']."</td>";
			echo "<td>".$rows['obtian_marks']."</td>";
			echo "<td>". $rows['status']."</td>";
			echo "<td>".$rows['percentage']."</td>";
			echo "<td>".$rows['Grade']."</td>";
	echo "</tr>";
		header("refresh:3;url=search_specific.php");


}}}
else
{
	echo "<script> alert('Recored Not Found');</script>";
	header("refresh:3;url=search_specific.php");
}
?>
</table>
</div>
<?php require "footer.php";?>
</body>
</html>