<?php 
require "connection.php";
	$i=0;
 $Section=$_POST['section_selector'];
 $clas=$_POST['class_selector'];
$query="SELECT student_id,firsrt_name,Last_name from student WHERE class = '$clas'  AND section = '$Section' ";
$fire=mysqli_query($con,$query);
if($fire)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Attendance</title>
</head>
<body>
<?php 
$i=0;
	$row=mysqli_num_rows($fire);
	if($row > 0)
	{
		while ($rows=mysqli_fetch_assoc($fire))
	{
		//$i++;
		?>
<form action="catch_atten.php" method="post">
	<label>Name</label><br>
	<input type="text" name="name[]" value="<?php echo $rows['firsrt_name']." ".$rows['Last_name'] ?>"><br>
	<label>Student Id</label><br>
	<input type="text" name="student_id[]" value="<?php echo $rows['student_id']; ?>"> <br>
	<label>Status</label><br>
	<input type="radio" name="status[<?php echo $i; ?>]" value="present">present
	<input type="radio" name="status[<?php  echo $i; ?>]" value="absent">Absent<br>
<?php $i++; 
}}}?><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>