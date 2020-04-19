<?php
$a=$_POST['name'];
$b=$_POST['fathername'];
$c=$_POST['mothername'];
$d=$_POST['mob'];
$e=$_POST['qualification'];
$f=$_POST['marks'];
$g=$_POST['scholar'];
$k=$_POST['suffer'];
$check_msg = implode(", ",$_POST['area']);
$h=mysqli_connect('localhost','id9125486_root','project@19','id9125486_physically_challenged');
mysqli_select_db($h,"id9125486_physically_challenged");
$i="INSERT INTO pwd(name,father,mother,mobile,qua,marks,sch,suffer,disability) VALUES ('$a','$b','$c','$d','$e','$f','$g','$k','$check_msg')";
if($h->query($i) === TRUE)
 echo"record created";
  

 
 else
    echo"not created";
?>