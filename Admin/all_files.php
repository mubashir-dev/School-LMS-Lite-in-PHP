<?php
session_start();
require "header.php";
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		File Download
	</title>
	<style type="text/css">
		*
		{
			padding: 0px;
			margin: 0px;
		}
		#main_div
		{
			width: 100%;
			height: 535px;
			//margin-top:110px;
		}
		table
		{
			width: 96%;
			height: auto;
			font-family: Agency fb; 
			margin: 0 auto;
			border:1px solid black;
			font-size: 1.3em;
			text-align: center;
		}
		table,tr
		{
			border:1px solid black;
			border-collapse: collapse;
		}
		th
		{
			background-color: orange;
		}
		#id
		{
			width: 350px;
			height:50px;
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
				margin-bottom: 10px;
				border:1px solid black; 
				font-family: Agency Fb;
			}
	</style>
</head>
<body>
<div id="main_div">
<table>
<h5 id="main_heading">List of Available Downloads</h5>
<?php 
$sql="SELECT *FROM files_download";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	echo "<tr><th>Document Id</th><th>Name</th><th>Catageory</th><th>Uploaded Date</th><th>Uploaded By</th><th></th></tr>";
	while($rows=mysqli_fetch_assoc($fire))
	{
		echo "<tr>";
		echo "<td> ".$rows['file_id']."</td>";
		echo "<td> ".$rows['file_name'].$rows['file_source']."</td>";
		echo "<td> ".$rows['catageory_file']."</td>";
		echo "<td> ".$rows['date']."</td>";
		$path=$rows['file_source'];
				echo "<td>".$rows['uploaded_by']."</td>";

		echo "<td> <a href='$path' download='download'> Download </a>"."</td>";
		echo "<tr>";
	}
}


?>
</table>
</div>
<?php require "footer.php"; ?>
</body>
</html>