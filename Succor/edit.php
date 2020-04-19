<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit details</title>
</head>
<body>
	<center>
		<body background ="1.jpg">
	<h3> Edit your details here</h3><hr>
	<br><br><form name="edit" action="" method="POST">
	Enter your registered Phone number:<input type="text" name="phno" value="   "><br><br><br>
	Blood group:<select name="bloodgroup">
	<option value="O-ve">O-ve</option>
	<option value="O+ve">O+ve</option>
	<option value="B-ve">B-ve</option>
	<option value="B+ve">B+ve</option>
	<option value="A-ve">A-ve</option>
	<option value="A+ve">A+ve</option>
	<option value="AB+ve">AB+ve</option>
	<option value="AB-ve">AB-ve</option>
	<option value="A1B+ve">A1B+ve</option>
	<option value="A1B-ve">A1B-ve</option>
    
</select>
	<br>
	<br>
	Major trouble:<input type="text" name="major" value="   "><br><br><br>
    No.of.days suffering:<input type="text" name="days" value="   "><br><br><br>
    <input type="submit" name="edit" value="Edit">
</form>
<?php
if(isset($_POST['edit']))
{
	$servername="localhost";
	$username="id9125486_root";
	$password="project@19";
	$conn=new mysqli($servername,$username,$password);
	 if($conn->connect_error)
      {
      	die("connection failed ".$conn->connect_error);
       }
      echo"connected successfully";
       mysqli_select_db($conn,"id9125486_physically_challenged");
       $phno=$_POST['phno'];
       $blood=$_POST['bloodgroup'];
       $trouble=$_POST['major'];
	   $days=$_POST['days'];
	   	$sql2="UPDATE info set Bloodgroup='$blood',Trouble='$trouble', Days='$days' WHERE Phno='$phno'";
	   	if($conn->query($sql2)===TRUE)
	   		header("location:2.php");
	   	else
	   		echo "Error";
}?>
</center>
</body>
</html>