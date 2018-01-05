
	<?php
		
include_once("config.php");

$sql ="SELECT * from role INNER JOIN privilege ON role.role_id=privilege.prev_id "; 

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>role_id</th>
			  <th>role_name </th>
			  <th>prev_id</th>
			  <th>prev_des</th>
			   </tr> ";
if(mysqli_num_rows($result)>0){
	 while ($row = mysqli_fetch_array($result)) 
         {
      /*  $id=$row["user_id"];*/
		 echo "<tr>";
		 echo "<td>" .$row["role_id"]."</td>"; 
		 echo "<td>" .$row["role_name"]."</td>"; 
		 echo "<td>" .$row["prev_id"]."</td>"; 
		 echo "<td>" .$row["prev_des"]."</td>";

	
}


		
echo "</table>";
    
}

		


?>
	
	
