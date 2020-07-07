<?php
include("connection.php");
$app=$_POST['app'];
$query="select * from tbl_doctor where speciality='$app'";
$res=mysqli_query($a,$query);
?>
<html>
<head>
</head>
<body>
<table align="center" border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th>Degree</th>
<th>Speciality</th>
<th>Fees</th>
<th>Timing</th>
<th>Book Appointment</th>
</tr>
<?php
$a=1;
    if($res){
while($row= mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['degree']; ?></td>
<td><?php echo $row['speciality']; ?></td>
<td><?php echo $row['fees']; ?></td>
<td><?php echo $row['timing']; ?></td>
<td><a href="book.php">Book Appointment</a></td>
</tr>
<?php
$a++;
}}
?>
</table>
</body>
</html>