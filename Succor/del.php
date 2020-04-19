<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
</head>
<body>
	<br><br><br><br><br>
	<center>
		<?php
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
       $sql="DELETE FROM info WHERE Phno=$phno";
       if($conn->query($sql)===TRUE)
       {?>
       	<script><?php echo "alert('Response deleted successfully')";?></script>
       <?php
       }
       else
       {
       	echo "Error";
       }
		?></center>

</body>
</html>