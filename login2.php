<!DOCTYPE html>
<html>
<head><title>Log In_2</title>
</head>
<body background="pic.jpg">
<h1 style="color:white">ITube</h1>
<?php
session_start();
//$var= $_SESSION['SESS_MEMBER_ID'];
if(!isset($_SESSION['SESS_MEMBER_ID'])){
	//echo $var;
?>
<form name="loginform2" action="login_exec2.php">
<table>
  <tr>
    <td colspan="2">
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li style="color:white">',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
	</td>
  </tr>
  <tr>
    <td width="116" style="color:white"><div align="right">E-mail ID</div></td>
    <td width="177"><input name="email" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right" style="color:white">Password</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
   
</table>
<input name="" type="submit" value="Log In" >
</form>
<?php
}
else
{
	echo "<h3 style='color:white'>You are already logged in!</h3>";
?>
<h2><a style="color:white" href="Userprofile2.php">Profile</a></h2>
<?php
}
?>
</body>
</html>