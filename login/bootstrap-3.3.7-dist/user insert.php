

<?php

if(isset($_POST["Add"]))

{   
	include_once("config.php");
	
    $Username = $_POST['uname'];
	$Password = md5($_POST['Pass']);
    $email= $_POST['email'];
    $position = $_POST['position'];
	$phone = $_POST['phone'];
	

    $mysql="INSERT INTO `users` (`uname`,`Pass`,`email`,`position`, `phone`) 
	VALUES ('$Username', '$Password', '$email', '$position','$phone');";
	
        if(mysqli_query($con,$mysql))
            
        {
            echo'Insert Success';
        }
    
    else
    {
        echo 'please fill all field'.$mysql.mysqli_error($con);
    }
    
    
}     


	
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
	 <link rel="stylesheet" type="text/css">
	
	</head>

<body>
	
<form method="post" action="#">
	
		<pre>

<fieldset><legend>Add new user</legend>	

<label for ="Username"> Username :</label>            <input type="text"name="uname"><br>
<label for ="Password"> Password:</label>             <input type="Password"name="Pass"> <br>
<label for ="email">    email : </label>   
<input id="email" type="email" name="email"><br>
<label for ="position"> position :</label> 
<select id="position" name="position">
<option value="admin">Admin</option>
<option value="lecturer">Lecturer</option>
<option value="coordinator">coordinator</option>
<option value="instuctor">instuctor</option>
<option value="student">Student</option>
</select>
<label for ="phone">     phone:</label>               <input type="text" name="phone" maxlength="10"><br>
 <input type="submit" name="Add" value="Add">         <input type="button" name="cancel" value="cancel" onClick="window.location='user_table.php';" />
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>