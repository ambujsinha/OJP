<html>
<head>
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
<style type="text/css">
	#wrapper
	{
		height:750px;
		width:1350px;
		background-color:gray;
	}
		#header
	{
		height:325px;
		width:1350px;
		background-color:green;
		float:left;
	}
		#content
	{
		height:375px;
		width:950px;
		background-color:gray;
		float:left;
	}
		#comment
	{
		height:375px;
		width:400px;
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
	width:235px;
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
</head>
<body>
<div id="wrapper">
<div id="header"><center><h1>KOLKATA JOB PORTAL</h1><img src="job_portal_management_software.jpg"></center>
<ul>
<li><a href="Home1.php">home</a></li>
<li><a href="findjobs.php">find jobs</a></li>
<li><a href="postjobs.php">post jobs</a></li>
<li><a href="delete.php">Delete</a></li>
<li><a href="index.php">Logout</a></li>
</ul></div>
<div id="content"><center><h2><b><u>JOBS IN ENGINEERING</u></b></h2><br><br><a href="cse.php">CSE</a><br><br><br><a href="cse.php">ECE</a><br><br><br><a href="cse.php">IT</a><br><br><br>
</div>
<div id="comment"><center><h2><b><u>JOBS IN ENGINEERING</u></b></h2><br><br><a href="cse.php">ME</a><br><br><br><a href="cse.php">CE</a><br><br><br><a href="cse.php">EEE</a><br><br><br>
 </div>
<div id="footer"></div>
</form>
</body>
</html>
