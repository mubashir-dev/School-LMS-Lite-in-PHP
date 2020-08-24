<?php 
session_start();
require "header.php";
require "connection.php";
$username=$_SESSION['usernamae'];
$sql="SELECT *FROM admin WHERE username = '$username'";
$fire=mysqli_query($con,$sql);
 if($fire)
 {
 	while($rows=mysqli_fetch_assoc($fire))
 	{
 		$name=$rows["name"];
 		$usernamae=$rows["username"];
 		$role=$rows["Role"];
 	}
 }
 else
 {
 	echo "Error Occured";
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Create Admin</title>
<!--<script  src="vali_date.js"></script> -->
<link rel="stylesheet" href="main.css">
<style type="text/css">
	*
	{
		font-family: Agency FB;
	}
	#form_sing_up
	{
		margin-top:55px;
		width: 60%;
	}
	::placeholder
	{
		color:black;
		font-weight: none;
		font-size: 1.1em;
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
	#main_heading
	{
		border-radius: none;
		margin: 0 auto;
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
<h3 id="main_heading">Update Admin</h3>	
<form action="" method="post" name="form_teacher" onsubmit="return chk()"  enctype="multipart/form-data">
<label>Name</label><br>
<input value="<?php echo $name; ?>" type ="text" placeholder="Name" id="student_id" name="Faculity_id" style="font-size: 1.1em;padding-left:2px"><br>
<label>Username</label><br>
<input value="<?php echo $usernamae; ?>" type ="text" placeholder="username" id="class_stu" name="class_de" style="font-size: 1.1em;padding-left:2px"><br>
<label>Role</label><br>
<input value="<?php echo $role; ?>" type ="text" placeholder="Role" id="class_stu" name="role" style="font-size: 1.1em;padding-left:2px"><br>
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
<?php
if(isset($_POST['submit']))
{
echo $name=$_POST["Faculity_id"];
echo $username=$_POST["class_de"];
echo $role=$_POST['role'];
echo $pwd=$_POST["passwd"];
echo $pic_name=$_FILES["pic"]["name"];
$pic_ext=$_FILES["pic"]["type"];
$pic_size=$_FILES["pic"]["size"];
$pic_temp_loc=$_FILES["pic"]["tmp_name"];
if(!empty($pic_name))
{
  if($pic_size <= 2000000)
	{
	 if($pic_ext=="image/jpg" || $pic_ext=="image/jpeg" || $pic_ext=="image/png")
		{
			echo  $final_dest="uploads/".$pic_name;
			$move=move_uploaded_file($pic_temp_loc,$final_dest);
			if($move)
			{
				$query="UPDATE admin SET name='$name',Role='$role',img_src='$final_dest',username='$username',password='$pwd' WHERE username ='$username'";
				
				 if(mysqli_query($con,$query))
				{
					echo "<script> alert('Admin is updated Successfully');</script>";
									}
				else
				{
					echo "<script> alert('Admin is not  created Successfully');</script>";

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
}
?>