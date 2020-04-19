<html>
<head><title>UPDATE1</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT'); 
$dbhost="localhost:".$mysqlport;
$dbuser='id9125486_root';
$dbpass='project@19';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,"id9125486_physically_challenged");

$query_select="select Adhar from socjob";
$result=mysqli_query($connect,$query_select);
?>
UPDATING THE RECORDS BY ADHAR NUMBER
<form name="up1" method="POST" action="up2.php">
<select name="ADHAR">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['Adhar'];?></option>
<?php
}mysqli_close($connect);
?>
</select>
<input type="submit"  name="update" value="UPDATE">
</form>
</body>
</html>
