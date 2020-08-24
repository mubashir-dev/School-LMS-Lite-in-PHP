<?php
session_start();
require "header.php";
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>File Uploading</title>
<!--<script  src="vali_date.js"></script> -->
<link rel="stylesheet" href="main.css">
<style type="text/css">
	*
	{
		font-family: Agency FB;
	}
	#form_sing_up
	{
		width: 620px;
		height: 520px;
		margin:0 auto;
	}
	::placeholder
	{
		color:black;
		font-weight: normal;	}
	#Teacher_Name,#T_Username,
	{
		width:85%;
	height: 35px;
	margin:0 auto;
	border-radius: 8px;
	border-color:grey;
	font-size: 1.2em;
	}
	#main_heading
	{
		margin: 0 auto;
		margin-bottom: 20px		;
	}
	#sel
	{
	width:85%;
	height: 40px;
	margin:0 auto;
	border-radius: 8px;
	border-color:grey;
	font-size: 1.2em;
	border: 2px solid grey;
		
	}
</style>
<script type="text/javascript">
	function chk()
	{
var F_id=document.forms.form_teacher.Faculity_id.value;
var Class=document.forms.form_teacher.class_de.value;
var passwd_1=document.forms.form_teacher.choose.value;
var img_path=document.forms.form_teacher.pic.value;
	if(F_id == "")
	{
		alert("Please File id");
		return false;
	}
	else if(Class == "")
	{
		alert("Provide File Name");
		return false;
	}
	else if(passwd_1 == "")
	{
		alert("Please File Catageory");
		return false;
	}
	else if(img_path == "")
	{
		alert("Provide img_path ");
		return false;
	}
	else
	{
		return true;
	}
	}
</script>

</head>
<body>
<div id="form_sing_up">
<h3 id="main_heading">Upload File</h3>	
<form action="" method="post" name="form_teacher" onsubmit="return chk()"  enctype="multipart/form-data">
<label>File ID</label><br>
<input type ="text" placeholder="File ID" id="student_id" name="Faculity_id" style="font-size: 0.9em;padding-left:2px"><br>
<label>Posted By</label><br>
<input value="<?php echo $_SESSION['Role'];  ?>" type ="text" placeholder="Posted By" id="student_id" name="class_de" style="font-size: 0.9em;padding-left:2px"><br>
<label>File Catageory</label><br>
<select name="choose" id="sel">
	<option value="">
		Select Catageory
	</option>

	<option value="Course">
		Course
	</option>

	<option value="Extra">
		Extra
	</option>
</select><br>
<label>Choose File For Uploading</label><br>
<input type="file"  id="file_img" name="pic" accept="doc,docx,pdf,ppt,pptx,xml"><br>
<input type="submit" name="submit" id="Send">
</form>
</div>
</body>
<?php  require"footer.php";?>
</html>
<?php
if(isset($_POST['submit']))
{
$date=date("Y:m:d");
$file_id=$_POST["Faculity_id"];
$Catageory=$_POST["choose"];
$posted_by=$_POST["class_de"];
$file_name=$_FILES["pic"]["name"];
//print_r($_FILES["pic"]);
$file_ext=$_FILES["pic"]["type"];
$file_size=$_FILES["pic"]["size"];
$file_temp_loc=$_FILES["pic"]["tmp_name"];
//echo "<br>File ID : ".$file_id. "<br>";
//echo "Catageory : ".$Catageory."<br>";
//echo "File Source : ".$file_temp_loc."<br>";
//echo "Date : ".$date."<br>";
//echo $file_namee."-".$file_namee;
$date=date("Y-M-d");
//echo $TIME=time("H:M:S");
if(!empty($file_name))
{
 if($file_size <= 2000000)
{
/*	 if($file_ext=="ppt
application/vnd.ms-powerpoint" || $file_ext=="docx
application/vnd.openxmlformats-officedocument.wordprocessingml.document
" || $file_ext=="application/pdf")
		{*/
			$final_dest="../Files_Uplaoded/".$file_name;
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
		/*}
		else
		{
			echo "<script> alert('Only PPT ,docx,pdf files ae allowed'); </script>";
		}*/
	//}
	//
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
}
?>