<!DOCTYPE html>
<html>
<head>
	<title>
		Attendance Main Page
	</title>
	<style type="text/css">
		select
		{
			width: 350px;
			height: 35px;
			border:2px solid l:blue;
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
			height:auto;
			border:0px solid black;
			margin: 0 auto;
			margin-top: 150px;
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
}
.box
{
	width: 57%;
	height: 220px;
	border:0px solid black;
	margin-left: 145px;
	margin-top: 45px;
	padding-left: 65px;
}
#sub
{
	width: 55%;
	height: 40px;
	margin-top: 10px;
	margin-left:175px;
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

</style>
<script type="text/javascript">
	function chk()
	{
		var clas=document.getElementById("right").value;
		var cl=document.getElementById("right");
		var c2=document.getElementById("left");
		//var sec=document.getElementById("left").value;
		var sec=document.forms.selec_op.section_selector.value;
		if(clas == "select one")
		{
			alert("Please Select Class");
			cl.style.borderColor="red";
			return false;
		}
		else if(sec == "select_opt")
		{
			alert("Please Select Section");
			c2.style.borderColor="red";
			return false;
		}
		else
			return true;
	}

</script>
</head>
<body>
	<?php require "header.php"; ?>
<div id="attend_form" > 
<form action="Attendance_sheet.php" method="post" name="selec_op" onsubmit="return chk()">
<h4 id="main_heading">Attendance Window</h4>
<div class="box">
<label>Class</label><br>
<select name="class_selector" id="right">
	<option value="select one">Select Class</option>
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

<label>Section</label><br>
<select name="section_selector" id="left">
	<option value="select_opt">Select Section</option>
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
</select>	<br>
</div>
<input type="submit" name="submit" value="submit" id="sub">
</form>
</div>
</body>
</html>