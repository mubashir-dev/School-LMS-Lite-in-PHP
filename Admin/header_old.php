<?php 
require "connection.php";
$_SESSION['img'];
$_SESSION['name'];
$_SESSION['Role'];
if(isset($_SESSION['name']
))
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
		font-size: 1.0em;

	}
	#id
	{
		margin-bottom: 10px;
	}
</style>
</head>
<body>
<div id="main_div">
<div id ="header">
		<a href="admin_index.php">
		<div id="user_img">
			<img src="<?php echo $_SESSION['img'];
?>" alt="Admin_Profile">
		</div></a>

		<div id="user_info">
			<h5><?php echo $_SESSION['name'];
?><br><?php echo $_SESSION['Role'];
 ?></h5>		
		</div>
		<div id="setting">
			<a href="log_out.php"><img src="setting.png"></a>
		</div>
	</div> <!-- End of Header -- >
</div> <!-- End of Main Div -->
</body>
</html>
