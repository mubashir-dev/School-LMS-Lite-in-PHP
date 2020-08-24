<!DOCTYPE html>
<html>
<head>
<title>File Uploading</title>
<!--<script  src="vali_date.js"></script> -->
<link rel="stylesheet" href="main.css">
<style type="text/css">
	*
	{
		font-family: Agency FB;
	}
	::placeholder
	{
		color:black;
		font-weight: normal;	}
	#Teacher_Name,#T_Username,
	{
		width:85%;
	height: 35px;
	margin:0 auto;
	border-radius: 8px;
	border-color:grey;
	font-size: 1.2em;
	}
	#sel
	{
	width:85%;
	height: 40px;
	margin:0 auto;
	border-radius: 8px;
	border-color:grey;
	font-size: 1.2em;
	border: 2px solid grey;
		
	}
</style>
<script type="text/javascript">
	function chk()
	{
var F_id=document.forms.form_teacher.Faculity_id.value;
var Class=document.forms.form_teacher.class_de.value;
var passwd_1=document.forms.form_teacher.choose.value;
var img_path=document.forms.form_teacher.pic.value;
	if(F_id == "")
	{
		alert("Please File id");
		return false;
	}
	else if(Class == "")
	{
		alert("Provide File Name");
		return false;
	}
	else if(passwd_1 == "")
	{
		alert("Please File Catageory");
		return false;
	}
	else if(img_path == "")
	{
		alert("Provide img_path ");
		return false;
	}
	else
	{
		return true;
	}
	}
</script>

</head>
<body>
<div id="form_sing_up">
<h3 id="main_heading">Upload File</h3>	
<form action="catch_file.php" method="post" name="form_teacher" onsubmit="return chk()"  enctype="multipart/form-data">
<label>File ID</label><br>
<input type ="text" placeholder="File ID" id="student_id" name="Faculity_id" style="font-size: 0.9em;padding-left:2px"><br>
<label>Posted By</label><br>
<input type ="text" placeholder="Posted By" id="student_id" name="class_de" style="font-size: 0.9em;padding-left:2px"><br>
<label>File Catageory</label><br>
<select name="choose" id="sel">
	<option value="">
		Select Catageory
	</option>

	<option value="Course">
		Course
	</option>

	<option value="Extra">
		Extra
	</option>
</select><br>
<label>Choose File For Uploading</label><br>
<input type="file"  id="file_img" name="pic" accept="doc,docx,pdf,ppt,pptx,xml"><br>
<input type="submit" name="submit" id="Send">
</form>
</div>
</body>
</html>