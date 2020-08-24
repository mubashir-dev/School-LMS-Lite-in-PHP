<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Teacher Login</title>
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
		height: 640px;
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
		height: 550px;
		border: 0px solid blue;
		margin:0 auto;
		margin-top:30px;
	}
	.box
	{
		width: 150px;
		height: 150px;
		border: 2px solid black;
		margin-top:100px;
		margin-left:130px;
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
	#main_heading 
			{
				width:280px;
				height: 35px;
				background-color: orange;
				font-size: 1.9em;
				text-align: center;
				margin:0 auto;
				margin-top:10px;
				border-radius: 25px 5px;
				border:1px solid black; 
				font-family: Agency Fb;
			}
</style>
</head>
<body>
		<?php require "header.php";
 ?>
<div id="main_div">
	<div id="clear"></div>
	<div id="main_body">
		<h4 id="main_heading">Exam Result Information</h4>
		<a href="create_res.php">
		<div class="box">
		<img src="create_res.png" >
			<h6>Create Result</h6>
		</div></a>
		<a href="search_result.php"><div class="box">
       <img src="search.png" >
			<h6>Search Result</h6>
		</div></a>
		<a href="Result_stu.php">
		<div class="box">
		<img src="view.png" >
			<h6>View Result</h6>
		</div></a>
		
	</div>
	
</div>
</body>
<?php require "footer.php"; ?>

</html>