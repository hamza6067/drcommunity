<?php
include("admin_connection.php");

$query="select * from question order by id";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>ques_id</th>
<th>question</th>
<th>id</th>
<th>date_time</th>
<th>Delete</th>
</tr>
<?php
$a=1;
while($row= mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['question']; ?></td>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['date_time']; ?></td>
<td><a href="admin_code.php?flg=6&id=<?php echo $row['ques_id'];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>