<?php 
session_start();
require "connection.php";
 $roll=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Reset</title>
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
		height: 410px;
		border:0px solid black;
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
		margin-left:200px;
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
	#form_change
	{
		width: 450px;
		height: 200px;
		border: 0px solid black;
		margin: 0 auto;
		margin-top: 250px;
	}
	#form_change label
	{
		font-family: Agency fb;
		text-align: center;
		font-size: 1.5em;
		margin: 0 auto;
	}
	#form_change input
	{
		width: 98%;
		height: 35px;
		margin-left:5px;
		margin-top:20px;
		cursor: pointer;
		font-family: Agency FB;
			border-radius: 5px;			border:1px solid black;

		

	}
	::placeholder
	{
		font-size: 1.5em;
	}
	#send
	{
			font-size: 1.5em;
			border-radius: 25px;
			border:none;
	
	}
	#send:hover
	{
		background-color: orange;
	}
</style>
</head>
<body>
	<?php require "header.php";
 ?>
<div id="main_div">
	<div id="main_body">
		<form id="form_change" action="" method="post">
			<label>Type new password</label>
			<input type="text" name="change_pwd" placeholder="Change Password"><br>
			<input type="submit" name="submit" value="Change Password" id="send">
		</form>
	</div>
	
</div>
<?php  require "footer.php"; ?>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$pwd=$_POST['change_pwd'];
$sql="UPDATE admin SET password = '$pwd' WHERE name ='$
$roll'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	echo "<script> alert('password has  successfully changed '); </script>";
}
else
{
		echo "<script> alert('Error Occured'); </script>";

}
}

?>