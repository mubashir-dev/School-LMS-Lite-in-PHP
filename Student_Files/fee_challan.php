<?php 
require "connection.php";
require "header.php";
$id=$_SESSION['student_id'];
$sql="SELECT Fee_Amount FROM fee WHERE student_id ='$id'";
$fire=mysqli_query($con,$sql);
if($fire)
{
$row=mysqli_num_rows($fire);
if($row > 0)
{
$rows=mysqli_fetch_assoc($fire);
$fee=$rows['Fee_Amount'];	
}	
}
else
{
	echo "Error Occured";
}
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
			margin-top: 25px;
			
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
	<h5>Name : <?php  echo $_SESSION['name'];
?></h5>
	<h5>Father Name :<?php echo $_SESSION['f_name'];
 ?></h5>
	<h5>Class :<?php echo $_SESSION['class'];
; ?></h5>
	<div id="table_fee">
	<table>
		<tr>
			<th>Section</th>
			<th>Date</th>
			<th>Amount</th>
		</tr>
		<tr>
			<td><?php echo $_SESSION['section'];
; ?></td>
			<td><?php $da=date("Y-m-d");
			echo $da; ?></td>
			<td><?php echo $fee; ?> /-</td>
		</tr>
	</table>

</div>
<h6 >Finance Admin</h6>
<h6>Clerk</h6>
</div>
<div id="clear"></div>
<?php require "footer.php"; ?>
</body>
</html>