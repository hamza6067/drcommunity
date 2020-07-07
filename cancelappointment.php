<?php
session_start();
$id=$_SESSION['pat_id'];
//echo $id;
include("connection.php");
$query="select * from tbl_appoinment where pat_id='$id'";
$res=mysqli_query($a,$query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>app_id</th>
<th>doc_id</th>
<th>doc_name</th>
<th>pat_id</th>
<th>pat_name</th>
<th>date_time</th>
<th>status</th>
<th>Cancel Appointment</th>
</tr>
<?php
$a=1;
    if($res){
while($row= mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['doc_id']; ?></td>
<td><?php echo $row['doc_name']; ?></td>
<td><?php echo $row['pat_id']; ?></td>
<td><?php echo $row['pat_name']; ?></td>
<td><?php echo $row['date_time']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><a href="code.php?flg=7&id=<?php $row['app_id']?>">Cancel Appointment</a></td>
</tr>
<?php
$a++;
}}
?>
</table>
</body>
</html>