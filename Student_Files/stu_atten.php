<?php 
require "connection.php";
require "header.php";
$id=$_SESSION['student_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php  echo $_SESSION['name'];?>
	</title>
	<style type="text/css">
		#main_div
		{
			width: 100%;
			height: 440px;
		}
		#show
		{
			width: 250px;
			height: 250px;
			border:1px solid black;
			margin: 0 auto;
			margin-top: 150px;
			font-size: 11.8em;
			font-family: AgencY Fb;
			text-align: center;
			background-color: green;
			color:white;
			border-radius: 120px 120px;
			line-height: 250px;
		}

	</style>
</head>
<body>
	<div id="main_div">
		<div id="show">
			
<?php
$sql="SELECT *FROM attendance where status='present' AND student_id ='$id'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$total=mysqli_num_rows($fire);
	echo $total."%";
}
else
{
	echo "Error Occured";
}

?>
			</div>

</div>
</body>
</html>
<?php
require "footer.php";

?>