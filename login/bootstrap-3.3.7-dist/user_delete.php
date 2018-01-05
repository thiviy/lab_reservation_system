<?php

include_once("config.php");

if(isset($_GET["user_id"])){
    $id=$_GET["user_id"];
    
$sql ="DELETE FROM users WHERE user_id=$id";

if(mysqli_query($con,$sql)){
    echo "Record Deleted Successfully";
    
}
else{
    echo "Error Deleting Record:".
    mysqli_error($con);
} 
}
?>