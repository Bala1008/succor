<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
</head>
<body background="jordan.jpg" style="background-repeat: no-repeat;">
	<center><h3>SUCCOUR</h3>
	<i>(a helping hand for your upliftment)</i></center>	
	<br><br><br><br><br><br><br><br><br><br><br><br>
    <fieldset>
	<center><form name="forget" action="" method="POST">
        <br>
        <br>
        <br>
        
		<b>Enter registered mobile number: </b><input type="text" name="mob" value=""><br><br>
		<br><br>
		<input type="submit" name="DELETE" value="DELETE"></form></center>
<?php
if(isset($_POST['DELETE']))
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
		
      	$sql1="DELETE FROM pwd WHERE mobile='$mob'";
     
		    $sql = "DELETE FROM pwd WHERE mobile='$mob'";
		  	$a=$conn->query($sql);
	        if($conn->query($sql)===TRUE) 
	      	{
		      	echo "Deleted successfully";
                ?>
                <form name="home" action="page1.php" method="post">
               <input type="submit" value="HOME" name="HOME">
               </form>
            <?php
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
