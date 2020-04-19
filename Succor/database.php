<?php ob_start();?>
<html><body>
<?php
$a=$_POST['finame'];
$b=$_POST['laname'];
$c=$_POST['fileupload'];
$d=$_POST['des'];
$e=$_POST['bday'];
$f=$_POST['age'];
$i=$_POST['degree'];
$g=$_POST['sex'];
$k=$_POST['filupload'];
$l=$_POST['faname'];
$m=$_POST['Phno'];
$n=$_POST['adhar'];
$o = implode(",",$_POST['Disability']);
$p = implode(",",$_POST['Dissi']);
$q=$_POST['dis'];
$servername="localhost";
$username="id9125486_root";
$password="project@19";
$dbname="id9125486_physically_challenged";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error)
{
	die("CONNECTION FAILED ".$conn->connect_error);
}
	echo "CONNECTED SUCCESSFULLY"."<br/>";
mysqli_select_db($conn,'id9125486_physically_challenged');
$sql="INSERT INTO socjob(Fname,Lname,Photo,Address,Dob,Age,Gender,Qualification,PWD,Phone,Adhar,Disabletype,Dissince,Disdueto,Fathername)
VALUES('$a','$b','$c','$d','$e','$f','$g','$i','$k','$m','$n','$o','$q','$p','$l')";
if($conn->query($sql)===TRUE)
{
	echo "New record Created succesfully";
}
else
{
	echo "ERROR!!".$sql."<br/>".$conn->error;
}
if($_POST['degree']=="bsc")
{
header('location:jobdes.html');
}
else if($_POST['degree']=="msc")
{
header('location:jobdes1.html');}
$conn->close();
?></body>
</html>