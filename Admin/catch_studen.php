<?php
session_start();
require "header.php";
require "connection.php";
error_reporting();
$student_id=$_POST["student_id"];
$first_name=$_POST["first_name"];
$last_name=$_POST["la_name"];
$father_name=$_POST["father_name"];
$email=$_POST["email"];
$passwd=$_POST["passwd"];
$dob=$_POST["dob"];
$cont_nmbr=$_POST["contact_no"];
$gender=$_POST["gender"];
$Address=$_POST["Address"];
$class=$_POST["class_de"];
$section=$_POST['section'];
$pic_name=$_FILES["pic"]["name"];
 //print_r($_FILES["pic"]);
$pic_ext=$_FILES["pic"]["type"];
$pic_size=$_FILES["pic"]["size"];
$pic_temp_loc=$_FILES["pic"]["tmp_name"];
echo "student_id : ".$student_id. "<br>";
echo "first_name : ".$first_name."<br>";
echo "last_name : ".$last_name."<br>";
echo "Father Name : ".$father_name."<br>";
echo "Email : ".$email."<br>";
echo "Dob : ".$dob."<br>";
echo "Image Path : ".$pic_name."<br>";
echo "password : ".$passwd."<br>";
echo "Contact Nbr : ".$cont_nmbr."<br>";
echo "Gender : ".$gender."<br>";
echo "Address :".$Address."<br>";
//For Roll No Already Exist  //
$Query= "SELECT student_id form student";
$run=mysqli_query($con,$Query);
if($run)
{
$row=mysqli_num_rows($run);
if($row > 0)
{
	while($rows=mysqli_fetch_assoc($run))
	{
		if($student_id == $rows['student_id'])
		{
			echo "<script>  alert('Student already exist'); </script>";
		}
	}
}
}
if(!empty($pic_name))
{
  if($pic_size <= 2000000)
	{
	 if($pic_ext=="image/jpg" || $pic_ext=="image/jpeg" || $pic_ext=="image/png")
		{
			$final_dest="../Student_images/".$pic_name;
			$move=move_uploaded_file($pic_temp_loc,$final_dest);
			if($move)
			{
				$query="INSERT INTO student VALUES('$student_id','$first_name','$last_name','$father_name','$gender','$dob','$class','$section','$final_dest','$Address','$email','$passwd','$cont_nmbr')";
				 if(mysqli_query($con,$query))
				{
					echo "<script> alert('Data is Successfully store into database');</script>";
				}
				else
				{
					echo "<script> alert('Data is not Successfully store into database');</script>";
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
<?php require "footer.php"; ?>