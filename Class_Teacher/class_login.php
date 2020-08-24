<?php 
require "connection.php";
session_start();
$id= $_SESSION['Faculity_id'];
if(isset($id))
{


}
else
{
	header("Location:log_in.php");
}
$sql="SELECT *FROM class_teacher WHERE user_name='$id'";
//echo $sql;
$fire=mysqli_query($con,$sql);
if($fire)
{
 $row=mysqli_num_rows($fire);
if($row  > 0)
{
	while($rows=mysqli_fetch_assoc($fire))
	{
	$img_src=$rows['img_src'];
	$name=$rows['teacher_name'];
	$fac_id=$rows['Faculty_id'];
	$class=$rows['class'];
	$section=$rows['section'];
	}
}
$_SESSION['img_src']=$img_src;
$_SESSION['name']=$name;
$_SESSION['Faculty_id']=$fac_id;
$_SESSION['class']=$class;
$_SESSION['section']=$section;
}
else
{
	header("Location:log_in.php");
}
?>
<?php require "header.php";?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?></title>
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
		height: 600px;
		border:0px solid black;
		margin:0 auto;
	}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 96%;
		height: 400px;
		border: 0px solid blue;
		margin:0 auto;
		margin-top:40px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 2px solid black;
		margin-top:140px;
		margin-left:55px;
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
		border: 2.5px solid black;
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
		border: 2px solid orange;
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
<div id="main_div">
	<div id="clear"></div>
	<div id="main_body">
		<a href="student_info.php"><div class="box">
       <img src="Information-icon.png" >
			<h6>Student Record</h6>
		</div></a>
		<a href="result_ch.php">
		<div class="box">
		<img src="Result.png" >
			<h6>Result</h6>
		</div></a>
		<a href="class_dues.php">
		<div class="box">
					<img src="fee.png" >
			<h6>Student Dues
			</h6>
		</div></a>
		<a href="student_atten.php">
		<div class="box">
		<img src="atten.png" >
			<h6>Attendance</h6>
		</div>
		</a>
		<a href="files_menu.php">
		<div class="box">
		<img src="files_chos.png" >
			<h6>Documents</h6>
		</div>
		</a>
	</div>
	
</div>
<div id="footer">
		Student_Learning_Management_System Beta Vesion
	</div>
</body>
</html>