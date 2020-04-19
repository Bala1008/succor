<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
</head>
<script>
function validateForm() {
  var x = document.forms["updates"]["mno"].value;
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
	<center><form name="updates" action="updatean.php" method="POST"  onsubmit="return validateForm()">
		<b>Enter mobile number: </b><input type="text" name="mno" value=""><br><br>
    SHORT INFORMATION ABOUT YOUR TALENT:<textarea name="descript" cols="30" rows="10" placeholder="enter talent info"></textarea><br><br>       
    <input type="submit" value="submit" name="submit">
<hr/>
</form></fieldset></center>
<?php
     if(isset($_POST['submit']))
{
	   $conn=new mysqli('localhost','id9125486_root','project@19');

		if($conn->connect_error)
		{
		    die("connection failed :(".$conn->connect_error);
		}
	
mysqli_select_db($conn,"id9125486_physically_challenged");
		$mno=$_POST['mno'];
		$dec=$_POST['descript'];

		$delete="UPDATE records SET description= '$dec' WHERE mno='$mno'";


if(mysqli_query($conn,$delete))


echo "record updated successfully";


else


echo "not updated";

}

?>
</p1><br>
<a href="talentshome.html">HOME
</a>
	</body>
</html>