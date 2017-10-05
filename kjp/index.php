<html>
<head>
<script type="text/javascript">
function validation()
{
var u1 = document.getElementById("uid").value;
if(u1=="")
{
alert("user id cannot be blank");
return false;
}
//alert(u1);

var pw = document.getElementById("pwd").value;
if(pw=="")
{
alert("password cannot be blank");
return false;
}
//alert(pw);
}
</script>
<style type="text/css">
#wrapper
{
height:800px;
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
height:500px;
width:700px;
background-color:gray;
float:left;
}
#comment
{
height:500px;
width:700px;
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
<div id="wrapper">
<div id="header"><center><h3><b><u>KOLKATA JOB PORTAL</u></b></h3><img src="job_portal_management_software.jpg"></center></div>
<div id="content"><center><h3>WELCOME TO KOLKATA JOB PORTAL...!!!</h3></center>
<p align="center">--------------------------------------------------------------------------------------------------</p>
<center><h4>Mission</h4></center>
<p align="left"><center>	
                The mission of this project or this website to find out the best job and best employees
                for according to their need with simple and best manner. This website help the new
                or exprience employee to find out the all private and goverment jobs in kolkata
                from any where in kolkata and they can also apply from anywhere with simple
                few clicks. This web site also help the different sectors companies to find out the
                best employee with low cost and in efficient manner.
</p>
<p align="center">--------------------------------------------------------------------------------------------------</p>
<h4>                Developer Point of View</h4>
<p>
                Generally This was a simple project for my B.tech 3rd year minor project but when I
                start working on it I feel it interesting and think why not I make it use for anyone,
                so decide to work hard on it as possible as and try to make it my best project and 
                decide to put it online. And today I am proud of it that I make it possible and
                I am humble thanX to all who give us costly time and suggestion and feedback and
                who share their knowledge with me during this project to make it successful. And once
                again I am welcome all the users of kolkata Job Portal, I am promise to you all
                that I will provide you the best and updated information about jobs and companies
                and employees. Please co-operate with us.
				</p>
</center></div>
<div "comment"><center>.<br><br><br><form name = "f1" onsubmit ="return validation()" action="login.php" method ="post">
<table><center><u><b>Login</b></u></center><br><br><tr><td>User Id:</td><td><input type="text" name="uid" id="uid"></td></tr>
<tr><td>Password:</td><td><input type="Password" name="pwd" id="pwd"></td></tr>
<tr><td></td><td><input type="Submit" value="Login"></form><a href="Register.php">Sign up</a>
</td></tr></table><br><a href="Forget.php">Forget Password</a></div>
<div id="footer"></div></body></html>