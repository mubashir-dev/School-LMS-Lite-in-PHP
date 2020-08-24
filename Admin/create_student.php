<?php session_start();
?>
<?php require "header.php";?>
<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>
<script src="validate_form.js">
</script>
<link rel="stylesheet" href="main.css">
<style type="text/css">
</style>
</head>
<body>
<div id="form_sing_up">
<h3 id="main_heading">Registration Form</h3>	
<form action="catch_studen.php" method="post" name="form_sign_up" onsubmit="return chk();"  enctype="multipart/form-data">
<label>Student ID</label><br>
<input type ="text" placeholder="Student ID" id="student_id" name="student_id" style="font-size: 1.1em;padding-left:2px"><br>
<label>Class </label><br>
<select name="class_de" id="class_stu">
<option value="">Select Class</option>
<option value="10th">10th</option>
<option value="9th">9th</option>
<option value="8th">8th</option>
<option value="7th">7th</option>
<option value="6th">6th</option>
</select>
<br>
<label>Section </label><br>
<select name="section" id="class_stu">
<option value="">Select Section</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Pink">Pink</option>
<option value="Blue">Blue</option>
</select><br>
<label>First Name</label><br>
<input type ="text" placeholder="First Name" id="first_name" name="first_name" style="font-size: 1.1em;padding-left:2px"><br>
<label>Last Name</label><br>
<input type ="text" placeholder="Last Name" id="Last_name" name="la_name" style="font-size: 1.1em;padding-left:2px"><br>
<label>Father Name</label><br>
<input type ="text" placeholder="Father Name" id="Father_name" name="father_name" style="font-size: 1.1em;padding-left:2px"><br>
<label>Email</label><br>
<input type ="email" placeholder="Email" id="Email" name="email"
style="font-size: 1.1em;padding-left:2px"><br>
<label>password</label><br>
<input type ="password" placeholder="Type Password" id="passwd_1"  name="passwd_1" style="font-size: 1.1em;padding-left:2px"><br>
<label>ReType Password</label><br>
<input type ="password" placeholder="Retype Password" id="passwd_2" name="passwd" style="font-size: 1.1em;padding-left:2px"><br>
<label>Date of Birth</label><br> 
<input type="date" id="date_of_birth" name="dob"><br>
<label>Choose Your Photo</label><br>
<input type="file"  id="file_img" name="pic"><br>
<label>Gender</label><br>
<input type="radio"  value="Male" name="gender"><label>Male </label><br>
<input type="radio"  value="Female" name="gender"><label>Female</label> <br>
<label>Contact No</label><br>
<input type="number" name="contact_no" placeholder="xxxxxxxxxxxxxx" id="cntct_nbr" style="font-size: 1.1em;padding-left:2px"><br>
<label>Address</label><br>
<textarea   name="Address" placeholder="Student Address" style="font-size: 1.1em;padding-left:2px">
</textarea><br>
<input type="submit" name="submit" id="Send">
</form>
</div> 
<?php  require "footer.php";?>
</body>
</html>