<?php
session_start();
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['doctor'];

include("connection.php");
$query="select * from tbl_doctor where email='$email'";
$res=mysqli_query($a,$query);
if($row=mysqli_fetch_assoc($res))
{
$user_id=$row['id'];
}
$query2="insert into question(question,id,date_time) values('$ques','$user_id',now())";
mysqli_query($a,$query2);

header("location:discuss.php");




?>