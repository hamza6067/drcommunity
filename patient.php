<?php

?>
<html>
<head>
<style>
#outer
{
height:500px;
width:500px;
border:1px solid;
background-color:rgba(223 226 219 0.8);
//background-color:lightgrey;
margin:0px auto;
box-shadow:2px 2px 25px black inset;
}
body
{
background-image:url(images/banner3.jpg);
}
</style>
</head>
<body>
<?php
include("home2.php");
?>
<br/><br/>
<div id="outer">
<center><br/><br/>
<span style="font-size:25px;color:#B71427;text-decoration:underline">PATIENT FORM</span><br/><br/>
<table>
<form action="code.php?flg=2" method="POST">
<tr>
<td>Name</td>
<td><input type="text" name="name"/></td></tr>
<tr>
<td>fname</td>
<td><input type="text" name="fname"/></td></tr>
<tr>
<td>gender</td>
<td><input type="radio" name="a" value="male"/>Male
<input type="radio" name="a" value="female"/>Female</td></tr>
<tr>
<td>dob</td>
<td><input type="date" name="dob"/></td></tr>
<tr>
<td>age</td>
<td><input type="number" name="age"/></td></tr>
<tr>
<td>mobile</td>
<td><input type="number" name="mobile"/></td></tr>
<tr>
<td>address</td>
<td><input type="text" name="address"/></td></tr>
<tr>
<td>email</td>
<td><input type="email" name="email"/></td></tr>
<tr>
<td>password</td>
<td><input type="password" name="pass"/></td></tr>
<tr>
<td>status</td>
<td><select name="status"><option>---</option>
<option>yes</option>
<option>no</option>
</tr>
<td><input type="submit" value="register"/></td></tr>
</form>
</table>
</center>
</div>
</body>
</html>