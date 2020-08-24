<?php 
require "connection.php";
require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Result Student
	</title>
	<style type="text/css">
			#Mian_window
			{
				width: 750px;
				height: 610px;
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
				margin-top:10px;
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

<?php 
//$stu_id=$_SESSION['student_id'];
$query="SELECT *FROM  Exam_Result WHERE student_id ='$id'";
$fire=mysqli_query($con,$query);
if($fire)
{   echo "<table>
	<tr>
		<th>Student id</th>
		<th>Obtain Marks</th>
		<th>Percentage</th>
		<th>Grade</th>
		<th>Status</th>
	</tr>";
	$row=mysqli_num_rows($fire);
	if($row > 0)
	{
		while ($rows=mysqli_fetch_assoc($fire)){
  
	
	echo "<tr>";
		    echo "<td>".$rows['student_id']."</td>";
			echo "<td>".$rows['obtian_marks']."</td>";
			echo "<td>". $rows['status']."</td>";
			echo "<td>".$rows['percentage']."</td>";
			echo "<td>".$rows['Grade']."</td>";
	echo "</tr>";
}}}
else
{
	echo "Recored Not Found";
	header("Location:stu_log_in.php");
} 
?>
</table>
</div>
<?php require "footer.php"; ?>
</body>
</html>