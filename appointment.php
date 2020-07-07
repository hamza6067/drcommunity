<?php
include("connection.php");

$query="select distinct(speciality) from tbl_doctor order by id";
$res=mysqli_query($a,$query);
?>
<html>
<head>
</head>
<body>
<form action="appointcode.php" method="post">
<select name="app">
<option>speciality</option>
<option>-----</option>
<?php
    if($res){
while($row= mysqli_fetch_array($res))
{
?>
<option><?php echo $row['speciality']; ?></option>
<?php
}}
?>
</select><br/>
<input type="submit" value="submit"/>
</form>
</body>
</html>