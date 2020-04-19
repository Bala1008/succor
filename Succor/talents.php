<?php ob_start(); ?>
<?php
$name=$_POST['name'];
$mno=$_POST['mno'];
$gender=$_POST['gender'];
$talentarea=$_POST['talent'];
$sports=implode(', ',$_POST['sports']);
$arts=implode(', ',$_POST['arts']);
$desc=$_POST['descript'];
$conn=new mysqli('localhost','id9125486_root','project@19');
mysqli_select_db($conn,"id9125486_physically_challenged");
$b="INSERT INTO records(name,mno,gender,talentarea,sports,arts,description)VALUES('$name','$mno','$gender','$talentarea','$sports','$arts','$desc')";
if($conn->query($b)===TRUE)
echo"NEW RECORD CREATED";
else
echo"RECORD NOT CREATED";
if($talentarea=="sports")
{
	header("location:talentssports.html");
}
elseif($talentarea=="arts")
{
	header("location:talentsarts.html");
}

?>
