<?php 
session_start();
require "header.php";
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Student Information
	</title>
	<style type="text/css">
		*
		{
			padding:0px;
			margin: 0px;
		}
		
		#main_body
		{
			width: 100%;
			height: 550px;
			border:1px solid black;
		}
		th
		{
			background-color: orange;
		}
	    #main_body table
		{
			width: 98%;
			border:1px solid black;
			margin: 0 auto;
			margin-top: 65px;
			border-collapse: collapse;
			font-family: Agency Fb;
			font-size: 1.2em;

		}
		td
		{
font-size: 1.0em;		}
		#main_body th,tr,td
		{
			border:1px solid black;
			border-collapse: collapse;
			text-align: center;
		}
		#clear
		{
			clear: both;
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

	</style>
</head>
<body>

<div id="clear"></div>
<div id="main_body">
	<h4  id="main_heading">Student Information</h4>

<?php
$query="SELECT *FROM class_teacher";
$fire=mysqli_query($con,$query);
if($fire)
{
$row=mysqli_num_rows($fire);
if($row > 0)
{
	echo "<table>";
	echo "<tr>";
	echo "<th>Faculity ID</th>";
	echo "<th>Name</th>";
	echo "<th>Class</th>";
	echo "<th>Section</th>";
	echo "<th>username</th>";
	echo "<th>Gender</th>";
	echo "</tr>";
	while($rows=mysqli_fetch_assoc($fire))
	{
echo "<tr>";
echo "<td>".$rows["Faculty_id"]. "</td>";
echo "<td> ".$rows["teacher_name"];
echo "<td>".$rows["class"]."</td>";
echo "<td>".$rows["section"]."</td>";
echo "<td>".$rows["user_name"]."</td>";
echo "<td>".$rows["gender"]."</td>";
echo "</tr>";
	}
	echo"</table>";
} 
}

?>
</div>
</body>
<?php require "footer.php";?>
</html>