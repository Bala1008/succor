
<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<body background="jordan.jpg" style="background-repeat: no-repeat;">
    <center><i><h2>SUCCOUR</h2></i>
	<i>(a helping hand for your upliftment)</i></center>	
	<br><br><br><br><br><br><br><br><br><br><br>
    <fieldset>
	<center><form name="forget" action="" method="POST">
		<b>Enter registered mobile number: </b><input type="text" name="mob" value=""><br><br>
		<b>Enter new name:</b><input type="text" name="name" value=""><br><br>
		<input type="submit" name="UPDATE" value="UPDATE"></form></center>
<?php
if(isset($_POST['UPDATE']))
{
	
	    $servername="localhost";
        $username="id9125486_root";
        $password="project@19";
		$conn=new mysqli($servername,$username,$password);
		if($conn->connect_error)
		{
		    die("connection failed :(".$conn->connect_error);
		}
		
		mysqli_select_db($conn,"id9125486_physically_challenged");
		$mob=$_POST['mob'];
		$name=$_POST['name'];
      	$sql1="SELECT * FROM pwd WHERE mobile='$mob'";
     
		    $sql = "UPDATE pwd set name='$name' WHERE mobile='$mob'";
		  	$a=$conn->query($sql);
	        if($conn->query($sql)===TRUE) 
	      	{
		      	echo "Your details were updated successfully";
                ?>
             <form name="home" action="page1.php" method="POST">
             <input type="submit" name="HOME" value="HOME">
             </form><?php 
		    }
		    else
		    {
		      	echo "Error!!".$sql."<br>".$conn->error;
		    }
		    $conn->close();
	
}

?>
    </fieldset>    
	</body>
</html>
