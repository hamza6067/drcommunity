<?php
?>
<html>
<head>
</head>
<body>
<?php
include("home.php");
?>
<h1 style="color:red;">Contact Us</h1>
<form action="code.php?flg=6" method="post" style="margin-left:20px; font-size:20px;">
Enter your name : <input type="text" name="name" style="padding:10px 40px;"/><br/><br/>
Enter your mobile :<input type="number" name="number" style="padding:10px 40px;"/><br/><br/>
    
Enter your email : <input type="email" name="email" style="padding:10px 40px;"/><br/><br/>
    
Enter your Message : <textarea name="msg" style="padding:20px 60px;"/></textarea><br/><br/>
<input type="submit" value="Send"/>

</form>
</body>
</html>