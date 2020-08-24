<?php 
session_start();
require "header.php";
require "connection.php";
$_SESSION['username'];
if(isset($_SESSION['username']
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
	<title>Class Teacher Login</title>
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
		height: auto;
		border:1px solid black;
		margin:0 auto;
	}
		#user_info h5
	{
		width: 150px;
		height: auto;
		border: 0px solid green;
		float: right;
		margin-top:15px;
		margin-bottom:2px;
		text-align: center;

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
		margin-left:230px;
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

			#main_heading 
{
	width:280px;
	height: 35px;
	background-color: orange;
	font-size: 1.7em;
	text-align: center;
	margin:0 auto;
	margin-top:10px;
	border:0px solid black; 
}
</style>
</head>
<body>
<div id="main_div">
	<h4 id="main_heading">Student Informations</h4>
	<div id="main_body">
		<a href="view_student_attendance.php">
		<div class="box">
		<img src="view.png" >
			<h6>View Student Attendance</h6>
		</div></a>
		<a href="search_student_attendance.php">
		<div class="box">
		<img src="search.png" >
			<h6>Search Student Attendance</h6>
		</div></a>
		
			
	</div>
</div>
<div id="clear"></div>
<?php  require "footer.php"; ?>
</body>
</html>