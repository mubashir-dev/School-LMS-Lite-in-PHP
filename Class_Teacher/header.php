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
	<title>
		<?php
		echo $_SESSION['Role'];
		?>:Dashboard
	</title>
	<style type="text/css">
		*
		{
			padding:0px;
			margin:0px;
		}
		#wrapper 
		{
			width: 100%;
			height: auto;
		}
		#navbvar
		{
			width: 100%;
			height: 75px;
			border-top:2px solid black;
			border-bottom: 2px solid black;

			background-color: orange;
		}
		#btn
		{
			float: right;
			margin-right: 25px;
			border:none;
			margin-top: 10px;
			border-radius:50px;
			cursor: pointer;
			width: 50px;
			height: 50px;
			background-color: orange;

		}
		#btn img
		{
		border-radius:52px;
		margin-top: px;
		}	
		}
		#logo
		{
			width: 200px;
			height: 55px;
			line-height: 55px;
			font-family: Agency Fb;
			margin-left:5px;
			border:0px solid black;
			float: left;		
			font-size: 1.8em;

		}
		#logo h2		{
						margin:0 auto;

		}
		#user_img
	{
		width: 60px;
		height: 60px;
		border:2px solid black;
		float: left;
		margin-left:15px;
		margin-top: 4px;
		border-radius: 50px;
	}
	#user_img img
	{
		width: 60px;
		height: 60px;
		border:0px solid red;
		float: right;
		margin-right: px;
		margin-top: px;
		border-radius: 50px;
	}
	
		#user_menu
		{
         width: 200px;
         height: 70px;
         border:0px solid black;
		float: right;

		}
		#panel
		{
			width: 150px;
			height: 150px;
			border:1px solid black;
			display: none;	;
			float: left;
			margin-top:75px;
			color: white;
			margin-right:-35px;
		}
	#panel	ul
		{
			list-style: none;
			background-color: ;
			cursor: pointer;
		
		font-family: AgencY fB;
		}
	#panel	ul li a
		{
			text-decoration: none;

			color:black;
		
		}
	#panel	ul li 
		{
			display: block;
			height: 48px;
		border:1px solid black;
		padding-left: 2px;
font-size: 1.4em;		
		font-weight: bold;
line-height: 48px;
		}
#panel ul  :hover
{
	background-color: orange;
}
#user_info
	{
		width: 25%;
		height: 70px;
		background-color:;
		float: left;
		margin-left:340px;
		font-family: Agency Fb;
		font-size: 1.1em;
		font-weight: bold;
		border:0px solid black;
		text-align: center;
	}
	#clear
	{
		clear: both;	
	}

	</style>
</head>
<body>
<div id="wrapper">
<div id="navbvar">
	<div id="logo">
		<a href="class_login.php">
		<div id="user_img">
			<img src="<?php echo $img_src;
?>" alt="Admin_Profile">
		</div></a>
	</div>
	<div id="user_info">
		<h3><?php echo $name;?><br><?php echo $f_id;?><br>Class Teacher : <?php echo $clas." ".$sec; ?></h3>
	</div>
	
	<div id="user_menu">
		<button id="btn">
			<img src="menu.png" width="50px" height="50px">
		</button>
		<div id="panel">
			<ul>
				<li>
					<a href="#">About Me</a>
				</li>

				<li>
					<a href="password_change.php">Change Password</a>
				</li>

				<li>
					<a href="log_out.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div><div id="clear">
		
	</div>
</div>
</div>
<script src="JQurey.js"></script>
<script type="text/javascript">
	
	$("document").ready(function()
	{
$("#btn").click(function()
{
$(this).css("border","none");
$("#panel").toggle();
});
});
</script>
</body>
</html>