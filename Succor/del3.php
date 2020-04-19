<HTML>
<HEAD>
<TITLE>Delete
</TITLE>
</HEAD>
<?php
$C=$_POST['ro'];
$mysqlport=getenv('S2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='id9125486_root';
$dbpass='project@19';
$conn=mysqli_connect("localhost",$dbuser,$dbpass);
mysqli_select_db($conn,'id9125486_physically_challenged');
$delete="delete from socjob where Adhar='$C'";
if(mysqli_query($conn,$delete))
echo "record deleted successfully";
else
echo "not deleted";
mysqli_close($conn);
?>
<form name="del" method="POST" action="jobmainpage.php">
<input type="submit" value="HOME" name="HOME">
</form>
</html>
