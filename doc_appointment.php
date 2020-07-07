<?php
include("connection.php");

$query="select * from tbl_appoinment order by app_id";
$res=mysqli_query($a,$query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>app_id</th>
<th>pat_id</th>
<th>pat_name</th>
<th>date_time</th>
<th>Status</th>
</tr>
<?php
$a=1;
    if($res){
while($row= mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['pat_id']; ?></td>
<td><?php echo $row['pat_name']; ?></td>
<td><?php echo $row['date_time']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php
$a++;
}}
?>
</table>
</body>
</html>