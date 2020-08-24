<?php
require "connection.php";
$date=date("Y:m:d");
//error_reporting();
$file_id=$_POST["Faculity_id"];
$Catageory=$_POST["choose"];
$posted_by=$_POST["class_de"];
$file_name=$_FILES["pic"]["name"];
print_r($_FILES["pic"]);
$file_ext=$_FILES["pic"]["type"];
$file_size=$_FILES["pic"]["size"];
$file_temp_loc=$_FILES["pic"]["tmp_name"];
echo "<br>File ID : ".$file_id. "<br>";
echo "Catageory : ".$Catageory."<br>";
echo "File Source : ".$file_temp_loc."<br>";
echo "Date : ".$date."<br>";
//echo $file_namee."-".$file_namee;
$date=date("Y:M:d");
echo $TIME=time("H:M:S");
if(!empty($file_name))
{
 if($file_size <= 2000000)
{
/*	 if($file_ext=="ppt
application/vnd.ms-powerpoint" || $file_ext=="docx
application/vnd.openxmlformats-officedocument.wordprocessingml.document
" || $file_ext=="application/pdf")
		{*/
			$final_dest="uploads/".$file_name;
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
?>