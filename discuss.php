<?php
include("connection.php");
$query="select * from question";
$res=mysqli_query($a,$query);
?>
<html>
<head>
</head>
<body>
<form action="ques.php" method="post">
Ask Something
<textarea name="ques">
</textarea><br/>
<input type="submit" value="Add"/>
</form>
<table border="1" align="center">
<tr>
<th>S No.</th>
<th>Question</th>
<th>Post</th>
<th>View</th>
</tr>
<?php
    if($res){
while($row=mysqli_fetch_assoc($res))
{
?>
<tr>
<td><?php echo $row['ques_id']; ?></td>
<td><?php echo $row['question']; ?></td>
<td><a href="post.php?id=<?php echo $row['ques_id'];?>">post</a></td>
<td><a href="view.php?id=<?php echo $row['ques_id'];?>">view</a></td>
</tr>
<?php
}}
?>
</tr>
</table>
</body>
</html>