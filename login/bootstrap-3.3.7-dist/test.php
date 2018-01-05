<?php
		
include_once("config.php");
if(isset($_GET["user_id"]))
{  
$id=$_GET["user_id"];

$sql =mysqli_query($con,"SELECT role.role_id,role.role_name,privilege.prev_id,privilege.prev_des
FROM role,privilege where role.role_id = privilege.prev_id"); 

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>role_id</th>
			  <th>role_name </th>
			  <th>prev_id</th>
			  <th>prev_des</th>
			   </tr> ";

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["user_id"];
		 echo "<tr>";
		 echo "<td>" .$row["role_id"]."</td>"; 
		 echo "<td>" .$row["role_name"]."</td>"; 
		 echo "<td>" .$row["prev_id"]."</td>"; 
		 echo "<td>" .$row["prev_des"]."</td>"; 
		
	           
        echo "</tr>";
    }
}

else{
    echo"0 result";
    
}
echo "</table>";
?>