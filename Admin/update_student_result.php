<?php
session_start();
require "header.php"; 
$rollno=$_SESSION['rollno'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Create Result</title>
<style type="text/css">
    #form_sing_up
    {
    	width: 45%;
    	height: auto;
    	border:0px solid black;
    	margin:0 auto;
    	margin-top:30px;
    }
    .row
    {
    	width: 100%;
    	height: 35px;
    	border:0px solid black;
    }
    .row input
    {
    	width: 35%;
    	height: 30px;
    	float: right;
    	margin-right: 5px;
    }
    .row label
    {
    	font-family: Agency Fb;
    	height: 25px;
    	border:0px solid black;
    	margin-top: 2px;
    	float: left;
    	font-size: 1.4em;
    	margin-left: 5px;
    	font-weight: bold;
    }
    ::placeholder
    {
    	font-family: Agency Fb;
    	color:black;
    	font-weight: ;

    }
    #sub
{
	width: 50%;
	height: 40px;
	margin-top: 15px;
        margin-bottom: 25px;
     margin-left:250px;
	font-family: Agency Fb;
	font-size: 1.6em;
	font-weight: bold;
	background-color: orange;
	cursor: pointer;
}
#sub:hover
{
background-color: blue;
}
	#main_heading 
{
	width:280px;
	height: 35px;
	background-color: orange;
	font-size: 1.8em;
	text-align: center;
	margin:0 auto;
	margin-top:5px;
		margin-bottom:25px;
font-family: AgencY Fb;	
	border:1px solid black; 
}

</style>
<script>
	function chk()
	{
		var id=document.forms.form_sign_up.student_id.value;
		var marks1=document.forms.form_sign_up.sub1.value;
		var marks2=document.forms.form_sign_up.sub2.value;
		var marks3=document.forms.form_sign_up.sub3.value;
		var marks4=document.forms.form_sign_up.sub4.value;
		var marks5=document.forms.form_sign_up.sub5.value;
		var marks6=document.forms.form_sign_up.sub6.value;
		var marks7=document.forms.form_sign_up.sub7.value;
		var marks8=document.forms.form_sign_up.sub8.value;
		if(id=="")
		{
			alert("Provide Student ID");
			return false;
		}
		else
			return true;

	}
</script>
</head>
<?php 
$rollno;
$sql="SELECT *FROM exam_result WHERE student_id='
$rollno'";
$fire=mysqli_query($con,$sql);
if($fire)
{
    
        while($rows=mysqli_fetch_assoc($fire))
        {

            $id=$rows["student_id"];
           $eng=$rows["English"];
           $math=$rows["Mathematics"];
           $phy=$rows["Physics"];
           $chem=$rows["Chemistry"];
           $bio=$rows["Biology"];
           $urdu=$rows["Urdu"];
           $Islamic=$rows["Islamic_Studeis"];
           $ps=$rows["Pakistan Studies"];
        }
    
}
?>

<body>
<div id="form_sing_up">
<h3 id="main_heading">Result Form</h3>	
<form action="catch_result.php" method="post" name="form_sign_up" onsubmit="return ch()"  enctype="multipart/form-data" id="form_marks">
<div class="row">
<label id="label_1">Student ID</label>
<input value="<?php echo $id;?>" type ="text" placeholder="Student ID" id="student_id" name="student_id" style="font-size: 1.1em;padding-left:2px" >
</div><br>
<div class="row">
<label id="label_1">English</label>
<input value="<?php echo $eng; ?>"  type ="number" placeholder="English Marks" id="student_id" name="sub1" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required">
</div><br>
<div class="row">
<label id="label_1">Mathematics</label>
<input type ="number" placeholder="Mathematics Marks" id="student_id" name="sub2" style="font-size: 1.1em;padding-left:2px" min="0" max="100" required="required" value="<?php echo  $math;?>">
</div><br>
<div class="row">
<label id="label_1">Physics</label>
<input type ="number" placeholder="Physics Marks" id="student_id" name="sub3" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required" value="<?php echo  $phy;?>">
</div><br>
<div class="row">
<label id="label_1">Chemistry</label>
<input   type ="number" placeholder="Chemistry Marks" id="student_id" name="sub5" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required" value="<?php echo $chem;?>">
</div><br>

<div class="row">
<label id="label_1">Biology</label>
<input  type ="text" placeholder="Biology Marks" id="student_id" name="sub4" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required" value="<?php echo $bio; ?>">
</div><br>
<div class="row">
<label id="label_1">Urdu</label>
<input  type ="number" placeholder="Urdu Marks" id="student_id" name="sub6" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required" value="<?php echo $urdu; ?>">
</div><br>
<div class="row">
<label id="label_1">Islamic Studeis</label>
<input  type ="number" placeholder="Islamic Studeis Marks" id="student_id" name="sub8" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required" value="<?php echo  $Islamic; ?>" >
</div><br>
<div class="row">
<label id="label_1">Pakistan Studies</label>
<input   type ="number" placeholder="Pakistan Studies Marks" id="student_id" name="sub7" style="font-size: 1.1em;padding-left:2px" min="0" max="100"  required="required"  value="<?php echo $ps; ?>">
</div><br>
</div>
<input type="submit" name="submit" id="sub">
</form>
<?php require "footer.php"; ?>
</body>
</html>