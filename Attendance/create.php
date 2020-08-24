<?php 
require "connection.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Student Attendance
	</title>
	<style type="text/css">
		select
		{
			width: 350px;
			height: 35px;
			border:2px solid black;
			font-family: Agency Fb;
			font-size: 1.6em;
		}
		label
		{
			font-size: 1.6em;
			font-family: Agency Fb;
		}
		#attend_form
		{
			width: 80%;
			height:850px;
			border:1px solid black;
			margin: 0 auto;
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
	border:1px solid black; 
}
.box
{
	width: 357px;
    height: 75px;
    border: 0px solid black;
    padding-left: 5px;
    float: left;
    margin-top: 10px;
    margin-left:30px;
}
#clear
{
	clear: both;
}
#sub
{
	width: 81%;
	height: 40px;
	margin-top: 10px;
	margin-left:95px;
	font-family: Agency Fb;
	font-size: 1.6em;
	font-weight: bold;
	background-color: orange;
	border-radius: 10px;
	cursor: pointer;
}
#sub:hover
{
background-color: blue;
}
#student_data
{
	width: 100%;
	height: auto;
	border-top:2px solid orange;
}
</style>
<script>
	function chk()
	{
		var clas=document.froms.atten.class_selector.value;
		var section=document.forms.atten.section_selector.value;
		if(clas == " " && Section == "")
		{
			alert("Some filed are blanks");
			return false;
		}
		else
			return true;
	}

</script>
</head>
<body>
<div id="attend_form" >
<form action="" method="post" name="atten">
<h4 id="main_heading">Attendance Sheet</h4>
<div class="box">
<label>Class</label><br>
<select name="class_selector" id="right">
	<option>Select Class</option>
	<option value="6th">
		6th
	</option>
	<option value="7th">
		7th
	</option>
	<option value="8th">
		8th
	</option>
	<option value="9th">
		9th
	</option>
	<option value="10th">
		10th
	</option>
</select><br>
</div>
<div class="box">
<label>Section</label><br>
<select name="section_selector" id="left">
	<option>Select Section</option>
	<option value="Green">
		Green
	</option>
	<option value="Yellow">
		Yellow
	</option>
	<option value="Pink">
		Pink
	</option>
	<option value="Blue">
		Blue
	</option>
</select>	
</div>
<div id="clear"></div>
<div id="student_data">
	
</div>
</div>	
<input type="submit" name="submit" value="SUBMIT" id="sub">
</form>
</body>
</html>