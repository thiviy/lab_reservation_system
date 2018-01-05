<?php

include_once("config.php");

if(isset($_GET["module_code"])){
    $code=$_GET["module_code"];
    
$sql ="DELETE FROM module WHERE module_code='$code'";

if(mysqli_query($con,$sql)){
    echo "Record Deleted Successfully";
    
}
else{
    echo "Error Deleting Record:".
    mysqli_error($con);
} 
}
?>