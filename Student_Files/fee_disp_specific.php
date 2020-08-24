<?php 
require "connection.php";
require "header.php";
$id=$_SESSION['student_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Fee Information
	</title>
	<style type="text/css">
	table
	{
		margin: 0 auto;
		margin-top: 250px;
				margin-bottom:  242px;
				font-family: Agency Fb;
				font-size:1.6em;

	}
	th
	{
		background-color: orange;
	}
		table,tr,th,td
		{
			border:1px solid black;
			border-collapse:collapse;
		}
	</style>
</head>
<body>
<?php 
$qurey="SELECT *FROM fee WHERE student_id ='$id'";
$fire=mysqli_query($con,$qurey);
if($fire)
{
	$row=mysqli_num_rows($fire);
	if($row > 0)
	{	echo "<table>";
echo "<tr><th>Student Id</th><th>Fee Amount</th><th>Submission Date</th><th>Status</th></tr>";
		while ($rows=mysqli_fetch_assoc($fire))
		{
		echo "<tr>";
		echo "<td>".$rows['student_id']."</td>";
		echo "<td>".$rows['Fee_Amount']."</td>";
		echo "<td>".$rows['fee_sub_date']."</td>";
		echo "<td>".$rows['status']."</td>";
		echo "</tr>";
		}
	}
echo "</table>";

}
?>
</body>
<?php require "footer.php"; ?>
</html>