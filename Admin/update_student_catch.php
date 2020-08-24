<?php
session_start();
require "header.php";
require "connection.php";
$roll_no ="10-Green-030";                          
echo $student_id=$_POST["student_id"];
echo "<br>";
echo $first_name=$_POST["first_name"];
echo "<br>";
echo $last_name=$_POST["la_name"];
echo "<br>";
echo $father_name=$_POST["father_name"];
echo "<br>";
echo $email=$_POST["email"];
echo "<br>";
echo $passwd=$_POST["passwd"];
echo "<br>";
echo $dob=$_POST["dob"];
echo "<br>";
echo $cont_nmbr=$_POST["contact_no"];
echo "<br>";
echo $gender=$_POST["gender"];
echo "<br>";
echo $Address=$_POST["Address"];
echo "<br>";
echo $class=$_POST["class_de"];
echo "<br>";
$pic_name=$_FILES["pic"]["name"];
$pic_ext=$_FILES["pic"]["type"];
$pic_size=$_FILES["pic"]["size"];
$pic_temp_loc=$_FILES["pic"]["tmp_name"];

if(!empty($pic_name))
{
  if($pic_size <= 20000000)
	{
	 if($pic_ext=="image/jpg" || $pic_ext=="image/jpeg" || $pic_ext=="image/png")
		{
			$final_dest="uploads/".$pic_name;
			$move=move_uploaded_file($pic_temp_loc,$final_dest);
			if($move)
			{
				$query="UPDATE student SET student_id = '$student_id',firsrt_name = '$first_name', Last_name = '$last_name',Father_name = '$father_name',gender = '$gender',dob='$dob',class = '$class',pic_source = '$final_dest',adress = '$Address',email = '$email',password = '$passwd',contact_nbr = '$cont_nmbr' WHERE  student_id = '$roll_no'";
 if(mysqli_query($con,$query))
				{
					echo "<script> alert('Data is Successfully Updated');</script>";
							header("refresh:2;url=index.php");
				}
				else
				{
					echo "<script> alert('Data is not Successfully Updated');</script>";
							header("refresh:2;url=index.php");

				}
			}
		}
		else
		{
			echo "<script> alert('Only jpeg ,jpg,png files ae allowed'); </script>";
					header("refresh:2;url=index.php");
		}
	}
	else
	{
		echo "Size is to large";
				header("refresh:2;url=index.php");

	}
}
else
{
	echo "File name is not set";
			header("refresh:2;url=index.php");

}
?>
<?php require "footer.php";?>