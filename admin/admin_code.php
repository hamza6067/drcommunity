<?php
session_start();
$flg=$_REQUEST['flg'];
//echo $flg;
include("admin_connection.php");
switch($flg)
{
case 1:
$username=$_POST['username'];
//echo $username;
$password=$_POST['pass'];	
//echo $password;
$query="select * from tbl_admin where username='$username' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_assoc($res))
{
$_SESSION['user']=$username;
header("Location:admin_profile.php");
}
else
{	
header("Location:index.php?msg=1");	
}
break;
case 2:
unset($_SESSION['user']);
header("Location:index.php?msg=2");
break;
case 3:
	$op=$_POST['op'];	
	$np=$_POST['np'];	
	$cp=$_POST['cp'];
$query="select password from tbl_admin";
$res=mysql_query($query);
	if($row=mysql_fetch_assoc($res))
	{
	    if($row['password'] ==$op)
	   {
	     if($op==$np)
	     {
	     header("location:admin_change.php?msg=2");
	     }
		 else
		 {
			if($np==$cp)
			{
			$query="update tbl_admin set password='$np'";
			mysql_query($query);
			}
			else
			{
				header("Location:admin_change.php?msg=3");
			}
		 }
	   }
	else
	{
header("Location:admin_change.php?msg=1");
	}
	}


break;
case 4:
$id=$_REQUEST['id'];
echo $id;
$query="delete from tbl_doctor where id='$id'";
mysql_query($query);
header("Location:viewdoctor.php");
break;

case 5:
$id=$_REQUEST['id'];
echo $id;
$query="delete from tbl_patient where id='$id'";
mysql_query($query);
header("Location:viewpatient.php");
break;

case 6:
$ques_id=$_REQUEST['id'];
echo $id;
$query="delete from question where ques_id='$ques_id'";
mysql_query($query);
header("Location:discuss.php");
break;

case 7:
$msg_id=$_REQUEST['id'];
echo $id;
$query="delete from tbl_message where msg_id='$msg_id'";
mysql_query($query);
header("Location:viewmsg.php");
break;

}

?>