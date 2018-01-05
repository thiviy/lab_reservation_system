<?php

include_once("config.php");

if(isset($_GET["re_id"])){
    $id=$_GET["re_id"];
    
$sql ="DELETE FROM resource WHERE re_id='$id'";

if(mysqli_query($con,$sql)){
    echo "Record Deleted Successfully";
    
}
else{
    echo "Error Deleting Record:".
    mysqli_error($con);
} 
}
?>