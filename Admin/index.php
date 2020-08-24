<?php 
require "connection.php";
 //$uid=$_POST['Student_id'];
 //$pwd=$_POST['password'];
 //if(isset($uid))
{
$sql=
"SELECT * FROM admin WHERE username = 'Saad_AKhter' AND password ='4545'";
//echo $sql;
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	while($rows=mysqli_fetch_assoc($fire))
	{
		 $img_src=$rows['img_src'];
		 $name=$rows['name'];
		 $role=$rows['Role'];

	}

}
else
{
	echo "<script>  alert('Error Occured');</script>";
	header("Location:student_view.php");	

}
}
/*else
{
		echo "<script>  alert('Error Occured');</script>";
	header("Location:student_view.php");	

}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Teacher Login</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style type="text/css">
*
{
	text-decoration: none;
	color:black;
	padding: 0px;
	margin:0px;
}
	#main_div
	{
		width: 100%;
		height: auto;
		border:1px solid black;
		margin:0 auto;
	}
	 #header
	{
		width: 100%;
		height: 85px;
		border-top:2px solid black;
		border-bottom:2px solid black;
		background-color:orange;
		margin-top: 0px;
	}
	#user_img
	{
		width: 80px;
		height: 80px;
		border:2px solid black;
		float: left;
		margin-left:15px;
		margin-top: 1px;
		border-radius: 50px;
	}
	#user_img img
	{
		width: 80px;
		height: 80px;
		border:0px solid red;
		float: right;
		margin-right: px;
		margin-top: px;
		border-radius: 50px;
	}
	#user_info
	{
		width: 65%;
		height: 85px;
		background-color:;
		float: left;
		margin-left:15px;
		font-family: Agency Fb;
		font-size: 1.6em;
		font-weight: bold;
	}
	#setting
	{
		width: auto;
		height: 75px;
		background-color:;
		float: left;
		margin-left:140px;
		font-family: Agency Fb;
		font-size: 1.6em;
		border: 0px solid black;
		margin-top: 5px;
		cursor: pointer;
	}
	#setting img
	{
		width: 70px;
		height: 70px;
		
		margin:0 auto;
	}
	#user_info h5
	{
		width: 150px;
		height: auto;
		border: 0px solid green;
		float: right;
		margin-top:15px;
		margin-bottom:2px;
		text-align: center;

	}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 100%;
		height: 690px;
		border:1px solid blue;
		margin-left:0;
		margin-top:px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 1.5px solid black;
		margin-top:60px;
		margin-left:40px;
		float: left;
		cursor: pointer;
	}
	.box img
	{
     width: 114px;
    height: 124px;
    margin-left: 15px;
    margin-top: 10px;
}
	.box h6
	{
		width:auto;
		height:auto;
		border: 1px solid black;
		margin: 0 auto;
		margin-top: 30px;
		font-family: Agency Fb;
		font-size: 1.4em;
		text-align: center;
		font-weight: bold;
	}
	.box:hover
	{
box-shadow:3px 3px 5px 6px #ccc;
		border: 0px solid orange;
	}
	#clear
	{
		clear: both;
	}
	#footer
	{
		width: 100%;
		height: 35px;
		background-color: orange;
		margin-top: 0px;
		font-family: Agency fB;
		font-size: 1.5em;
		text-align:center;
		font-weight: bold;
		line-height: 35px;


	}
</style>
</head>
<body>
<div id="main_div">
	<div id ="header">
		<div id="user_img">
			<img src="<?php echo $img_src;?>" alt="<?php echo $img_src; ?>">
		</div>
		<div id="user_info">
			<h5><?php echo $name;?><br><?php echo $role; ?></h5>		
		</div>
		<div id="setting">
			<a href="log_out.php"><img src="setting.png"></a>
		</div>
	</div>
	<div id="main_body">
		<a href="log_in.php"><div class="box">
       <img src="student.png" >
			<h6>Student Info</h6>
		</div></a>
		<div class="box">
		<img src="Result.png" >
			<h6>Result</h6>
		</div><div class="box">
					<img src="fee.png" >
			<h6>Student Dues
			</h6>
		</div>
		<div class="box">
		<img src="atten.png" >
			<h6>Attendance</h6>
		</div><br>
		<div class="box">
		<img src="teacher_class.png" >
			<h6>Class Teacher</h6>
		</div>
		<div class="box">
		<img src="file.png" >
			<h6>File And Content</h6>
		</div><br>
		<div class="box">
		<img src="atten.png" >
			<h6>Attendance</h6>
		</div>
		<div class="box">
		<img src="Admin.png" >
			<h6>Admin Tools</h6>
		</div>
	</div>
</div>
<div id="clear"></div>
<div id="footer">
		Student_Learning_Management_System Beta Vesion
	</div>
</body>
</html>