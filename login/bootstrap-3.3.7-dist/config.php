<?php
define('HOST','localhost');
define('USER_ID','root');
define('USER_PASS','');
define('DB_Name','database');

$con= mysqli_connect(HOST,USER_ID,USER_PASS,DB_Name);

if(mysqli_connect_errno())
{
   echo "connection error :".mysqli_connect_errno();
}
else
{
   /*echo "connection Successfully";*/
    
}

?>