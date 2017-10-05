<?php
session_start();
$uid=$_SESSION["uid"];
echo $uid;
// user fields post
    $Name = $_POST["name"];
	$User_Id = $_POST["uid"];
	$Password = $_POST["pwd"];
	$Contact = $_POST["num"];
	$Email = $_POST["email"];
	$Gender = $_POST["Gender"];
	$con=mysql_connect("localhost","root","");
    mysql_select_db("project",$con);
	$sql = "UPDATE register SET
	Name='$Name',	
	User_Id = '$User_Id',
	Password = '$Password',
	Contact = '$Contact',
	Email = '$Email',
	Gender ='$Gender'
		where User_Id='$uid'";
		
	
	$result = mysql_query($sql);
	
		if ($result)
		{
			header("location:fetch.php");
		}
		else
		{
			die(mysql_error());
		}
?>