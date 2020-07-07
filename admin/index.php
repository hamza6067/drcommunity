<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
echo "Invalid username or password";	
}
if($msg==2)
{
echo "Logout successfully";	
}
if($msg==3)
{
echo "please login first";	
}

?>
<html>
<head>
</head>
<body>
<br/>
<a href="../index.php">Go to home page</a>
<h3>Login Page</h3>
<form action="admin_code.php?flg=1" method="POST">
Email<input type="text" name="username"/>
<br/>
Password<input type="password" name="pass"/>
<br/>
<input type="submit" value="login"/>
</form>
</body>
</html>