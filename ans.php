<?php
session_start();
$ans=$_POST['ans'];
//echo $ans;
$ques_id=$_POST['ques_id'];
$email=$_SESSION['doctor'];
include("connection.php");
$query="select * from tbl_doctor where email='$email'";
$res=mysqli_query(sa,$query);
if($row=mysql_fetch_assoc($res))
{
$user_id=$row['id'];
}
$query2="insert into answer(ques_id,id,answer,date_time) values('$ques_id','$user_id','$ans',now())";
mysqli_query($a,$query2);
header("location:discuss.php");
?>