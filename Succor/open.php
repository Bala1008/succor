<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Medicinal Details</title>
</head>
<body>
	<body background="01.jpg">
	<br><br><br><br><br><br><br><br><center>
	<form name="open1" action="" method="POST">
		Enter your mobile number: <input type="text" name="phno" value="">
		<input type="submit" name="proceed" value="Proceed">
	</form><br><br><br><br><br><br>
	<p>Would you like to edit your response?</p>
	<form name="edit" action="edit.php" method="POST">
		<input type="submit" name="submit" value="Edit">
	</form><br><br><br>
	<p>Do you want to delete your response?</p>
	<form name="delete" action="del.php" method="POST">
		Enter your registered mobile number :<input type="text" name="phno" value="">
		<input type="submit" name="delete" value="Delete">
	</form>

</center>
	<?php
	if(isset($_POST['proceed']))
    {
	$phno=$_POST['phno'];
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
       $sql="SELECT * FROM info WHERE Phno ='$phno'";
       $a=$conn->query($sql);
       $row=mysqli_fetch_array($a,MYSQLI_ASSOC);
       if($row['Diseases']="Psycological disorders")
       	header("location:psyco.html");
       elseif($row['Diseases']="Vision impairments")
       	header("location:vis.html");
       elseif($row['Diseases']="Spinal cord disability")
       	header("location:spinal.html");
   }
   

?>
</body>
</html>