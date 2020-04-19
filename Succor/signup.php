<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="sch form.jpg" style="background-repeat: no-repeat;background-size:1500px;">
	<center><font color="blacky">
	<font face="verdana" size="5">CREATE ACCOUNT</font><hr>
	<br><br>
		<form name="signup" action="insert.php" method="POST">
			Enter your First name:<input type="text" name="first_name"><br><br>
			Enter your Last name :<input type="text" name="last_name"><br><br>
			
			Gender :<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value ="Female">Female<br><br>
			Address :&nbsp;&nbsp;<textarea name="address" ></textarea><br><br>
			Select your district:<select name="district">
				<option value="Ariyalur">Ariyalur</option>
				<option value="Chennai">Chennai</option>
				<option value="Coimbatore">Coimbatore</option>
				<option value="Cuddalore">Cuddalore</option>
				<option value="Dharmapuri">Dharmapuri</option>
				<option value="Dindigul">Dindigul</option>
				<option value="Erode">Erode</option>
				<option value="Kancheepuram">Kancheepuram</option>
				<option value="Kanyakumari">Kanyakumari</option>
				<option value="Karur">Karur</option>
				<option value="Krishnagiri">Krishnagiri</option>
				<option value="Madurai">Madurai</option>
				<option value="Nagapattinam">Nagapattinam</option>
				<option value="Namakkal">Namakkal</option>
				<option value="Perambalur">Perambalur</option>
				<option value="Pudukottai">Pudukottai</option>
				<option value="Ramanathapuram">Ramanathapuram</option>
				<option value="Salem">Salem</option>
				<option value="Sivagangai">Sivagangai</option>
				<option value="Thanjavur">Thanjavur</option>
				<option value="Theni">Theni</option>
				<option value="Thiruvallur">Thiruvallur</option>
				<option value="Thiruvarur">Thiruvarur</option>
				<option value="Thiruchirapalli">Thiruchirapalli</option>
				<option value="Thiruvannamalai">Thiruvannamalai</option>
				<option value="Tirunelveli">Tirunelveli</option>
				<option value="Tiruppur">Tiruppur</option>
				<option value="Tuticorin">Tuticorin</option>
				<option value="Udagamandalam">Udagamandalam</option>
				<option value="Vellore">Vellore</option>
				<option value="Villupuram">Villupuram</option>
				<option value="Virudhunagar">Virudhunagar</option>
			</select><br><br>
		
			Enter your mobile number: <input type="number" name="mblno"><br><br>
			Enter your e-mail id : <input type="text" name="email"><br><br>
			Enter your username :<input type="text" name="username" required><br><br>
			Create a password :<input type="password" name="password" required><br><br>
			Re-enter your password : <input type="password" name="re-password" required><br><br><br><br>
		</center>
		<input type="checkbox" name="terms" required> Do check whether you have filled the required fields.[   select this to proceed further:)   ]<br><br>
		<center>
			<input type="submit" value="create account"></center>
		</form>
</font>
</body>
</html>