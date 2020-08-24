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
?><?php
if(isset($_POST['submit']))
{
 $id=$_POST['class'];
 $section=$_POST['section'];
$sql="SELECT *FROM student WHERE class = '$id' AND section ='$section'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	echo $found=mysqli_num_rows($fire);
	if($found > 0)
	{
		$_SESSION['class']=$id;
		$_SESSION['section']=$section;
		header("Location:student_all_info.php");

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
			font-family: Agency Fb;
			font-size: 1.4em;
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
		var W=document.forms.search.class.value;
		var X=document.forms.search.section.value;
		if(W == "")
		{
			alert("Please Select Class");
			return false;
		}
		else if(X == "")
		{
			alert("Please Select Section");
			return false;
		
		}
		else
			return true;
	}


</script>
</head>
<body>
<div id="main">
	<h4 id="main_heading"> Student Information</h4>
<form action="" method="post" name="search" onsubmit="return chk()">
	<select name="class" id="search">
		<option>Select Class</option>
		<option value="10th">10th</option>
		<option value="9th">9th</option>
		<option value="8th">8th</option>
		<option value="7th">7th</option>
		<option value="6th">6th</option>
	</select><br>
	<select name="section" id="search">
		<option>Select Section</option>
		<option value="Green">Green</option>
		<option value="Yellow">Yellow</option>
		<option value="Pink">Pink</option>
		<option value="Blue">Blue</option>
	</select>
	<input type="submit" name="submit" value="SEARCH" id="sub">
</form>
</div>
</body>
</html>
<?php require "footer.php"; ?>
	