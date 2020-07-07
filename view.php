<?php
$ques_id=$_REQUEST['id'];
//echo $ques_id;
include("connection.php");
$query="select * from answer where ques_id='$ques_id'";
$res=mysqli_query($a,$query);
if($res){
while($row=mysql_fetch_assoc($res))
{
	echo $row['answer'];
	
}
}
?>