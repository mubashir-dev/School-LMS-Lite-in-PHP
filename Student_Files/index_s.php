<?php 
session_start();
require "connection.php";
$email=$_SESSION['Faculity_id'];
$sql=
"SELECT * FROM student WHERE email = '$email'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	while($rows=mysqli_fetch_assoc($fire))
	{
		 $img_src=$rows['pic_source'];
		 $name=$rows['firsrt_name'] . " ".$rows['Last_name'];
	     $f_id=$rows['student_id'];
	     $clas=$rows['class'];
	     $sec=$rows['section'];
	     $f_name=$rows['father_name'];
	}

}
else
{
	echo "<script>  alert('Error Occured');</script>";
	header("Location:log_in_stu.php");	

}
/*else
{
		echo "<script>  alert('Error Occured');</script>";
	header("Location:student_view.php");	

}*/
$_SESSION['student_id']=$f_id;
$_SESSION['class']=$clas;
$_SESSION['img']=$img_src;
$_SESSION['section']=$sec;
$_SESSION['name']=$name;
$_SESSION['f_name']=$f_name
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
		height: 670px;
		border:0px solid black;
		}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 96%;
		height: 550px;
		border: 0px solid blue;
		margin: 0 auto;
		margin-top:40px;
	}
	#inner
	{
		width: 86%;
		height: 550px;
		margin: 0 auto;
		border:0px solid black;	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 2.5px solid black;
		margin-top:140px;
		margin-left:40px;
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
box-shadow:3px 3px 5px 6px orange;
		border: 2.5px solid orange;
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
	<?php error_reporting(0);
  require "header.php";?>
<div id="main_div">
	<div id="main_body">
		<div id="inner">
			
		<a href="view_stu.php"><div class="box">
       <img src="download.png" >
			<h6>Downloads</h6>
		</div></a>
		<a href="student_result.php">
		<div class="box">
		<img src="Result.png" >
			<h6>Result</h6>
		</div></a>
		<a href="fee_module_student.php">
		<div class="box">
					<img src="fee.png" >
			<h6>Student Dues
			</h6>
		</div></a>
		<a href="stu_atten.php">
		<div class="box">
		<img src="atten.png" >
			<h6>Attendance</h6>
		</div>
		</a>

		</div>
	</div>
	
</div>
<?php require "footer.php"; ?>
</body>
</html>