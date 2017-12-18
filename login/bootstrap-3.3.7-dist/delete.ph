<?php
include_once("config.php");

if(isset($_GET["Dep_Id"])){
    $Dep_Id=$_GET["Dep_Id"];
    
$sql ="DELETE FROM department WHERE Dep_Id=$Dep_Id";

if(mysqli_query($con,$sql)){
    echo "Record Deleted Successfully";
    
}
else{
    echo "Error Deleting Record:".
    mysqli_error($con);
} 
}
?>