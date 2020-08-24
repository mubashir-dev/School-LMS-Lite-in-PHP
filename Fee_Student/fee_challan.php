<?php 
require "connection.php";
$query="SELECT *FROM "

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Fee Challan
	</title>
	<style type="text/css">
		#main_body
		{
			width: 350px;
			height: 640px;
			border:1px solid black;
			margin:0 auto;
			clear: both;
			
		}
		#main_body h6
		{
			width: 130px;
			height: 35px;
			border:0px solid black;
			margin-left:35px;
			float:left;
			text-align:center;
			font-family: Agency Fb;
			font-size: 1.4em;

		}
		#main_body h4
		{
			font-size: 1.6em;
			font-family: Agency Fb;
			text-align: center;
			margin-top: 2px;
		}
		#main_body h5
		{
			font-family: Agency Fb;
			font-size: 1.5em;
			margin-left:10px;
		}
		table
		{
			border-bottom:2px solid black;
			font-family: Agency Fb;
			font-size: 1.6em;	
		}
		th
		{
			border-bottom: 2px solid black;
			width: 75%;
			height: 25px;
		}
		#table_fee
		{
			width: auto;
			height: auto;
			border-top:2px solid black;
			text-align: center;
		}	
		#clear
		{
			clear: both;
		}


	</style>
</head>
<body>
<div id="main_body">
	<h4>GOVT HIGH SCHOOL NO # 3 ABBOTTABAD</h4>	
	<h4>Fee Challan</h4>
	<h5>Name : </h5>
	<h5>Father Name :</h5>
	<h5>Class :</h5>
	<div id="table_fee">
	<table>
		<tr>
			<th>Section</th>
			<th>Date</th>
			<th>Amount</th>
		</tr>
		<tr>
			<td>Green</td>
			<td><?php $da=date("Y-m-d");
			echo $da; ?></td>
			<td>3500 /-</td>
		</tr>
	</table>

</div>
<h6 >Finance Admin</h6>
<h6>Clerk</h6>
</div>
<div id="clear"></div>
</body>
</html>