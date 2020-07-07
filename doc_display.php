<?php
include("connection.php");
$query="select * from tbl_appoinment order by id";
$res=mysqli_query($a,$query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>id</th>
<th>name</th>
<th>fname</th>
<th>mobile</th>
<th>email</th>
<th>password</th>
<th>age</th>
<th>gender</th>
<th>dob</th>
<th>speciality</th>
<th>fees</th>
<th>timing</th>
<th>address</th>
<th>cancel</th>
</tr>
<?php
$a=1;
if($res){
while($row=mysqli_fetch_assoc($res))
{
?>
<tr>
<td><?php echo $a;?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['speciality'];?></td>
<td><?php echo $row['fees'];?></td>
<td><?php echo $row['timing'];?></td>
<td><?php echo $row['address'];?></td>
<td><a href="doc_cancelapp.php?doc_id=<?php echo $row['doc_id'];?>">cancel</a></td>
</tr>
<?php
$a++;
}}
?>
</table>
</body>
</html>