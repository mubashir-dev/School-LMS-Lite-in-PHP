<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="text/css">
		*
		{
			padding: 0px;
			margin: 0px;
		}
		#main_area
		{
			width: 750px;
			height: 420px;
			border:0px solid black;
			margin: 0 auto;
			margin-top: 40px;
		}
		.box
		{
			width: 200px;
			height: 200px;
			border: 2px solid black;
			float: left;
			margin-top: 115px;
			margin-left: 38px;
			cursor: pointer;
			border-radius: 150px ;
		}
		.box img
		{
		width: 200px;
			height: 200px;
						border-radius: 150px ;
						background-position: center;

				
		}
	.box:hover
	{
box-shadow:3px 3px 5px 6px #ccc;
		border: 0px solid orange;
	}
	#main_heading 
			{
				width:450px;
				height: 35px;
				background-color: orange;
				font-size: 1.9em;
				text-align: center;
				margin:0 auto;
				margin-top:15px;
				border-radius:  5px;
				border:1px solid black; 
				font-family: Agency Fb;
			}
			#footer
			{
				width: 100%;
				height: 30px;
				background-color:orange;
				margin-top: 185px;
				text-align: right;
				font-family: Agency Fb;
				line-height: 30px;
				font-size: 1.2em;

			}
			#footer h4
			{
				padding-right: 10px;
			}

	</style>
</head>
<body>
<div id="main_area">
	<h3 id="main_heading">Student Learning Management System</h3>
	<a href="admin/admin_index.php">
	<div class="box">
	<img src="admin/Admin.png">
	</div></a>
	<a href="Class_Teacher/log_in.php">
	<div class="box">
	<img src="teacher_class.png">
	</div></a>
	<a href="Student_Files/log_in_stu.php">
	<div class="box">
	<img src="student.png">
	</div></a>


</div>
<div id="footer">
	<h4>Developed By Mubashir Ali</h4>
</div>
</body>
</html>