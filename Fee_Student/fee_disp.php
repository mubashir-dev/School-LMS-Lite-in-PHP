<?php 
require "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Fee Information
	</title>
</head>
<body>
<?php 
$qurey="SELECT *FROM fee";
$fire=mysqli_query($con,$qurey);
if($fire)
{
	$row=mysqli_num_rows($fire);
	if($row > 0)
	{
		while ($rows=mysqli_fetch_assoc($fire))
		{
		echo "Student id : ".$rows['student_id']."<br>";
		echo "Fee_Amount : ".$rows['Fee_Amount']."<br>";
		echo "Fee_Submission Date : ".$rows['fee_sub_date']."<br>";
		echo "Status : ".$rows['status']."<br>";
		}
	}
}
?>
</body>
</html>