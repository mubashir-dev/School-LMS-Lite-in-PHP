alert("File is Attached");
function chk()
	{
		alert("jsafjafja");
	var name=document.forms.form_teacher.Teacher_name.value;
	var F_id=document.forms.form_teacher.Faculity_id.value;
	var class=document.forms.form_teacher.class_de.value;
	var section=document.forms.form_teacher.section.value;
	var username =document.forms.form_teacher.username.value;
	var passwd_1=document.forms.form_teacher.passwd_1.value;
	var passwd_2=document.forms.form_teacher.passwd.value;
	var img_path=document.forms.form_teacher.pic.value;
	var cont_no=document.forms.form_teacher.contact_no.value;
	var gender=document.forms.form_teacher.gender.value;
	if(name == "")
	{
		alert("Please Enter Name");
		return false;
	}
	else if(F_id == "")
	{
		alert("Please Provide Faculity id");
		return false;
	}
	else if(class = "")
	{
		alert("Provide Class Name");
		return false;
	}
	else if(Section  == "")
	{
		alert("Provide Section Name");
		return false;
	}
	else if(username == "")
	{
		alert("Provide Username");
		return false;
	}
	else if(passwd_1 == "")
	{
		alert("Please Provide password");
		return false;
	}
	else if(passwd_2 == "")
	{
		alert("Please Provide Password");
		return false;
	}
	else if(passwd_1 != passwd_2)
	{
		alert("Passwords are not matched");
		return false;
	}
	else if(img_path == "")
	{
		alert("Provide img_path ");
		return false;
	}
	else if(gender == "")
	{
		alert("Select Gender");
		return false;
	}
	else
		return true;
	}
