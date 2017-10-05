<?php
$cname=$_POST["cname"];
$place=$_POST["place"];
$position=$_POST["position"];
$addd=$_POST["addd"];
$req=$_POST["req"];
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$sql="insert into postjob
(
cname,
place,
position,
addd,
req
)
values('$cname','$place','$position','$addd','$req')";
$result=mysql_query($sql);
if($result)
{

}
else
{
die(mysql_error());
}
?>
<html>
<head>
<style type="text/css">
#wrapper
{
height:750px;
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
height:450px;
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
<div id="content"><center><h3>You Are Sucessfully Post Job Details!!!</h3></center>
<p align="center">--------------------------------------------------------------------------------------------------</p>
<p align="left"><center><a href="view.php">Seen</a</p>
<p align="center">--------------------------------------------------------------------------------------------------</p></center>
</div>
<div id="footer"></div>
</body></html>