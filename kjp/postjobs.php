<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">
	#wrapper
	{
		height:900px;
		width:1350px;
		background-color:gray;
	}
		#header
	{
		height:300px;
		width:1350px;
		background-color:green;
		float:left;
	}
		#content
	{
		height:550px;
		width:1350px;
		background-color:gray;
		float:left;
	}
		
		#footer
	{
		height:50px;
		width:1350px;
		background-color:black;
		float:left;
	}
ul
	{
	list-style-type:none;
	margin:0;
	padding:10px;
	
	overflow:hidden;
	}
li
	{
	float:left;
	}
	a:link,a:visited
	{
	display:block;
	width:225px;
	font-weight:bold;
	color:white;
	margin:3px;
	background-color:black;
	text-align:center;
	padding:10px;
	text-decoration:none;
	text-transform:uppercase;
	}
	a:hover,a:active
	{
	background-color:#7A991A;
	}
</style>
<style type="text/css"></style></head>
<body>
<div id="wrapper">
<div id="header"><center><h3><b><u>KOLKATA JOB PORTAL</u></b></h3><img src="job_portal_management_software.jpg"></center><ul>
<li><a href="Home1.php">home</a></li>
<li><a href="findjobs.php">find jobs</a></li>
<li><a href="postjobs.php">post jobs</a></li>
<li><a href="delete.php">Delete</a></li>
<li><a href="index.php">Logout</a></li>
</ul></div>
<div id="content"><form action="pjob.php" method="post"><center><u>Here You Can Post Your Job Deatails</u></center>
<table>
<tbody><tr>
	<td>Name Of Company</td>
	<td><input type="text" name="cname"></td></tr>
<tr>
	<td>Place</td>
    <td><input type="text" name="place"></td></tr>
	<tr>
	<td>Job Position</td>
    <td><input type="text" name="position"></td></tr>
<tr>
	<td>About Your Company</td>
	<td><textarea rows="10" columns="100" name="addd" style="margin: 0px; width: 557px; height: 167px;"></textarea></td>
</tr>
<tr>
	<td>Requirement</td>
	<td><textarea rows="10" col="100" name="req" style="margin: 0px; height: 228px; width: 556px;"></textarea></td>
</tr><tr><td></td><td><input type="submit"></td></tr>
</tbody></table>
</form></div>
<div id="footer"></div>



	
</div></body></html>