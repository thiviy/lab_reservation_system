
	
	<?php

include_once("config.php");
echo "<br>";
$sql="SELECT * FROM `users`";

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>Username</th>
			
			  <th>email</th>
			  <th>position</th>
			  <th>phone</th>
			  <th>Action</th>
			  </tr> ";

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["user_id"];
      
        echo "<tr>";
     
        echo "<td>" .$row["uname"]."</td>";
		echo "<td>" .$row["email"]."</td>";
		echo "<td>" .$row["position"]."</td>";
		echo "<td>" .$row["phone"]."</td>";
        echo"<td> <a href='user_update.php?user_id=$id'>Edit</a> <a href='user_delete.php?user_id=$id'onclick='return confirm(\"Are you sure want to delete?\")'> delete</a></td>";
        
       
        echo "</tr>";
    }
}
else{
    echo"0 result";
    
}
echo "</table>";
?>

   <html>
<head>
	<title></title></head>
	   <p></p>
<body><p><a href="user%20insert.php"class='btn btn-primary'>Add new user</a></p></body></html>

 
