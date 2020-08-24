<!-- Developed By BSSE-4th A-->
<!-- Web Engineering-->
<!-- Date 27-04-2018 -->
<!-- Friday -->
<!DOCTYPE html>
<html>
<head>
<title>Attendance Sheet </title>
<script src="validate_form.js">
</script>
<link rel="stylesheet" href="main.css">
</head>
<body>
<div id="form_sing_up">
<h3 id="main_heading">Attendance Sheet</h3>	
<form action="catch.php" method="post" name="form_sign_up" onsubmit="return chk();"  enctype="multipart/form-data">
<label>Student ID</label><br>
<input type ="text" placeholder="Student ID" id="student_id" name="student_id" style="font-size: 1.1em;padding-left:2px"><br>
<label>Class </label><br>
<input type ="text" placeholder="Class" id="class_stu" name="class_de" style="font-size: 1.1em;padding-left:2px"><br>
<label>Date</label><br>
<input type ="date" placeholder="First Name" id="first_name" name="first_name" style="font-size: 1.1em;padding-left:2px"><br>
<label>Last Name</label><br>
<input type ="text" placeholder="Last Name" id="Last_name" name="la_name" style="font-size: 1.1em;padding-left:2px"><br>
</textarea><br>
<input type="submit" name="submit" id="Send">
</form>
</div>
</body>
</html>