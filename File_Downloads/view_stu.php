<?php
require "connection.php";
require "..\Student_Files\header.php";
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
		margin:0px;
		text-decoration: none;
	}
	a
	{
		color:black;
	}

		#mian_div
		{
			width: 99%;
			height: 800px;
			border:0px solid black;
			margin: 0 auto;
			margin-top: 95px;
		}
		 #id
		{
			font-family: Agency FB;
			font-size: 1.6em;
			width: 250px;
			height: 45px;
			line-height: 45px;
			padding-left: 5px;
			margin-bottom:25px;
			background-color: orange;
		}
		table
		{
			width: 100%;
			border-collapse: collapse;
			font-family: Agency Fb;
			font-size: 1.5em;

		}
		th
		{
			font-family: Agency Fb;
			background-color: orange;
		}
	 tr	
		{
			border:1px solid black;
		}
		td
		{
			text-align:center;
		}


	</style>
</head>
<body>
<div id="mian_div">
<h5 id="id">List of Available Downloads</h5>
<?php 
$sql="SELECT *FROM files_download";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	echo "<table>";
	echo "<tr><th>Document Id</th><th>Name</th><th>Catageory</th><th>Uploaded Date</th><th>Uploaded By</th><th></th></tr>";
	while($rows=mysqli_fetch_assoc($fire))
	{
		echo "<tr>";
		echo "<td> ".$rows['file_id']."</td>";
		echo "<td> ".$rows['file_name']."</td>";
		echo "<td> ".$rows['catageory_file']."</td>";
		echo "<td> ".$rows['date']."</td>";
		$path=$rows['file_source'];
				echo "<td>".$rows['uploaded_by']."</td>";

		echo "<td> <a href='$path' download='download'> Download </a>"."</td>";
		echo "<tr>";
	}
	echo "<table>";
}


?>
</div>
<?php
require "footer.php"; ?>
</body>
</html>