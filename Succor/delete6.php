<!DOCTYPE html>
<html>
<head>
	<title>DELETE YOUR ENTIRE RECORD</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
</head>
<script>
function validateForm() {
  var x = document.forms["delete"]["mno"].value;
  if (x == "") {
    alert("Mobile number must be filled out");
    return false;
  }
}
</script>
	<style type="text/css">

    body {
      background-image:url('cool.jpeg');
      width: 100%;
      height: 100%;
      background-repeat:no-repeat;/*we want to have one single image not a repeated one*/  
   background-size:cover;
    }

</style>
	<p1 style="font-family:courier; font-size:200%; color:black;">
	<center><h3>SUCCOUR</h3>
	<i>(a helping hand for your upliftment)</i><hr></center>	
	<br><br><br><br><br><br><br><br><br>
	<center><form name="delete" action="delete6.php" method="POST"  onsubmit="return validateForm()">
		<b>Enter mobile number: </b><input type="text" name="mno" value=""><br><br>     
    <input type="submit" value="submit" name="delete"> 
<hr/>
</form></fieldset></center>
<?php
     if(isset($_POST['delete']))
{
	   $conn=new mysqli('localhost','id9125486_root','project@19');

		if($conn->connect_error)
		{
		    die("connection failed :(".$conn->connect_error);
		}

mysqli_select_db($conn,"id9125486_physically_challenged");
		$mno=$_POST['mno'];
        $delete="DELETE from records WHERE mno='$mno'";  
        
if(mysqli_query($conn,$delete))
        echo "YOUR DETAILS HAVE BEEN DELETED SUCCESSFULLY";
        
else
        echo "DETAILS HAVE NOT BEEEN DELETED";
}    

?>
</p1><br>
<a href="talentshome.html">HOME
    
</a>

</body></html>


