<?php
include("admin_connection.php");

$query="select * from tbl_patient order by id";
$res=mysql_query($query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Fname</th>
<th>Gender</th>
<th>Dob</th>
<th>Age</th>
<th>Mobile</th>
<th>Address</th>
<th>Email</th>
<th>Password</th>
<th>Status</th>
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
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><a href="admin_code.php?flg=5&id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php
$a++;
}
?>
</table>
</body>
</html>