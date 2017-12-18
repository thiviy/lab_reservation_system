<?php
if(isset($_POST['uname']) && isset($_POST['pass']))
{
include_once("config.php");
$username=$_POST['uname'];
$password=$_POST['pass'];
}
/*session_start();*/

$con=mysqli_connect("localhost","root","","database");
$result=mysqli_query($con,"SELECT * FROM `users` WHERE `uname`='$username'&&`pass`='$password'");
$count=mysqli_num_rows($result);

if($count==1)
{
    echo "login success";
   /* $_SESSION['log']=1;*/
    header("location:thanu.php");
	
    
}

else
{
	$username= null;
	$password= null;
	echo "please fill proper details";
    header("refresh:2;url=index.php");
}






?>