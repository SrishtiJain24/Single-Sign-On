<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Your Profile_1</title>
</head>
<body background="pic.jpg">
<?php
if(isset($_SESSION['SESS_MEMBER_ID'])){
$host_name="localhost";
$user_name="root";
$pwd="";
$database="itas";
$conn=new mysqli($host_name,$user_name,$pwd,$database);
$id=$_SESSION['SESS_MEMBER_ID'];
$sql = "SELECT * FROM profile where mem_id='$id'";
$result=$conn->query($sql);
while($row3 = $result->fetch_assoc())
{ 
$fname=$row3["fname"];
$lname=$row3["lname"];
$email=$row3["email"];
$gender=$row3["gender"];
$contact=$row3["cont_num"];
$age=$row3["age"];
}
$conn->close();
?>
<h1 style="color:white">MyMail Profile Information</h1>
<div align="right"><h2><a style="color:white" href="logout.php">Log Out</a></h2></div>
<table>
  
  <tr>
    <td style="color:white" valign="top">First Name </td>
    <td style="color:white"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td style="color:white" valign="top">Last Name</td>
    <td style="color:white"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td style="color:white" valign="top">Email ID</td>
    <td style="color:white" valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td style="color:white" valign="top">Gender</td>
    <td style="color:white"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td style="color:white" valign="top">Contact No</td>
    <td style="color:white"><?php echo $contact ?></td>
  </tr>
  <tr>
    <td style="color:white" valign="top">Age</td>
    <td style="color:white"><?php echo $age ?></td>
  </tr>
</table>

<br>
<br>

<p align="center"><a href="login1.php"></a></p>

<?php
}
else
{
echo "<h3 style='color:white'>You need to be logged in to view your profile.</h3>";
}
?>
</body>
</html>