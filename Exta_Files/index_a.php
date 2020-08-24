<?php 
require "connection.php";
session_start();
$uid=$_POST['Student_id'];
$pwd=$_POST['password'];
$sql=
"SELECT * FROM student WHERE email = '$uid' AND password ='$pwd'";
//echo $sql;
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	while($rows=mysqli_fetch_assoc($fire))
	{
		 $img_src=$rows['pic_source'];
		 $name=$rows['firsrt_name'] . " ".$rows['Last_name'];
	     $f_id=$rows['student_id'];
	     $clas=$rows['class'];
	     $sec=$rows['section'];
	     $f_name=$rows['father_name'];
	}

}
else
{
	echo "<script>  alert('Error Occured');</script>";
	header("Location:log_in_stu.php");	

}
/*else
{
		echo "<script>  alert('Error Occured');</script>";
	header("Location:student_view.php");	

}*/
$_SESSION['student_id']=$f_id;
$_SESSION['class']=$clas;
$_SESSION['img']=$img_src;
$_SESSION['section']=$sec;
$_SESSION['name']=$name;
$_SESSION['f_name']=$f_name
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo  $name ; ?></title>
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
		height: 600px;
		border:0px solid black;
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
		margin-top:5px;
		margin-bottom:2px;
		text-align: center;

	}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 96%;
		height: 450px;
		border: 0px solid blue;
		margin-left:100px;
		margin-top:40px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 1.5px solid black;
		margin-top:140px;
		margin-left:50px;
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
	#footer
	{
		width: 100%;
		height: 35px;
		background-color: orange;
		margin-top: 25px;
		font-family: Agency fB;
		font-size: 1.5em;
		text-align:center;
		font-weight: bold;
		line-height: 35px;
	}
</style>
</head>
<body>
	<?php error_reporting(0);
  require "header.php";?>
<div id="main_div">
	<div id="main_body">
		<a href="file_download.php"><div class="box">
       <img src="download.png" >
			<h6>Downloads</h6>
		</div></a>
		<a href="student_result.php">
		<div class="box">
		<img src="Result.png" >
			<h6>Result</h6>
		</div></a>
		<a href="fee_module_student.php">
		<div class="box">
					<img src="fee.png" >
			<h6>Student Dues
			</h6>
		</div></a>
		<a href="stu_atten.php">
		<div class="box">
		<img src="atten.png" >
			<h6>Attendance</h6>
		</div>
		</a>
	</div>
	
</div>
<?php  require "footer.php"; ?>
</body>
</html>