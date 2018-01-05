<?php
session_start();
if(!empty($_POST['uname']) || !empty($_POST['pass']))
{
	include_once("config.php");
	$username= $_POST['uname'];
	$password= md5($_POST['pass']);


$con=mysqli_connect("localhost","root","","database");
$result=mysqli_query($con,"SELECT*FROM`users`WHERE`uname`='$username'&&`pass`='$password'OR`email`='$username'&&`pass`='$password' ");
$count=mysqli_num_rows($result);

if($count == 1)
{
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo $row['position'];
	if($row['position']== 'student')
	{
            
	   header("Location:student.php");
	 }
	else if($row['position'] == 'lecturer' || $row['position'] == 'coordinator' || $row['position'] == 'instuctor')
{
		
   header("Location:lecturer.php");
}	

	else if($row['position'] == 'admin')
{
	header("Location:main.php");
}
else
	{
		echo 'hg';
	}

	
    /*echo "login success";*/
	
  
   /* header("location:main.php");*/
	
    
}
	
	
}
else
{
	$username= null;
	$password= null;
	echo "please fill proper details";
   // header("refresh:2;url=login.php");
}



?>