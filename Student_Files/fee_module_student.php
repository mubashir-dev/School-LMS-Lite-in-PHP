<?php 
require "connection.php";
require "header.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Teacher Login</title>
<style type="text/css">
*
{
	text-decoration: none;
	color:black;
	padding: 0px;
	margin:0px;
}
	#main_div
	{
		width: 100%;
		height: 610px;
		border:0px solid black;
		}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 96%;
		height: 450px;
		border: 0px solid blue;
		margin-left:100px;
		margin-top:40px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 1.5px solid black;
		margin-top:140px;
		margin-left:200px;
		float: left;
		cursor: pointer;
	}
	.box img
	{
     width: 114px;
    height: 124px;
    margin-left: 15px;
    margin-top: 10px;
}
	.box h6
	{
		width:auto;
		height:auto;
		border: 1px solid black;
		margin: 0 auto;
		margin-top: 30px;
		font-family: Agency Fb;
		font-size: 1.4em;
		text-align: center;
		font-weight: bold;
	}
	.box:hover
	{
box-shadow:3px 3px 5px 6px #ccc;
		border: 0px solid orange;
	}
	#footer
	{
		width: 100%;
		height: 35px;
		background-color: orange;
		margin-top: 25px;
		font-family: Agency fB;
		font-size: 1.5em;
		text-align:center;
		font-weight: bold;
		line-height: 35px;
	}
</style>
</head>
<body>
	<?php  ?>
<div id="main_div">
	<div id="main_body">
		<a href="fee_challan.php"><div class="box">
       <img src="fee_challan.png" >
			<h6>Fee Challan</h6>
		</div></a>
		<a href="fee_disp_specific.php">
		<div class="box">
		<img src="fee_info.png" >
			<h6>Dues Information</h6>
		</div></a>
	</div>
	
</div>
<?php  require "footer.php"; ?>
</body>
</html>