<?php
include("admin_connection.php");

$query="select * from tbl_message order by msg_id";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>msg_id</th>
<th>name</th>
<th>mobile</th>
<th>email</th>
<th>message</th>
<th>Delete</th>
</tr>
<?php
$a=1;
while($row= mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><a href="admin_code.php?flg=7&id=<?php echo $row['msg_id'];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>