<?php 
require "header.php";
require "connection.php";
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Admin</title>
<!--<script  src="vali_date.js"></script> -->
<link rel="stylesheet" href="main.css">
<style type="text/css">
	*
	{
		font-family: Agency FB;
	}
	#form_sing_up
	{
		margin-top: 135px;
	}
	::placeholder
	{
		color:black;
	}
	#Teacher_Name,#T_Username
	{
		width:85%;
	height: 35px;
	margin:0 auto;
	border-radius: 8px;
	border-color:grey;
	font-size: 1.2em;
	}
</style>
<script type="text/javascript">
	function chk()
	{
var F_id=document.forms.form_teacher.Faculity_id.value;
var Class=document.forms.form_teacher.class_de.value;
var passwd_1=document.forms.form_teacher.passwd_1.value;
var passwd_2=document.forms.form_teacher.passwd.value;
var img_path=document.forms.form_teacher.pic.value;
	if(F_id == "")
	{
		alert("Please Enter Name");
		return false;
	}
	else if(Class == "")
	{
		alert("Provide username");
		return false;
	}
	else if(passwd_1 == "")
	{
		alert("Please Provide password");
		return false;
	}
	else if(passwd_2 == "")
	{
		alert("Please Provide Password");
		return false;
	}
	else if(passwd_1 != passwd_2)
	{
		alert("Passwords are not matched");
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
<h3 id="main_heading">Add Admin</h3>	
<form action="catch_admin.php" method="post" name="form_teacher" onsubmit="return chk()"  enctype="multipart/form-data">
<label>Name</label><br>
<input type ="text" placeholder="Name" id="student_id" name="Faculity_id" style="font-size: 1.1em;padding-left:2px"><br>
<label>Username</label><br>
<input type ="text" placeholder="username" id="class_stu" name="class_de" style="font-size: 1.1em;padding-left:2px"><br>
<label>password</label><br>
<input type ="password" placeholder="type Password" id="passwd_1"  name="passwd_1" style="font-size: 1.1em;padding-left:2px"><br>
<label>retype Password</label><br>
<input type ="password" placeholder="retype Password" id="passwd_2" name="passwd" style="font-size: 1.1em;padding-left:2px"><br>
<label>Choose Your Photo</label><br>
<input type="file"  id="file_img" name="pic"><br>
<input type="submit" name="submit" id="Send">
</form>
</div> <!-- End of Div  -->
<?php require "footer.php"; ?>
</body>
</html>