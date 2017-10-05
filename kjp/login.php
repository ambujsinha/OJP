<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$User_Id=$_POST['uid'];
$Password=$_POST["pwd"];
$_SESSION["uid"]=$User_Id;
$_SESSION["pwd"]=$Password;
$sql="select User_Id,Password from register where User_Id='$User_Id' && Password='$Password'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
$uid = $row["User_Id"];
$pwd = $row["Password"];
}
if($uid == "$User_Id" && $pwd == "$Password")
{
header("location:Home1.php");
}
else
{
header("location:Front.php");

}
?>