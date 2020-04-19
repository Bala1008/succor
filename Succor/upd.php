<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body background="login page.jpg" style="background-repeat: no-repeat;background-size: 1250px 650px;">
	<center><h3>SUCCOUR</h3>
	<i>(a helping hand for your upliftment)</i><hr></center>	
	<br><br><br><br><br><br><br><br><br>
	<center><form name="forget" action="" method="POST">
		<b>Enter user name: </b><input type="text" name="username" value=""><br><br>
		<b>Enter the new password</b><input type="password" name="fpassword" value=""><br><br>
		<b>Re-Enter the new password</b><input type="password" name="repassword" value=""><br><br>
		<input type="submit" name="change" value="Change"></form></center>
<?php
if(isset($_POST['change']))
{
	if(($_POST['fpassword'])!=($_POST['repassword']))
	{
		?>

	    <script>
		<?php
		echo "alert('incorrect password. please re-enter your new password')";?></script>
		 <?php
    }
	else
	{
	    $servername="localhost";
        $username="id9125486_root";
        $password="project@19";
		$conn=new mysqli($servername,$username,$password);
		if($conn->connect_error)
		{
		    die("connection failed :(".$conn->connect_error);
		}
		/*echo"connected successfully";*/
		mysqli_select_db($conn,"id9125486_physically_challenged");
		$Username=$_POST['username'];
		$Password=$_POST['fpassword'];
      	$sql1="SELECT * FROM user_info WHERE Username='$Username'";
     	$b=$conn->query($sql1);
		$c=mysqli_num_rows($b);
		if($c==1)
		{
 		    $sql = "UPDATE user_info set Password='$Password' WHERE Username='$Username'";
		  	$a=$conn->query($sql);
	        if($conn->query($sql)===TRUE) 
	      	{
		      	header("location:index.php");
		    }
		    else
		    {
		      	echo "Error!!".$sql."<br>".$conn->error;
		    }
		    $conn->close();
		}
		else
		{
			?>
		    <script><?php
		    echo "alert('Username does not exist')";?></script><?php
		}
	}
}

?>
	</body>
</html>