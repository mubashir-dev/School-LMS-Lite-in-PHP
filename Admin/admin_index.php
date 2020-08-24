<?php 
session_start();
require "connection.php";
require "header.php";
$username=$_SESSION['username'];
if(isset($username))
{
$sql=
"SELECT * FROM admin WHERE username = '$username'";
//echo $sql;
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	while($rows=mysqli_fetch_assoc($fire))
	{
		 $img_src=$rows['img_src'];
		 $name=$rows['name'];
		 $role=$rows['Role'];

	}

}
else
{
	echo "<script>  alert('Error Occured');</script>";
	header("Location:log_in.php");	

}
$_SESSION['img']=$img_src;
$_SESSION['name']=$name;
$_SESSION['Role']= $role;
}
else
{
		header("Location:log_in.php");	

}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $role; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
*
{
	text-decoration: none;
	color:black;
	padding: 0px;
	margin:0px;
}@-ms-viewport{
  width: device-width;
}
	#main_div
	{
		width: 100%;
		height: 780px;
		border:1px solid black;
		margin:0 auto;
	}
id
	{
		margin-bottom: 10px;
	}
	.main_body
	{
		max-width: 96%;
		max-height: 250px;
		border:0px solid black;
		margin:0 auto;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 2.5px solid black;
		margin-top:75px;
		margin-left:45px;
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
		border: 2px solid orange;
	}
	#clear
	{
		clear: both;
	}
	#footer
	{
		width: 100%;
		height: 35px;
		background-color: orange;
		margin-top: 0px;
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
	
	<div class="main_body">
		<a href="student_module.php">
			<div class="box">
       <img src="student.png" >
			<h6>Student Info</h6>
		</div></a>
		<a href="Result.php">
		<div class="box">
		<img src="Result.png" >
			<h6>Result</h6>
		</div></a>

		<a href="class_teacher.php">
		<div class="box">
		<img src="teacher_class.png">
			<h6>Class Teacher</h6>
		</div></a>
		<a href="student_dues.php">
		<div class="box">
		<img src="fee.png" >
		<h6>Student Dues
		</h6>
		</div>
		<a href="student_atten.php">
		<div class="box">
		<img src="atten.png">
			<h6>Attendance</h6>
		</div>
	    </a>
	</div>
	<div id="clear"></div>
	<div class="main_body">
		<a href="file_module.php">
		<div class="box">
		<img src="file.png">
			<h6>File And Content</h6>
		</div></a>
		<a href="Admin_tools.php">
		<div class="box" >
		<img src="Admin.png">
			<h6>Admin Tools</h6>
		</div></a>
	</div>
</div>
<div id="clear"></div>
<div id="footer">
		Student_Learning_Management_System Beta Vesion
	</div>
</body>
</html>