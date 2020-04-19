<?php ob_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Form</title>
</head>
<body style="background:url(medicine.png);background-size: 100% 100%;background-repeat: no-repeat;height:800px ;background-attachment:fixed">
	<center>
		<h><u><b>FORM FOR THE PATIENTS</b></u></h>
	</center>
	<p>Already filled the form?</p>
	<form name="open" action="open.php" method="POST">
		<input type="submit" name="submit" value="Yes">
	</form> 
	<form name="medicine" action="" method="POST">
		<center><img src="bbb.jpg"></center>
		<br/>
		<center>
			Name:<input type="text" name="patientname" value="   ">
			<br/>
			<br/>
  <div>
    <label for="bday">Enter your birthday:</label>
    <input type="date" id="bday" name="bday" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
    <span class="validity"></span>
  </div>
  <div>
    </div>
<br>
<br>
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
	
    	Gender: <input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
	
	<br>
	<br>
	Address:<textarea name="address" rows="3" cols="20">
</textarea>
<br>
<p>Allergies due to</p>
<input type="checkbox" name="health[]" value="tablets">tablets<br>
<input type="checkbox" name="health[]" value="injections">injections<br>
<input type="checkbox" name="health[]" value="food">food<br>
<input type="checkbox" name="health[]" value="water">water<br>
<input type="checkbox" name="health[]" value="dust">dust<br>
<br>
<br>
Diseases:<input type="radio" name="Diseases" value="Spinal cord disability">Spinal cord disability
<br>
<input type="radio" name="Diseases" value="Vision impairments">Vision impairments
<br>
<input type="radio" name="Diseases" value="Psychological disorders">Psychological disorders
<br>
<br>
Phone number:<input type="text" name="phno" value="   "><br><br><br>
Major trouble:<input type="text" name="major" value="   "><br><br><br>
No.of.days suffering:<input type="text" name="days" value="   "><br><br><br>
<br><br>
<input type="checkbox" name="check" required>Ensure all the fields are read well and filled<br><br>
<input type="submit" name="submit" value="Submit">
</center></form>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['patientname'];
	$dob=$_POST['bday'];
	$blood=$_POST['bloodgroup'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$allergies=implode(",",$_POST['health']);
	$diseases=$_POST['Diseases'];
	
	$number=$_POST['phno'];
	$trouble=$_POST['major'];
	$days=$_POST['days'];
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
       $sql="INSERT INTO info(Name,Birthday,Bloodgroup,Gender,Address,Allergies,Diseases,Phno,Trouble,Days) VALUES ('$name', '$dob', '$blood', '$gender', '$address','$allergies' ,'$diseases','$number','$trouble','$days')";
        if($conn->query($sql)===TRUE)
      { 
      	echo "New record created successfully";
      	
      }
      else
      {
      	echo "Error!!".$sql."<br>".$conn->error;
      }
      $conn->close();
      echo ".<br>";
      echo ".<br>";
      echo ".<br>";
      echo ".<br>";
     
 }
    ?>






</body></html>





										

									
										

                                          
                                           
										
										
