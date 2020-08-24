<?php 
require "connection.php";
session_start();
?>
<?php require "header.php";?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?></title>
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
		height: 650px;
		border:0px solid black;
		margin:0 auto;
	}
	#id
	{
		margin-bottom: 10px;
	}
	#main_body
	{
		width: 96%;
		height: 400px;
		border: 0px solid blue;
		margin:0 auto;
		margin-top:40px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 2px solid black;
		margin-top:140px;
		margin-left:215px;
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
<div id="main_div">
	<div id="clear"></div>
	<div id="main_body">
		<a href="upload_files.php">
		<div class="box">
					<img src="uploads_img.png" >
			<h6>Upload Files
			</h6>
		</div></a>
		<a href="download_files.php">
		<div class="box">
		<img src="download.png" >
			<h6>Download Files</h6>
		</div>
		</a>
	</div>
	
</div>
<?php  require "footer.php"; ?>
</body>
</html>