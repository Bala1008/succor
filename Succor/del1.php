<html>
<head><title>DELETE</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125486_root';
$dbpass='project@19';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125486_physically_challenged');

$query_select="select Adhar from socjob";
$result=mysqli_query($connect,$query_select);
?>
DELETING THE RECORDS BY ADHAR NUMBER
<form name="delete" method="POST" action="del2.php">
<select name="ADHAR">
<?php
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{?>
	<option><?php echo $row['Adhar'];?></option>
<?php
}
?>
</select>
<input type="submit"  name="delete" value="DELETE">
</form>
</body>
</html>
