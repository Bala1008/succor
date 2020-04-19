<!DOCTYPE html>
<html>
<head>
	<title>DELETE YOUR ENTIRE RECORD</title>
</head>
<body background="login page.jpg" style="background-repeat: no-repeat;background-size: 1250px 650px;">
	<center><h3>SUCCOUR</h3>
	<i>(a helping hand for your upliftment)</i><hr></center>	
	<br><br><br><br><br><br><br><br><br>
	<center><form name="delete" action="delete1.php" method="POST">
		<b>Enter mobile number: </b><input type="text" name="mno" value=""><br><br>     
    <input type="submit" value="submit" name="delete"> 
<hr/>
</form></fieldset></center>
<?php
        $mno=$_POST['mno'];
	    $servername="localhost";
        $username="root";
        $password="";
		$conn=new mysqli($servername,$username,$password);
		if($conn->connect_error)
		{
		    die("connection failed :(".$conn->connect_error);
		}
	
		mysqli_select_db($conn,"records");
        $delete="DELETE from records WHERE mno='$mno'";  
        
if(mysqli_query($conn,$delete))
        echo "YOUR DETAILS HAVE BEEN DELETED SUCCESSFULLY";
        
else
        echo "DETAILS HAVE NOT BEEEN DELETED";

?>

</body></html>


