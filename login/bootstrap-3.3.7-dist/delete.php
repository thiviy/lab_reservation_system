<?php

include_once("config.php");

if(isset($_GET["reserv_id"])){
    $id=$_GET["reserv_id"];
    
$sql ="DELETE FROM reservation WHERE reserv_id=$id";

if(mysqli_query($con,$sql)){
    echo "Record Deleted Successfully";
    
}
else{
    echo "Error Deleting Record:".
    mysqli_error($con);
} 
}
?>