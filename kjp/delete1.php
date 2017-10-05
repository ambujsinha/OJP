
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<center>
<div id="wrapper">
<div id="content">
<?php
	
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
	
	$position=$_POST['position'];
	
	$sql = "DELETE FROM postjob where position='$position'";

	$result = mysql_query($sql);
		if ($result)
		{
			header('location:view.php');
		}
		else
		{
			die(mysql_error());
		}
?>

</div>
</center>
</html>
