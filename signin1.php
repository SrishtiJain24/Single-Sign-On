<!DOCTYPE html>
<html>
<head>
<title>Sign In_1</title>

</head>
<body background="pic.jpg">

<h1 style="color:white">Sign Up</h1>
<div align="right"><h2><a style="color:white" href="page.php">Home</a></h2></div>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<table>
<tr>
   <td valign="top" style="color:white">First Name</td>
   <td><input type="text" name="fname"></td>
</tr>
<tr>  
   <td valign="top" style="color:white">Last Name</td>
   <td><input type="text" name="lname"></td>
</tr>
<tr>   
   <td valign="top" style="color:white">E-mail</td>
   <td><input type="text" name="email"></td>
</tr>
<tr>   	
   <td valign="top" style="color:white">Password</td>
   <td><input type="password" name="password"></td>
</tr>
<tr>
  <td style="color:white" valign="top" style="color:white">Gender</td>
  <td><input type="radio" name="gender" value="male"> <div style="color:white">Male</div><br>
  <input type="radio" name="gender" value="female"><div style="color:white"> Female</div></td>
</tr>
<tr>   
   <td valign="top" style="color:white">Contact Number</td>
   <td><input type="text" pattern="[0-9]*" name="cno"></td>
</tr>
<tr>   
   <td valign="top" style="color:white">Age</td>
   <td><input type="number" min="5" max="100" name="age"></td>
</tr>

</table>
<input type="submit" name="submit" value="Submit"></td>
</form>
<?php
require_once('connection.php');
$host_name="localhost";
$user_name="root";
$pwd="";
$database="itas";
 $fname=$lname=$email=$password=$gender=$cno=$age="";
if (isset($_POST['submit'])) {
   $fname =$_POST["fname"];
   $lname =$_POST["lname"];
   $email =$_POST["email"];
   $password =$_POST["password"];
   $gender=$_POST["gender"];
   $cno=$_POST["cno"];
   $age=$_POST["age"]; 

	$conn=new mysqli($host_name,$user_name,$pwd,$database);
	if($conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO profile(fname, lname, email, password, gender, cont_num, age)VALUES('$fname', '$lname', '$email', '$password', '$gender', '$cno', '$age')";
  	if(empty($_POST["email"]))
	echo '<li style="color:white">',"E-mail ID required.";
	else {
	if($conn->query($sql)==TRUE)
	{
	echo '<li style="color:white">',"$fname your registration is successful."; 
	}
	else
	{
	echo '<li style="color:white">',"E-mail ID already exist.";
	$conn->close();
	}
	}
}
?>
</body>
</html>