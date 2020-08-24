<?php
session_start();
require "header.php";
require "connection.php";
//$roll_id=$_POST["roll_id"];
$roll_no=$_SESSION['rollno'];
//$roll_no='10-Green-030';
$query="SELECT *FROM  student WHERE student_id = '$roll_no'";
$fire=mysqli_query($con,$query);
if(!$fire)
{
	echo "<script> alert('Recored Not Found'); </script>";
}
else
{
	while($rows=mysqli_fetch_assoc($fire))
	{
		$st_id=$rows["student_id"];
		$f_name=$rows["firsrt_name"];
		$l_name=$rows["Last_name"];
		$father_name=$rows["father_name"];
		$gender=$rows["gender"];
		$dob=$rows["dob"];
		$class=$rows["class"];
		$pic_source=$rows["pic_source"];
		$Address=$rows["adress"];
		$email=$rows["email"];
		$pwd=$rows["password"];
		$cnt_nbr=$rows["contact_nbr"];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Update Form</title>
<script src="validate_form.js">
</script>
<link rel="stylesheet" href="main.css">
</head>
<body>
<div id="form_sing_up">
<h3 id="main_heading">Update  Form</h3>	
<form action="update_stu_catch.php" method="post" name="form_sign_up" onsubmit="return chk();"  enctype="multipart/form-data">
<label>New Student ID</label><br>
<input value="<?php echo $st_id;  ?>" type ="text" placeholder="Student ID" id="student_id" name="student_id"  style="font-size: 1.1em;padding-left:2px"><br>
<label>New Class </label><br>
<input value="<?php echo $class;  ?>" type ="text" placeholder="Class" id="class_stu" name="class_de" style="font-size: 1.1em;padding-left:2px" ><br>
<label>First Name</label><br>
<input value="<?php echo $f_name;  ?>" type ="text" placeholder="First Name" id="first_name" name="first_name" style="font-size: 1.1em;padding-left:2px" ><br>
<label>Last Name</label><br>
<input value="<?php echo $l_name;  ?>" type ="text" placeholder="Last Name" id="Last_name" name="la_name" style="font-size: 1.1em;padding-left:2px" ><br>
<label>Father Name</label><br>
<input  value="<?php echo $father_name;  ?>" type ="text" placeholder="Father Name" id="Father_name" name="father_name" style="font-size: 1.1em;padding-left:2px" value="<?php echo $father_name;  ?>"><br>
<label>Email</label><br>
<input value="<?php echo $email;  ?>" type ="email" placeholder="Email" id="Email" name="email"
style="font-size: 1.1em;padding-left:2px" ><br>
<label>New password</label><br>
<input type ="password" placeholder="New Password" id="passwd_1"  name="passwd_1" style="font-size: 1.1em;padding-left:2px" value="<?php ?>"><br>
<label>ReType Password</label><br>
<input type ="password" placeholder="Retype Password" id="passwd_2" name="passwd" style="font-size: 1.1em;padding-left:2px" value="<?php  ?>"><br>
<label>Date of Birth</label><br> 
<input value="<?php echo $dob;  ?>" type="date" id="date_of_birth" name="dob" ><br>
<label>Gender</label><br>
<input type="radio"   name="gender" value=" Male"
<?php if($gender == "Male") echo "checked"; ?>>Male <br>
<input type="radio"   name="gender" value="Female" 
<?php if($gender == "Female") echo "checked"; ?>>Female <br>
<label>Choose Your Photo</label><br>
<input type="file"  id="file_img" name="pic" value="<?php echo 
$pic_source; ?>"><br>
<label>Contact No</label><br>
<input  value="<?php echo $cnt_nbr ; ?>" type="number" name="contact_no" placeholder="xxxxxxxxxxxxxx" id="cntct_nbr" style="font-size: 1.1em;padding-left:2px"><br>
<label>Address</label><br>
<textarea   name="Address" placeholder="Student Address" style="font-size: 1.1em;padding-left:2px">
<?php echo $Address; ?>
</textarea><br>
<input type="submit" name="submit" id="Send" value="Update">
</form>
</div>
</body>
</html>