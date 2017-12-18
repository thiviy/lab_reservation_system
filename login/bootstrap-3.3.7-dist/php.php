
<?php

$con = new mysqli("localhost","root","","");

if($con->connect_error)
{
   echo $con->connect_error;
   die("Database Connect Feiled");
}
else
{
   echo "Database Connected";

}
?>