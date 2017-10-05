<html>
<title>Register</title>
				<head>
				<script type="text/javascript">
				function validation()
				{
				var RE_UID = /^(\w)+$/;
				var RE_PASS = /^(\w)+$/;
				var RE_NAME = /^(\w)+$/;
				var RE_CONTACTNO = /^\d{10,11}$/;
				var RE_EMAIL = /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
				
				var nam = document.getElementById("name").value;
				if(nam=="")
				{
				alert("name cannot be blank");
				return false;
				}
				//alert(nam);
				if (!RE_NAME.test(nam)) 
				{
				   alert("name has to be alphanumeric");
					return false;
				}
				
				var u1 = document.getElementById("uid").value;
				if(u1=="")
				{
				alert("user id cannot be blank");
				return false;
				}
				//alert(u1);
					if (!RE_UID.test(u1)) 
				  {
				   alert("user id has to be alphanumeric");
					return false;
				
				  }
				var pw = document.getElementById("pwd").value;
				if(pw=="")

				{
				alert("password cannot be blank");
				return false;
				}
				//alert(pw);
				if (!RE_PASS.test(pw)) 
				  {
				   alert("password has to be alphanumeric");
					return false;
				
				  }
				var no = document.getElementById("num").value;
				if(no=="")
				{
				alert("contact number cannot be blank");
				return false;
				}
				//alert(no);
				if (!RE_CONTACTNO.test(no)) 
				  {
				   alert("enter valid contact number");
					return false;
					}
				var em = document.getElementById("email").value;
				if(em=="")
				{
				alert("email cannot be blank");
				return false;
				}
				//alert(em);
				if (!RE_EMAIL.test(em)) 
				  {
				   alert("Email should have proper email validation");
					return false;
				
				  }
				  var radioSelected = false;
					for (i =0;i<f1.gender.length;i++)
					{
					if(f1.gender[i].checked)
					radioSelected=true;
					}
					if(!radioSelected)
					{
					alert("Please select one of the \"Gender\" options.");
					return (false);
					}
				}
			</script>
					<style type="text/css">
#wrapper
{
height:650px;
width:1400px;
background-color:gray;
}
#header
{
height:250px;
width:1400px;
background-color:green;
float:left;
}
#content
{
height:350px;
width:1400px;
background-color:gray;
float:left;
}
#footer
{
height:50px;
width:1400px;
background-color:black;
float:left;
}
</style>
</head>
<body>
<div id = "wrapper">
<div id = "header"><center><h3><b><u>KOLKATA JOB PORTAL</u></b></h3><img src="job_portal_management_software.jpg"></center></div>
<div id = "content"><center><h1>REGISTRATION</h1>
<form name = "f1" onsubmit ="return validation()" action="Connection.php" method ="post">
<table><tr><td>Name</td><td><input type ="text" name ="name" id="name"></td></tr>
<tr><td>User Id</td><td><input type ="text" name ="uid" id="uid"></td></tr>
<tr><td>Password</td><td><input type ="password" name ="pwd" id="pwd"></td></tr>
<tr><td>Contact Number</td><td><input type ="text" name ="num" id="num"></td></tr>
<tr><td>Email</td><td><input type ="text" name ="email" id="email"></td></tr>
<tr><td>Gender</td><td><input type = "radio" name= "Gender" value="Male">Male
<input type = "radio" name= "Gender" value="FEMALE">Female</td></tr>
<tr><td></td><td><input type = "submit" value = "Register"><a href="index.php">Back</a></td></tr></table>
</form></center></div>
<div id = "footer"></div>
</div>
</body>
</html>