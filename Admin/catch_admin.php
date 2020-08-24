<?php
//Admin File //
require "connection.php";
error_reporting();
$name=$_POST["Faculity_id"];
$username=$_POST["class_de"];
$pwd=$_POST["passwd"];
$pic_name=$_FILES["pic"]["name"];
$pic_ext=$_FILES["pic"]["type"];
$pic_size=$_FILES["pic"]["size"];
$pic_temp_loc=$_FILES["pic"]["tmp_name"];
if(!empty($pic_name))
{
  if($pic_size <= 2000000)
	{
	 if($pic_ext=="image/jpg" || $pic_ext=="image/jpeg" || $pic_ext=="image/png")
		{
			$final_dest="uploads/".$pic_name;
			$move=move_uploaded_file($pic_temp_loc,$final_dest);
			if($move)
			{
				$query="INSERT INTO admin VALUES('$name','$final_dest','$username','$pwd')";
				 if(mysqli_query($con,$query))
				{
					echo "<script> alert('Admin is created Successfully');</script>";
					header("refresh:2;url=Add_Admin.php");
				}
				else
				{
					echo "<script> alert('Admin is not  created Successfully');</script>";

					header("refresh:2;url=Add_Admin.php");
				}
			}
		}
		else
		{
			echo "<script> alert('Only jpeg ,jpg,png files ae allowed'); </script>";
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