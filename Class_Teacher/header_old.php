<?php 
require "connection.php";
$img_src=$_SESSION['img_src'];
$name=$_SESSION['name'];
$f_id=$_SESSION['Faculty_id'];
$clas=$_SESSION['class'];
$sec=$_SESSION['section'];
if(isset($f_id))
{

}
else
{
	header("Location:log_in.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
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

	#id
	{
		margin-bottom: 10px;
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
		
		    width: auto;
    height: auto;
    border: 0px solid green;
    float: right;
    margin-top: 5px;
    margin-bottom: 2px;
    text-align: center;

	}

	</style>
</head>
<body>
<div id ="header">
	   <a href="class_login.php">
		<div id="user_img">
			<img src="<?php echo $img_src;?>" alt="user_img">
		</div>
		</a>
		<div id="user_info">
			<h5><?php echo $name;?><br><?php echo $f_id;?><br>Class Teacher : <?php echo $clas." ".$sec; ?></h5>		
		</div>
		<div id="setting">
			<a href="log_out.php"><img src="setting.png"></a>
		</div>
</body>
</html>