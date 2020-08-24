<?php 
session_start();
require "connection.php";
require "header.php";
if(isset($_SESSION['name']
))
{

}
else
{
	header("Location:log_in.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['Role']; ?>: Student  </title>
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
		height: auto;
		border:1px solid black;
		margin:0 auto;
	}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 100%;
		height: 690px;
		border:0px solid blue;
		margin-left:0;
		margin-top:px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 1.5px solid black;
		margin-top:190px;
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
box-shadow:3px 3px 5px 6px #ccc;
		border: 0px solid orange;
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
		#main_heading 
{
	width:280px;
	height: 35px;
	background-color: orange;
	font-size: 1.7em;
	text-align: center;
	margin:0 auto;
	margin-top:10px;
	border-radius: 25px 5px;
	border:0px solid black; 
	font-family: Agency Fb;
}
</style>
</head>
<body>
<div id="main_div">
	<h4 id="main_heading">Student Area</h4>
	<div id="main_body">
		<a href="create_student.php">
		<div class="box">
		<img src="create.png" >
			<h6>Creaet</h6>
		</div></a>
		<a href="update_student.php">
		<div class="box">
		<img src="update.png" >
			<h6>Update</h6>
		</div></a>
		<a href="del_student.php">
		<div class="box">
		<img src="delete.png" >
			<h6>Delete</h6>
		</div></a>
		<a href="search_Student.php">
		<div class="box">
		<img src="search.png" >
			<h6>Search</h6>
		</div></a>
		<a href="student_info.php">
		<div class="box">
		<img src="Information-icon.png" >
			<h6>All Recored</h6>
		</div></a>
	</div>
</div>
<div id="clear"></div>
<div id="footer">
		Student_Learning_Management_System Beta Vesion
	</div>
</body>
</html>