<?php 
session_start();
require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Specific Student</title>
	<style type="text/css">
		*
		{
			padding:0px;
			margin: 0px;
		}
		#main
		{
			width: 450px;
			height: auto;
			margin:0 auto;
			border:1px solid black;
			margin-top:220px;
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
	font-size: 1.6em;
	font-weight: bold;
	background-color: orange;
	border-radius: 10px;
	cursor: pointer;
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
		if(W == "")
		{
			alert("Please Enter Student id");
			return false;
		}
		else
			return true;
	}


</script>
</head>
<body>
<div id="main">
	<h4 id="main_heading">Search Result</h4>
<form action="specific_search.php" method="post" name="search" onsubmit="return chk()">
	<input type="text" name="Student_id" placeholder="Student_Id" id="search"><br>
	<input type="submit" name="submit" value="SEARCH" id="sub">
</form>
</div>
<?php  "footer.php"; ?>
</body>
</html>