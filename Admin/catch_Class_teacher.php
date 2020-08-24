<?php 
require "connection.php";
$f_name=$_POST['Teacher_name'];
$f_id=$_POST['Faculity_id'];
$clas=$_POST['class_de'];
$sec=$_POST['section'];
$username=$_POST['username'];
$password=$_POST['passwd_1'];
$cont_info=$_POST['contact_no'];
$gender=$_POST['gender'];
//Files Attributes //
$pic_name=$_FILES["pic"]["name"];
 //print_r($_FILES["pic"]);
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
				$query="INSERT INTO class_teacher VALUES('$f_name','$f_id','$clas','$sec','$final_dest','$username','$password','$gender')";
				 if(mysqli_query($con,$query))
				{
					echo "<script> alert('Data is Successfully store into database');</script>";
					header("refresh:4;url=teacher_index.php");
				}
				else
				{
					echo "<script> alert('Data is not Successfully store into database');</script>";
					header("refresh:4;url=teacher_index.php");
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