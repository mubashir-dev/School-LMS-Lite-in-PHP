<?php
session_start();
 require "header.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Specific Student</title>
<link rel="stylesheet" href="main.css">
<style type="text/css">
	input
	{
		border-radius: none;
	}
	#main_div
	{
		width: 100%;
		height: auto;
		border: 1px solid black;

	}
	#main_div #src
	{
		width: 450px;
		height: 35px;
		margin-top: 250px;
		margin-left: 250px;
	}
	::placeholder
	{
		font-family: Agency Fb;
		font-size: 1.8em;

	}
	#Send{
width:350px;
height:45px;
border:1px solid black;
font-size:  1.7em;
margin-top:15px;
margin-left:305px;
font-family: Agency Fb;
font-weight: bold;
	border-radius: ;

}
#Send:hover
{
background-color: orange;
cursor:pointer;
}
#main_heading 
{
	width:280px;
	height: 35px;
	background-color: orange;
	font-size: 1.7em;
	text-align: center;
	margin:0 auto;
	margin-top:0px;
	border-radius: 15px; 
}


</style>
</head>
<body>
<form action="delete_student.php" method="post" id="main_div">
	<input type="text" name="roll_id" placeholder="Student_id" id="src"><br><br><br>
	<input type="submit" name="submit" value="Search" id="Send">
</form>
</body>
</html>
<?php require "footer.php";?>
