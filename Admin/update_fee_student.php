<?php
session_start();
require "header.php";
require "connection.php";
$id=$_SESSION['s_id'];
$sql="SELECT *FROM fee WHERE student_id ='$id'";
$fire=mysqli_query($con,$sql);
if($fire)
{
	while($rows=mysqli_fetch_assoc($fire))
	{
		$id=$rows["student_id"];
		$date=$rows["fee_sub_date"];
		$amount=$rows["Fee_Amount"];
		$class=$rows["class"];
		$sec=$rows["section"];

	}
}
else
{
		echo "<script> alert('Data is Successfully Stored'); </script>";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Attendance Main Page
	</title>
	<style type="text/css">
		*
		{
			padding:0px;
			margin:0px;
		}
		select,input
		{
			width: 350px;
			height: 35px;
			border:2px solid red;
			font-family: Agency Fb;
			font-size: 1.6em;
		}
		label
		{
			font-size: 1.6em;
			font-family: Agency Fb;
		}
		#attend_form
		{
			width: 100%;
			height:auto;
			border:0px solid black;
			margin: 0 auto;
			margin-top: 35px;
		}
		#form_entry
		{
			width: 80%;
			height: auto;
			margin: 0 auto;
		}

		
			#main_heading 
{
	width:280px;
	height: 35px;
	background-color: orange;
	font-size: 1.7em;
	text-align: center;
	margin:0 auto;
	margin-top:10px;
	border:0px solid black; 
}
.box
{
	width: 57%;
	height: auto;
	border:0px solid black;
	margin-left: 145px;
	margin-top: 45px;
	padding-left: 65px;
	margin-bottom: 25px;
}
#sub
{
	width: 55%;
	height: 40px;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-left:175px;
	font-family: Agency Fb;
	font-size: 1.6em;
	font-weight: bold;
	background-color: orange;
	border-radius: 10px;
	cursor: pointer;
	border-color: black;
}
input[type="date"]:disabled
{
	background-color: white;
}

</style>
<script type="text/javascript">
	function chk()
	{
		var id=document.forms.selec_op.id.value;
		var amount=document.forms.selec_op.amount.value;
		var iD=document.getElementById("std_id");
		var clas=document.getElementById("right").value;
		var cl=document.getElementById("right");
		var c2=document.getElementById("left");
		//var sec=document.getElementById("left").value;
		var sec=document.forms.selec_op.section_selector.value;
		if(id == "")
		{
			alert("Please Type Student id");
			iD.style.backgroundColor="black";
		    iD.style.borderColor="red";
			iD.style.color="white";
			return false;
		}
		else if(amount ==  )
		{
			alert("Please Enter Fee Amount");
			return false;
		}
		if(clas == "select one")
		{
			alert("Please Select Class");
			cl.style.borderColor="red";
			return false;
		}
		else if(sec == "select_opt")
		{
			alert("Please Select Section");
			c2.style.borderColor="red";
			return false;
		}
		else
			return true;
	}

</script>
</head>
<body>
<div id="attend_form" > 
<form action="" method="post" name="selec_op" onsubmit="return chk()" id="form_entry">
<h4 id="main_heading">Fee Window</h4>
<div class="box">
<label>Student ID</label><br>
<input value="<?php echo $id; ?>" type="text" name="id" placeholder="Student id" id="std_id"><br>
<label>Fee Amount</label><br>
<input value="<?php echo $amount; ?>" type="number" name="amount" placeholder="Fee_Amount" id="Amount"><br>
<label>Fee Date</label><br>
<input value="<?php echo $date; ?>" type="date" name="sub_date"  id="date" ><br>
<label>Class</label><br>
<select  name="class_selector" id="right">
	<option value="select one">Select Class</option>
	<option value="6th" <?php if($class == "6th")echo "selected='selected'" ; ?>>
		6th
	</option>
	<option value="7th" <?php if($class == "7th")echo "selected='selected'" ; ?>>
		7th
	</option>
	<option value="8th" <?php if($class == "8th")echo "selected='selected'" ; ?>>
		8th
	</option>
	<option value="9th" <?php if($class == "9th")echo "selected='selected'" ; ?>>
		9th
	</option>
	<option value="10th" <?php if($class == "10th")echo "selected='selected'" ; ?>>
		10th
	</option>
</select><br>

<label>Section</label><br>
<select name="section_selector" id="left">
	<option value="select_opt">Select Section</option>
	<option value="Green" <?php if($sec == "Green")echo "selected='selected'" ; ?>>
		Green
	</option>
	<option value="Yellow" <?php if($sec == "Yellow")echo "selected='selected'" ; ?>>
		Yellow
	</option>
	<option value="Pink" <?php if($sec == "Pink")echo "selected='selected'" ; ?>>
		Pink
	</option>
	<option value="Blue" <?php if($sec == "Blue")echo "selected='selected'" ; ?>>
		Blue
	</option>
</select>	<br>
</div>
<input type="submit" name="submit" value="Submit" id="sub">
</form>
</body>
<?php  require "footer.php"; ?>
</html>
<!--  Collect all Information on Same Page -->
<?php
if(isset($_POST['submit']))
{
echo $id=$_POST['id'];
echo $amount=$_POST['amount'];
echo $date=$_POST['sub_date'];
echo $class=$_POST['class_selector'];
echo $section=$_POST['section_selector'];
if($amount)
{
	$status="Paid";
}
else
{
	$status="Not Paid";
}
echo $query="UPDATE fee SET Fee_Amount = '$amount',fee_sub_date = '$date',student_id = '$id,class',status = '$status',class = '$class',section = '$section' WHERE student_id = '$id'";
if(mysqli_query($con,$query))
{
	echo "<script> alert('Data is Successfully Updated'); </script>";
}
else
{

	echo "<script> alert('Error Occured'); </script>";
 }
 }
?>