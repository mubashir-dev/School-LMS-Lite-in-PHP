<?php
require "connection.php";
$query="SELECT *FROM student";
$fire=mysqli_query($con,$query);
if($fire)
{
$row=mysql_num_rows($fire);
if($row > 0)
{
	while($rows=mysqli_fetch_assoc($fire))
	{

echo "student_id : ".$rows["student_id"]. "<br>";
echo "first_name : ".$rows["first_name"]."<br>";
echo "last_name : ".$rows["Last_name"]."<br>";
echo "Father Name : ".$rows["father_name"]."<br>";
echo "Email : ".$rows["email"]."<br>";
echo "Dob : ".$rows["dob"]."<br>";
echo "Image Path : ".$pic_name."<br>";
echo "password : ".$rows["password"]."<br>";
echo "Contact Nbr : ".$rows["contact_nbr"]."<br>";
echo "Gender : ".$rows["gender"]."<br>";
echo "Address :".$rows["adress"]."<br>";
echo "<img src='$rows['pic_source'] width 250 height 250'>";
	}
} 
}

?>