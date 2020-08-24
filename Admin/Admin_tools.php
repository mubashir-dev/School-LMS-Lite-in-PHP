<?php 
require "connection.php";
session_start();
$img_src=$_SESSION['img'];
$name=$_SESSION['name'];
$role=$_SESSION['Role'];
if(isset($_SESSION['name']
))
{

}
else
{
	header("Location:log_in.php");
}
require "header.php";

/* $uid=$_POST['Student_id'];
$pwd=$_POST['password'];
 //if(isset($uid))
{
$sql=
"SELECT * FROM admin WHERE username = '$uid' AND password ='$pwd'";
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
	header("Location:student_view.php");	

}
}
/*else
{
		echo "<script>  alert('Error Occured');</script>";
	header("Location:student_view.php");	

}
*/
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
		margin-left:105px;
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
	text-align: center;
	margin:0 auto;
	margin-top:10px;
	border-radius: ;
	border:0px solid black;
	font-family: Agency Fb; 
	font-size: 1.8em;
}

</style>
</head>
<body>
<div id="main_div">
	<h4 id="main_heading">Admin Tools</h4>
	<div id="main_body">
		<a href="create_admin.php">
		<div class="box">
		<img src="create.png" >
			<h6>Add Admin</h6>
		</div></a>
		<a href="all_admins.php">
		<div class="box">
		<img src="view.png" >
			<h6>View Admin's</h6>
		</div></a>
		<a href="update_admin.php">
		<div class="box">
		<img src="update.png" >
			<h6>Updat Admin's</h6>
		</div></a>
		<a href="drop_admin.php">
		<div class="box">
		<img src="delete.png" >
			<h6>Drop Admin</h6>
		</div></a>
		
			
	</div>
</div>
<div id="clear"></div>
<div id="footer">
		Student_Learning_Management_System Beta Vesion
	</div>
</body>
</html>