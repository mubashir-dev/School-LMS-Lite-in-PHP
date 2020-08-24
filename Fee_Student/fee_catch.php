<?php
require "connection.php";
$id=$_POST['id'];
$amount=$_POST['amount'];
$date=$_POST['sub_date'];
if($amount)
{
	$status="Paid";
}
else
{
	$status="Not Paid";
}
$query="INSERT INTO fee values($amount,'$date','$id','$status')";
if(mysqli_query($con,$query))
{
	echo "<script> alert('Data is Successfully Stored'); </script>";
	header("refresh:2;url=fee_entry.php");
}
else
{

	echo "<script> alert('Error Occured'); </script>";
	header("refresh:1;url=fee_entry.php");
 }
?>