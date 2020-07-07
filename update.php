<?php
session_start();
$email=$_SESSION['patient'];
//echo $email;
include("connection.php");
$query="select * from tbl_patient where email='$email'";
$res=mysqli_query($a,$query);
?>
<form action="code.php?flg=8" method="POSt">
<?php
if($row=mysqli_fetch_array($res))
{
	?>
name: <input type="text" name="name" value="<?php echo $row['name'];?>"/ ><br/><br/>
fname: <input type="text" name="fname" value="<?php echo $row['fname'];?>"/ ><br/><br/>
mobile: <input type="number" name="mobile" value="<?php echo $row['mobile'];?>"/ ><br/><br/>
gender :<input type="radio" name="gender" value="male"
<?php if($row['gender']=='male')
{
	echo "checked";
}
?>
/> Male
<input type="radio" name="gender" value="female"
<?php if($row['gender']=='female')
{	
echo "checked";
 }
?>/> Female <br/><br/>
dob<input type="number" name="dob" value="<?php echo $row['dob'];?>"/>
<input type="submit" value="update">
<?php
}
?>
</form>

