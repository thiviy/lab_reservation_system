
<?php

include_once("config.php");

if(isset($_GET["user_id"]))
{  
$id=$_GET["user_id"];
	
$Username=$email=$position=$phone=null;
$mysql= "SELECT * FROM users where user_id='$id'";
$result=mysqli_query($con,$mysql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
			
           $Username = $row["uname"];
           $email= $row["email"];
			$position=$row["position"];
			$phone=$row["phone"];
			
		
        }
		
		
    }
    
    else
        {
            echo "0 result".$mysql.mysqli_error($con);
        }
}

if(isset($_POST["update"])){
     
    $Username = $_POST['uname'];
/*	$Password = $_POST['Pass'];*/
    $email= $_POST['email'];
    $position = $_POST['position'];
	$phone = $_POST['phone'];
   
    
include_once("config.php");
    
$mysql="UPDATE `users` SET `uname` = '$Username',`email` = '$email',`position` = '$position',`phone` = '$phone'  WHERE `users`.`user_id`='$id'";

	/*echo "$mysql";*/

if(mysqli_query($con,$mysql)){
    echo "table value update successfully";
}
else{
    echo "error update value:".$mysql.mysqli_error($con);
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
	 <link rel="stylesheet" type="text/css"></head>

<body>
	
<form method="post" action="#">
	
		<pre>

<fieldset><legend>update</legend>	

<label for ="Username"> Username :</label>            <input type="text"name="uname" value='<?php echo "$Username"?>'><br>
<!--<label for ="Password"> Password:</label>             <input type="Password"name="Pass"> <br>-->
<label for ="email">    email : </label>              <input type="email" name="email"value='<?php echo "$email"?>'><br>
<label for ="position"> position :</label>            <input type="text" name="position"value='<?php echo "$position"?>'><br>
<label for ="phone">     phone:</label>               <input type="number" name="phone" value='<?php echo "$phone"?>'><br>
 <input type="submit" name="update" value="update">        <input type="button" name="cancel" value="cancel" onClick="window.location='user_table.php';" />
        
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>