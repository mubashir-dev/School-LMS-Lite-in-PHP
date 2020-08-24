<?php
//This file catch values from student_reg form //
// Date  : 31-May-2018  //
//PHP 5.6.8 //
//Developed By        //
session_start();
require "header.php";
require "connection.php";
$date=date("Y:m:d");
//error_reporting();
$file_id=$_POST["Faculity_id"];
$Catageory=$_POST["choose"];
$posted_by=$_POST["class_de"];
$file_name=$_FILES["pic"]["name"];
// /print_r($_FILES["pic"]);
$file_ext=$_FILES["pic"]["type"];
$file_size=$_FILES["pic"]["size"];
$file_temp_loc=$_FILES["pic"]["tmp_name"];
/*echo "<br>File ID : ".$file_id. "<br>";
echo "Catageory : ".$Catageory."<br>";
echo "File Source : ".$file_temp_loc."<br>";
echo "Date : ".$date."<br>";*/
//echo $file_namee."-".$file_namee;
$date=date("Y:M:d");
//echo $TIME=time("H:M:S");
if(!empty($file_name))
{
 if($file_size <= 2000000)
{
			$final_dest="../File_Uploaded/".$file_name;
			$move=move_uploaded_file($file_temp_loc,$final_dest);
			if($move)
			{
				$query="INSERT INTO files_download VALUES('$file_id','$file_name','$Catageory','$final_dest','$date','$posted_by')";
				 if(mysqli_query($con,$query))
				{
					echo "<script> alert('File Uploaded Successfully');</script>";
				}
				else
				{
					echo "<script> alert('Error Occured');</script>";
				}
			}
	}
	else
	{
		echo "Size is to large";
	}
}
else
{
	echo "File name is not set";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Files Uploading</title>
	<style type="text/css">
		*
		{
			margin: 0px;
			padding: 0px;
		}
		#main_div
		{
			height: 540px;
			margin-top: 125px;
		}
		table
		{
			border:1px solid black;
			width: 98%;
			margin:0 auto;
			margin-top:20px;
			font-family: Agency Fb;
			font-size: 1.4em;
			border-collapse: collapse;
		}
		th
		{
				background-color: orange;
	
		}
		tr,th
		{
			text-align: center;
		}
		tr,th
		{
			border:1px solid black;
		}
				#main_heading 
{
	width:380px;
	height: 35px;
	background-color: orange;
	font-size: 1.7em;
	text-align: center;
	margin:0 auto;
	margin-top:10px;
	border-radius: 25px 5px;
	border:1px solid black; 
}
	</style>
</head>
<body>
<div id="main_div">
	<h4 id="main_heading">Uploded File Information</h4>
	<table>
		<tr>
			<th>File Id</th>
			<th>Catageory</th>
			<th>Source</th>
			<th>Date</th>
			<th>Uploaded By</th>
		</tr>
		<tr>
			<td><?php echo $file_id; ?></td>
			<td><?php echo $Catageory; ?></td>
			<td><?php echo $date; ?></td>
			<td><?php echo $final_dest; ?></td>
			<td><?php echo $posted_by; ?></td>
		</tr>

	</table>
</div>
</body>
<?php require "footer.php"; ?>
</html>