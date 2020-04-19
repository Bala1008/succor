<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	  $First_name=$_POST['first_name'];
    $Last_name=$_POST['last_name'];
    $Gender=$_POST['gender'];
    $Address=$_POST['address'];
    $District=$_POST['district'];
    $Mobile_number=$_POST['mblno'];
    $email=$_POST['email'];
    $Username=$_POST['username'];
    if($_POST['password']!=$_POST['re-password']){?>
      <script>
        <?php
    	echo "alert('incorrect password. please re-enter your password');";?></script>
      <?php
    }
    else
    { 
      $Password=$_POST['password'];
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
      $st = "SELECT * FROM user_info WHERE Username = '$Username'";
      $q = mysqli_query($conn, $st);
      $r = mysqli_num_rows($q);
       if($r){?>
      <script><?php
     
        echo"alert('username already taken..try again with a new username!!');";?></script>
        <?php 
      }
        else
        {
      $sql="INSERT INTO user_info(First_name, Last_name, Gender, Address, District, Mobile_number, email, Username, Password) VALUES ('$First_name', '$Last_name', '$Gender', '$Address', '$District', '$Mobile_number', '$email', '$Username', '$Password')";
     if($conn->query($sql)===TRUE) 
      {
      	echo "New record created successfully";?>
        <script> <?php echo "alert('Thank you for being a member of our website');";?></script>
        <script type="text/javascript">location.href = 'index.php';</script><?php
      }
      else
      {
      	echo "Error!!".$sql."<br>".$conn->error;
      }
      $conn->close();
    }
  }
    ?>

</body>
</html>