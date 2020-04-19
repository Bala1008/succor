<html>
<head><title>DELETE</title>
</head>
<body>
<?php
$mysqlport=getenv('S2G_MYSQL_PORT');
echo $mysqlport;
$dbhost="localhost:".$mysqlport;
$dbuser='id9125486_root';
$dbpass='project@19';
$connect=mysqli_connect("localhost",$dbuser,$dbpass); 

mysqli_select_db($connect,'id9125486_physically_challenged');

$query_select="select * from socjob";
$result=mysqli_query($connect,$query_select);
?>
<font color="purple" size="5"><b><p align="center">
USERS INFO</p></b></font>
<form name="display1" action="jobmainpage.php">
<input type="submit" name="HOME" value="HOME">
</form>

<table border="5">
<tr>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>ADDRESS</th>
	<th>DOB</th>
	<th>AGE</th>
	<th>GENDER</th>
	<th>QUALIFICATION</th>
	<th>PHONE</th>
	<th>ADHAR</th>
	<th>DISABILITY TYPE</th>
	<th>DISABILITY SINCE</th>
	<th>DISABILITY DUE TO</th>
	<th>FATHER NAME</th>
</tr>
<?php
$row=mysqli_fetch_array($result,MYSQLI_ASSOC)
?><tr>  
	<td><?php echo $row['Fname'];?></td>
	<td><?php echo $row['Lname'];?></td>
	<td><?php echo $row['Address'];?></td>
<td><?php echo $row['Dob'];?></td>
<td><?php echo $row['Age'];?></td>
<td><?php echo $row['Gender'];?></td>
<td><?php echo $row['Qualification'];?></td>
<td><?php echo $row['Phone'];?></td>
<td><?php echo $row['Adhar'];?></td>
<td><?php echo $row['Disabletype'];?></td>
	<td><?php echo $row['Dissince'];?></td>
		<td><?php echo $row['Disdueto'];?></td>
	<td><?php echo $row['Fathername'];?></td>
</tr>
<?php 
mysqli_close($connect); ?>
</table>
</body>
</html>
