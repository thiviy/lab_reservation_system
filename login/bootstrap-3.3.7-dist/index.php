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
	

    <div class="input-group">
	<button type="submit" name="register" class="btn"><h3>Login </h3></button>
	<button type="reset" name="cancel" value="clear" class="btn"><h3>cancel </h3></button></div></form></center>
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