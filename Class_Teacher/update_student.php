<?php 
session_start();
require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Student Information</title>
	<style type="text/css">
		#main
		{
			width: 450px;
			height: 400px;
			margin:0 auto;
			border:0px solid black;
			margin-top:120px;
			padding-bottom:30px;
		}
		#main form 
		{

		}
		#main #search
		{
			width: 300px;
			height: 35px;
			margin-left:70px;
			margin-top: 40px;
		}
		::placeholder
		{
			font-family:Agency Fb;
			font-size: 1.8em;
			color:black;
		}
#main_heading 
			{
				width:350px;
				height: 35px;
				background-color: orange;
				font-size: 1.9em;
				text-align: center;
				margin:0 auto;
				margin-top:10px;
				border-radius: 25px 5px;
				border:1px solid black; 
				font-family: Agency Fb;
			}
 #sub
{
	width: 75%;
	height: 40px;
	margin-top: 15px;
     margin-left:50px;
	font-family: Agency Fb;
	font-size: 1.6em;
	font-weight: bold;
	background-color: orange;
	cursor: pointer;
}
#sub:hover
{
background-color: blue;
}

</style>
<script type="text/javascript">
	function chk()
	{
		var W=document.forms.search.Student_id.value;
		if(W == "")
		{
			alert("Please Enter Student id");
			return false;
		}
		else
			return true;
	}


</script>
</head>
<body>
<div id="main">
	<h4 id="main_heading">Update Student Information</h4>
<form action="" method="post" name="search" onsubmit="return chk()">
	<input type="text" name="Student_id" placeholder="Student_Id" id="search"><br>
	<input type="submit" name="submit" value="SEARCH" id="sub">
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$id=$_POST['Student_id'];
$sql="SELECT *FROM student WHERE student_id = '$id'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$found=mysqli_num_rows($fire);
	if($found === 1)
	{
		$_SESSION['rollno']=$id;
		header("Location:search_Student_result.php");

	}
	else
	{
		echo "<h2 style='font-family:Agency Fb;text-align:center;font-size:1.7em;'>Recored Not Found</h2>";
	}
}
else
{
	echo "<script>  alert('Error Occured');</script>";

}
}
?>
<?php require "footer.php"; ?>
