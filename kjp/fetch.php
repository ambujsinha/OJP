<?php
SESSION_START();
?>
<html>
<head>
<link rel="Styleshet"type="text/css"href="Style.css">
<style>
table,th,td{border:1px solid black;border-collapse:cpl
</style>
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
<div id="content"><br><br><br><center>
<?php
//session_start();
$uid=$_SESSION["uid"];
//echo $uid;
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$sql="select * from register where User_Id='$uid'";
$result=mysql_query($sql);
?>
<table style="font-size:12px"class="gridtable">
<tr>
<th>Name</th>
<th>User_Id</th>
<th>Password</th>
<th>Contact</th>
<th>Email</th>
<th>Gender</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
echo"<tr><td>$row[Name]</td>
<td>$row[User_Id]</td>
<td>$row[Password]</td>
<td>$row[Contact]</td>
<td>$row[Email]</td>
<td>$row[Gender]</td>
</tr>";
}
?></table>
<br>
<a href="index.php">-------------------------------------------login------------------------------------------</a></div>
<div id="footer"></div>
</div>
</body></html>