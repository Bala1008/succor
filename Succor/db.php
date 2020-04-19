<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>database</title>
</head>
<body>
	<?php
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

    ?>
    

</body>
</html>

      

     
     

