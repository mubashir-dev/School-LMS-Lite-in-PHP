<?php
session_start();
require "header.php";
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Class Teacher </title>
<link rel="stylesheet" href="main.css">
<style type="text/css">
	*
	{
		font-family: Agency FB;
	}
	::placeholder
	{
		color:black;
		font-size: 1.1em;
		font-weight: initial;
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
var name=document.forms.form_teacher.Teacher_name.value;
var F_id=document.forms.form_teacher.Faculity_id.value;
var Class=document.forms.form_teacher.class_de.value;
var section=document.forms.form_teacher.section.value;
var username =document.forms.form_teacher.username.value;
var passwd_1=document.forms.form_teacher.passwd_1.value;
var passwd_2=document.forms.form_teacher.passwd.value;
var img_path=document.forms.form_teacher.pic.value;
var cont_no=document.forms.form_teacher.contact_no.value;
var gender=document.forms.form_teacher.gender.value;
	if(F_id == "")
	{
		alert("Please Enter Faculity_id");
		return false;
	}
	else if(Class == "")
	{
		alert("Provide Class Name");
		return false;
	}
	else if(section  == "")
	{
		alert("Provide Section Name");
		return false;
	}
	else if(name == "")
	{
		alert("Please Provide Faculity Name");
		return false;
	}
	else if(username == "")
	{
		alert("Provide Username");
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
	else if(gender == "")
	{
		alert("Select Gender");
		return false;
	}
	else if(cont_no == "")
	{
		alert("Provide Contact Number");
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
<h3 id="main_heading">Class Teacher Form</h3>	
<form action="" method="post" name="form_teacher" onsubmit="return chk()"  enctype="multipart/form-data">
<label>Faculity ID</label><br>
<input type ="text" placeholder="Faculity ID" id="student_id" name="Faculity_id" style="font-size: 1.1em;padding-left:2px"><br>
<label>Class </label><br>
<input type ="text" placeholder="Class" id="class_stu" name="class_de" style="font-size: 1.1em;padding-left:2px"><br>
<label>Section</label><br>
<input type ="text" placeholder="Section" id="sec_id" name="section" style="font-size: 1.1em;padding-left:2px"><br>
<label>Teacher Name</label><br>
<input type ="text" placeholder="Teacher_Name" id="Teacher_Name" name="Teacher_name" style="font-size: 1.1em;padding-left:2px"><br>
<label>Username</label><br>
<input type ="text" placeholder="Username" id="T_Username" name="username" style="font-size: 1.1em;padding-left:2px"><br>
<label>password</label><br>
<input type ="password" placeholder="Type Password" id="passwd_1"  name="passwd_1" style="font-size: 1.1em;padding-left:2px"><br>
<label>ReType Password</label><br>
<input type ="password" placeholder="Retype Password" id="passwd_2" name="passwd" style="font-size: 1.1em;padding-left:2px"><br>
<label>Choose Your Photo</label><br>
<input type="file"  id="file_img" name="pic"><br>
<label>Gender</label><br>
<input type="radio"  value="Male" name="gender"><label>Male</label> <br>
<input type="radio"  value="Female" name="gender"><label>Female</label> <br>
<label>Contact No</label><br>
<input type="number" name="contact_no" placeholder="xxxxxxxxxxxxxx" id="cntct_nbr" style="font-size: 1.1em;padding-left:2px"><br>
<input type="submit" name="submit" id="Send">
</form>
</div>
<?php require "footer.php";?>
</body>
</html>
<?php 

if(isset($submit))
{
echo $f_name=$_POST['Teacher_name'];
echo $f_id=$_POST['Faculity_id'];
echo $clas=$_POST['class_de'];
echo $sec=$_POST['section'];
echo $username=$_POST['username'];
echo $password=$_POST['passwd_1'];
echo $cont_info=$_POST['contact_no'];
echo $gender=$_POST['gender'];
//Files Attributes //
echo $pic_name=$_FILES["pic"]["name"];
 //print_r($_FILES["pic"]);
$pic_ext=$_FILES["pic"]["type"];
echo $pic_size=$_FILES["pic"]["size"];
$pic_temp_loc=$_FILES["pic"]["tmp_name"];
if(!empty($pic_name))
{
  if($pic_size <= 2000000)
	{
	 if($pic_ext=="image/jpg" || $pic_ext=="image/jpeg" || $pic_ext=="image/png")
		{
			$final_dest="uploads/".$pic_name;
			$move=move_uploaded_file($pic_temp_loc,$final_dest);
			if($move)
			{
				$query="INSERT INTO class_teacher VALUES('$f_name','$f_id','$clas','$sec','$final_dest','$username','$password','$gender','$cont_info')";
				 if(mysqli_query($con,$query))
				{
					echo "<script> alert('Data is Successfully store into database');</script>";
					header("refresh:1;url=teacher_index.php");
				}
				else
				{
					echo "<script> alert('Data is not Successfully store into database');</script>";
					header("refresh:4;url=teacher_index.php");
				}
			}
		}
		else
		{
			echo "<script> alert('Only jpeg ,jpg,png files ae allowed'); </script>";
		}
	}
	else
	{
		echo "Size is to large";
	}
}
else
{
	echo "File name is not set";
}
};


?>