<?php ob_start();?>
<DOCTYPE html>
<html>
<head>
<title> welcome page </title>
<meta charset="utf-8">
<meta name="viewport" >
</head>
<body background="login page.jpg" style="background-repeat: no-repeat;background-size: 1250px 650px;">
<center> <h2> welcome to SUCCOUR!!</h2><br><br><br>
<font size="5"> Disability need not be an obstacle to success.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4"><i>-Stephen Hawking.</i></font>
<br><br>
<h5> Login </h5>
<form name="login" action="" method="POST">
<b>USERNAME:</b><input type = "text" name="username" value=""required><br><br>
<b>PASSWORD:</b><input type="password" name="password" value="" required><br><br>
<input type="submit" name="submit" value="Login">
</form>
<?php
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
      if(isset($_POST['submit']))
      {   
      	$Username=$_POST['username'];
      	$Password=$_POST['password'];
      	$sql = "SELECT * FROM user_info WHERE Username ='$Username' AND Password='$Password'";
      	$a=$conn->query($sql);
     $check=mysqli_num_rows($a);
      	if($check==1)
      	{
      		header("Location:homepg.php");
      	}else
      	{?>
      		<script><?php
      		 echo "alert('Invalid usename or password!!');";?></script><?php
      	}
      }
?>
<p><font size="3"><a href="upd.php">Forget password?</a></font></p>
<font color="red">
New user &nbsp;&nbsp;</font><a href="signup.php">Sign up </a>
</center>
</body>
</html>
