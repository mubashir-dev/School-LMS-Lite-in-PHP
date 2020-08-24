<?php 
session_start();
require "header.php";
require "connection.php";
echo $clas=$_SESSION['class']."<br>";
echo $sec=$_SESSION['section']."<br>";
echo $Id=$_POST['student_id']."<br>";
echo $mark_1=$_POST['sub1']."<br>";
echo $mark_2=$_POST['sub2']."<br>";
echo $mark_3=$_POST['sub3']."<br>";
echo $mark_4=$_POST['sub4']."<br>";
echo $mark_5=$_POST['sub5']."<br>";
echo $mark_6=$_POST['sub6']."<br>";
echo $mark_7=$_POST['sub7']."<br>";
echo $mark_8=$_POST['sub8']."<br>";
$toal = 800;
$sub_id="45455";
echo $total_marks=$mark_1+$mark_2+$mark_3+$mark_4+$mark_5+$mark_6+$mark_7+$mark_8."<br>";
echo $perc=$total_marks*100/$toal."<br>";
if($perc <= 33 )
{
	echo $status="Failed";
}
else
{
		echo $status="Promoted";

}
if($perc > 80)
{
	$grade="A+";
}
elseif($perc > 70)
{
$grade="A";
}
elseif($perc >60)
{
	$grade="B";
}
elseif($perc  > 50)
{
	$grade ="C";
}
elseif($perc > 33)
{
	$grade="D";
}
else
{
	$grade="None";
}
$sql="INSERT INTO exam_result(student_id, class, section, English, Mathematics, Physics, Chemistry, Biology, Urdu,Islamic_Studeis,Pakistan Studies, total_marks,obtian_marks,status,percentage,Grade) VALUES('$Id','$clas','$sec',$mark_1,$mark_2,$mark_3,$mark_4,$mark_5,$mark_6,$mark_7,$mark_8,$toal,$total_marks,'$status',$perc,'$grade')";
//$query="INSERT INTO exam_result values ('$Id','$clas','$sec',$mark_1,$mark_2,$mark_3,$mark_4,$mark_5,$mark_6,$mark_7,$mark_8,$toal,$total_marks,'$status',$perc,'$grade')";
//echo $query;
$fire=mysqli_query($con,$sql);
if($fire)
{
	echo "<script>  alert('Data Successfully Store in Database'); </script>";
	header("refresh:10;url=result_ch.php");
}
else
{
	echo "<script>  alert('Data not Successfully Store in Database'); </script>";
	//	header("refresh:3;url=result_ch.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sending Result</title>
</head>
<style type="text/css">
	*
	{
		padding: 0px;
		margin: 0px;
	}
	body
	{
		height: 650px;
	}
</style>
<body>

</body>
</html>
<?php  require "footer.php";?>