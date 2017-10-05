<?php
session_start();
$uid=$_POST['uid'];
$_SESSION["uid"]=$uid;
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
if(isset($_POST['uid']))
{
$sql="select *from register where user_id='$uid'";
$result=mysql_query($sql);
}
while($row=mysql_fetch_array($result))
{
if($result)
{
$Name=$row['Name'];
$User_Id=$row['User_Id'];
$Password=$row['Password'];
$Contact=$row['Contact'];
$Email=$row['Email'];
$Gender=$row['Gender'];
}
}
?>
<html>
<head>
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
<div id ="wrapper">
<div id="header"><center><h3><b><u>KOLKATA JOB PORTAL</u></b></h3><img src="job_portal_management_software.jpg"></center></div>
<div id="content"><form action="adup2.php"method="post"><center><br><br><br><h4>Update Your Details</h4>
<table><tr><td>Name:</td><td><input type="text"Name="name"id="name"value="<?php echo $Name?>"></td></tr>
<tr><td>User Id:</td><td><input type="text"name="uid"id="uid"value="<?php echo $uid?>"></td></tr>
<tr><td>Password:</td><td><input type="password"Name="pwd"id="pwd"value="<?php echo $Password?>"></td></tr>
<tr><td>Contact:</td><td><input type="text"Name="num"id="num"value="<?php echo $Contact?>"></td></tr></td></tr>
<tr><td>Email:</td><td><input type="text" Name="email"id="email"value="<?php echo $Email?>"></td></tr></td></tr>
<tr>
<td>Gender:</td>
<td><input <?php if($Gender=="Male"){?> checked="checked"
<?php } ?> type= "radio" name= "Gender" value= "male">Male
<input <?php if($Gender=="Female"){?> checked="checked"
<?php } ?> type= "radio" name= "Gender" value= "female">Female
</td>
</tr>
<tr><td></td><td><input type="submit"value="Register"></td></tr></table></center></form></div>
<div id="footer"></div>
</html>