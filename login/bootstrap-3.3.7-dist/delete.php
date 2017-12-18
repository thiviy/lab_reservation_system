<?php

include_once("config.php");

if(isset($_GET["id"])){
    $id=$_GET["id"];
    
$sql ="DELETE FROM reservation WHERE id=$id";

if(mysqli_query($con,$sql)){
    echo "Record Deleted Successfully";
    
}
else{
    echo "Error Deleting Record:".
    mysqli_error($con);
} 
}
?>