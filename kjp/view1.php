<?php
SESSION_START();
?>
<html>
<head>
<link rel="Styleshet"type="text/css"href="Style.css">
<style>
table,th,td{border:1px solid black;border-collapse:cpl
</style>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$sql="select * from postjob";
$result=mysql_query($sql);
?>
<table style="font-size:12px"class="gridtable">
<tr>
<th>Name</th>
<th>Place</th>
<th>Position</th>
<th>Address</th>
<th>Requirment</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
echo"<tr><td>$row[cname]</td>
<td>$row[place]</td>
<td>$row[position]</td>
<td>$row[addd]</td>
<td>$row[req]</td>
</tr>";
}
?>