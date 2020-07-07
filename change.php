<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
echo "incorrect password";
}
if($msg==2)
{
echo "ur old password and new password is same";
}
if($msg==3)
{
echo "doesn't match try again";
}
?>
<html>
<head>
</head>
<body>
<form action="code.php?flg=4" method="post">
old password<input type="password" name="op" required/><br/>
new password <input type="password" name="np" required/><br/>
re-enter password<input type="password" name="cp" required/><br/>
<input type="submit" value="submit"/>
</form>
</body>
</html>