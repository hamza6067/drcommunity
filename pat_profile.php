<?php

?>
<html>
<head>
<style>
#outer
{
height:700px;
width:800px;
border:1px solid;
}
#header
{
height:100px;
width:800px;
float:left;
background-color:#67BCDB;
}
#header ul
{
list-style-type:none;
}
#header ul li
{
list-style:none;
//border: 1px solid;
display:inline;
padding:10px;
}
#header ul li a
{
color:black;
text-decoration:none;
font-weight:bold;
font-size:20px;
}
#main
{
height:600px;
width:800px;
border:1px;
}
#lside
{
height:600px;
width:200px;
float:left;
}
#upper
{
height:200px;
width:200px;
background-color:white;
}
#down
{
height:400px;
width:200px;
background-color:#C1E1A6;
}
#rside
{
height:600px;
width:600px;
background:pink;
float:right;
}
#a
{
height:200px;
width:600px;
}
#a1
{
height:150px;
width:250px;
margin-left:20px;
margin-top:20px;
background:white;
float:left;
}
#a2
{
height:150px;
width:250px;
margin-left:10px;
margin-right:20px;
margin-top:20px;
background:white;
float:right;
}
#b
{
height:200px;
width:600px;
}
#b1
{
height:150px;
width:250px;
margin-left:20px;
margin-top:20px;
background:white;
float:left;
}
#b2
{
height:150px;
width:250px;
margin-left:10px;
margin-right:20px;
margin-top:20px;
background:white;
float:right;
}
#c
{
height:200px;
width:600px;
}
#c1
{
height:150px;
width:250px;
margin-left:20px;
margin-top:20px;
background:white;
float:left;
}
#c2
{
height:150px;
width:250px;
margin-left:10px;
margin-right:20px;
margin-top:20px;
background:white;
float:right;
}
</style>
</head>
<body>
<center>
<div id="outer">
	<div id="header">
	<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT US</a></li>
<li><a href="registration.php">REGISTER</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="contact.php">CONTACT US</a></li>
</ul>
	</div>
	<div id="main">
		<div id="lside">
			<div id="upper"></div>
			<div id="down"><br/>
			<a href="change.php">change password</a><br/>
			<a href="code.php?flg=5">logout</a>
			</div>
		</div>
		<div id="rside">
			<div id="a">
				<div id="a1">
				<a href="appointment.php">Book Appointment</a>
				</div>
				<div id="a2">
				<a href="book.php">View my Appointment</a>
				</div>
			</div>
			<div id="b">
				<div id="b1">
				<a href="update.php">Update Profile</a>
				</div>
				<div id="b2">
				<a href="cancelappointment.php">Cancel Appointment</a>
				</div>
			</div>
			<div id="c">
				<div id="c1">
				<a href="discuss.php">Discussion</a>
				</div>
				<div id="c2"></div>
			</div>
		</div>
	</div>
</div>
</center>
</body>
</html>