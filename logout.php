<html>
<head><title>Log Out Successfull</title>
<body>
<?php
session_start();
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
session_destroy();
?>
<h1><p align="center"><a href='page.php'>Main Menu</a></p></h1>
</body>
</html>