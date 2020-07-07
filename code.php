<?php
session_start();
$flg=$_REQUEST['flg'];
//echo $flg;
include("connection.php");
switch($flg)
{
case 1:
{
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$dob=$_POST['dob'];
//echo $dob;
$age=$_POST['age'];
//echo $age;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$email=$_POST['email'];
//echo $email;
$password=$_POST['pass'];
//echo $password;
$degree=$_POST['degree'];
//echo $degree;
$speciality=$_POST['speciality'];
//echo $speciality;
$fees=$_POST['fees'];
//echo $fees;
$timing=$_POST['timing'];
//echo $timing;
$foreign_degree=$_POST['fdegree'];
//echo $foreign_degree;
$status=$_POST['status'];
//echo $status;
$query="insert into tbl_doctor(name,fname,gender,dob,age,mobile,address,email,password,degree,speciality,fees,
timing,foreign_degree,status) values ('$name','$fname','$gender','$dob','$age','$mobile','$address',
'$email','$password','$degree','$speciality','$fees','$timing','$foreign_degree','$status')";
mysqli_query($a,$query);
header("location:doc_profile.php");
}
break;
case 2:
{
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['a'];
//echo $gender;
$dob=$_POST['dob'];
//echo $dob;
$age=$_POST['age'];
//echo $age;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$email=$_POST['email'];
//echo $email;
$password=$_POST['pass'];
//echo $password;
$status=$_POST['status'];
//echo $status;
$query="insert into tbl_patient(name,fname,gender,dob,age,mobile,address,email,password,status) 
values ('$name','$fname','$gender','$dob','$age','$mobile','$address','$email','$password','$status')";
mysqli_query($a,$query);
header("location: pat_profile.php");
}
break;
case 3:
{
$who=$_POST['who'];
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];	
//echo $password;
//echo $who;
if($who=="doctor")
{
	$query="select * from tbl_doctor where email='$email' and password='$password'";

	$res=mysqli_query($a,$query);
	if($row=mysqli_fetch_array($res))
	{
	$_SESSION['doctor']=$email;
	$_SESSION['name']=$row['name'];
	header("Location:doc_profile.php");
	}
	else
	{
	header("Location:login.php?msg=1");
	}
	}
	else if($who=="patient")
{	
          $query="select * from tbl_patient where email='$email' and password='$password'";
           $res=mysqli_query($a,$query);
         if($row=mysqli_fetch_array($res))
         {	
	    $_SESSION['patient']=$email;
	    $_SESSION['pat_id']=$row['id'];
	     $_SESSION['name']=$row['name'];
        header("Location:pat_profile.php");
        }
}
else
{	
header("Location:login.php?msg=1");	
}
}
break;
	case 4:
	$op=$_POST['op'];	
	$np=$_POST['np'];	
	$cp=$_POST['cp'];	
	$email=$_SESSION['patient'];
	
$query="select password from tbl_patient where email='$email'";
$res=mysqli_query($a,$query);
	if($row=mysqli_fetch_assoc($res))
	{
	    if($row['password'] ==$op)
	   {
	     if($op==$np)
	     {
	     header("location:change.php?msg=2");
	     }
		 else
		 {
			if($np==$cp)
			{
			$query="update tbl_patient set password='$np' where email='$email'";
			mysqli_query($a,$query);
			}
			else
			{
				header("Location:change.php?msg=3");
			}
		 }
	   }
	else
	{
header("Location:change.php?msg=1");
	}
	}
	break;
case 5:
$who=$_REQUEST['who'];
if($who=="doctor")
{
	unset($_SESSION['doctor']);
}
else if($who=="patient")
{
  unset($_SESSION['patient']);	
}	
  header("Location:login.php?msg=2");
break;
case 6:
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
$number=$_POST['number'];
$msg=$_POST['msg'];
$query="insert into tbl_message(name,mobile,email,message) values('$name','$number','$email','$msg')";
mysqli_query($a,$query);
break;
case 7:
$app_id=$_REQUEST['id'];
$query="update into tbl_appoinment set status='c' where app_id='$app_id'";
break;
case 8:
$email=$_SESSION['email'];
//echo $email;
$name=$_POST['name'];
$fname=$_POST['fname'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
 $query="update tbl_patient set name='$name',fname='$fname',mobile='$mobile',gender='$gender',dob='$dob' where email='$email'";
mysqli_query($a,$query);
header("location:pat_profile.php");
break;
} 

?>