<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>
<?php
$C=$_POST['ro'];
$name=$_POST['name'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125486_root';
$dbpass='project@19';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,'id9125486_physically_challenged');
$delete="update socjob set Fname='$name' where Adhar='$C'";
if(mysqli_query($conn,$delete))
echo "record updated successfully";
else
echo "not updated";
mysqli_close($conn);
?>
<form name="del" method="POST" action="jobmainpage.php">
<input type="submit" value="home" name="value">
</form>
</html>
