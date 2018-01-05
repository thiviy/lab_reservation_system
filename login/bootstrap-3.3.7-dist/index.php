<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>login</title>
	 <link rel="stylesheet" type="text/css"href="style.css"></head>

<body>
	<center>
     <div class="he">
        <h2>Login</h2>
        </div>
<form method="post" action="login.php">
	
   <div class="input-group">
        <label>Username</label><input type="text" name="uname">
        </div><br>
	
   <div class="input-group">
        <label>Password</label><input type="password" name="pass">
			</div><br>
	<!--<div class="input-group">
        <label>email</label><input type="email" name="email">
			</div><br>
	<div class="input-group">
        <label>position</label><input type="text" name="position">
			</div><br>
<div class="input-group">
        <label>phone</label><input type="number" name="phone">-->
			<br>
	
    <div class="input-group">
	<button type="submit" name="register" class="btn" value="Login"><h3>Login</h3></button>
	<button type="reset" name="cancel"  class ="btn" value="clear"/><h3>cancel</h3>
	<button type="reset" name="cancel"  class ="btn" value="clear"/><h3></h3></div></form></center>
	
</body>
</html>

<?php
session_destroy();
/*session_start();
if(session_destroy())
{
header("Location: index.php");
}*/
?>