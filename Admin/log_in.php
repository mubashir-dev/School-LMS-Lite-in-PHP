<?php 
session_start();
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Log in</title>
	<style type="text/css">
		#main
		{
			width: 450px;
			height: auto;
			margin:0 auto;
			border:0px solid black;
			margin-top:180px;
			padding-bottom:30px;
		}
		#main #search
		{
			width: 300px;
			height: 35px;
			margin-left:70px;
			margin-top: 40px;
		}
		::placeholder
		{
			font-family:Agency Fb;
			font-size: 1.8em;
			color:black;
			font-weight: bold;
			padding-left: 5px;
			line-height: 35px;
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
 #sub
{
	width: 75%;
	height: 40px;
	margin-top: 15px;
     margin-left:50px;
	font-family: Agency Fb;
	font-size: 1.8em;
	font-weight: bold;
	background-color: orange;
	border-radius:
	cursor: pointer;
	border-color: black;
}
#sub:hover
{
background-color: blue;
}

</style>
<script type="text/javascript">
	function chk()
	{
		var W=document.forms.search.Student_id.value;
		var X=document.forms.search.password.value;
		if(W == "")
		{
			alert("Please Enter Username");
			return false;
		}
		else if(x == "")
		{
			alert("Please Enter password ");
			return false;
		}

		else
			return true;
	}


</script>
</head>
<body>
<div id="main">
	<h4 id="main_heading">Admin Login</h4>
<form action="" method="post" name="search" onsubmit="return chk()">
	<input type="text" name="Student_id" placeholder="Username" id="search" font-size="1.5em"><br>
		<input type="password" name="password" placeholder="password" id="search" font-size="1.5 em"><br>
	<input type="submit" name="submit" value="Log In" id="sub">
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$uid=$_POST['Student_id'];
 $pwd=$_POST['password'];
$sql=
"SELECT * FROM admin WHERE username = '$uid' AND password ='$pwd'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	$row=mysqli_num_rows($fire);
	//echo $row;
	if($row == 1)
	{
		$_SESSION['username']=$uid;
		header("Location:admin_index.php");
	}
	else
	{
		echo "<h2 style='font-family:Agency Fb;text-align:center;font-size:1.7em;'>Log in Failed</h2>";
	}

}
else
{
	echo "<script>  alert('Error Occured');</script>";
	header("Location:log_in.php");	

}
}

?>
