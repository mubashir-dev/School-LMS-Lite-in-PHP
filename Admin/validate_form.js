function chk()
	{
		var first_name=document.forms.form_sign_up.first_name.value;
		var last_nmae=document.forms.form_sign_up.la_name.value;
		var father_name=document.forms.form_sign_up.father_name.value;
		var email =document.forms.form_sign_up.email.value;
		var passwd_1=document.forms.form_sign_up.passwd_1.value;
		var passwd_2=document.forms.form_sign_up.passwd.value;
		var dob=document.forms.form_sign_up.dob.value;
		var img_path=document.forms.form_sign_up.pic.value;
		var cont_no=document.forms.form_sign_up.contact_no.value;
		var gender=document.forms.form_sign_up.gender.value;
		var address=document.forms.form_sign_up.Address.value;
		var id=document.forms.form_sign_up.student_id.value;
		if(id == "")
		{
		alert("Provide Student ID");
			return false;	
		}
		else if(first_name == "")
		{
			alert("Provide Your Name");
			return false;
		}
		else if(last_nmae == "")
		{
			alert("Provide your last name");
			last_nmae.focus();
			return false;
		}
		else if(father_name == "")
		{   alert("Provide Your Father Name");
			return false;
		}
		else if(email == "")
		{
			alert("Email field is left blank");
			return false;
		}
		else if(passwd_1 == "")
		{
			alert("Password field is left blank");
			return false;
		}
		else if(passwd_2 == "")
		{
			alert("Please Retype your password");
			return false;
		}
		else if( passwd_1 != passwd_2)
		{
			alert("password are not macthed");
			//passwd_2.focus();
			return false;
		}
		else if(dob  == "")
		{
			alert("Date of Birth field is left blank");
			return false;
		}
		else if(img_path  == "")
		{
			alert("Provide Profile Image path");
			return false;
		}
		else if(cont_no == "")
		{
			alert("Provide your Contact Number");
			return false;
		}
		else if(gender == "")
		{
			alert("Select your gender");
			return false;
		}
		else if(address == "")
		{
			alert("Adress filed is blank");
			return false;
		}
		else
		{
			var cfrm=confirm("Are You sure to submit your data on server");
			return cfrm;
		}
	}

