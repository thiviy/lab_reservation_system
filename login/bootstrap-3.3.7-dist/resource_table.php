
	
	<?php

include_once("config.php");
echo "<br>";
$sql="SELECT * FROM `resource`";

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>Name_of_Article</th>
			
			  <th>Accessories</th>
			  <th>Description</th>
			  <th>Model</th>
			  <th>Location</th>
			   <th>quantity</th>
			   <th>Action</th>
			  </tr> ";

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["re_id"];
      
        echo "<tr>";
     
        echo "<td>" .$row["Name_of_Article"]."</td>";
		echo "<td>" .$row["Accessories"]."</td>";
		echo "<td>" .$row["Description"]."</td>";
		echo "<td>" .$row["Model"]."</td>";
		echo "<td>" .$row["Location"]."</td>";
		echo "<td>" .$row["quantity"]."</td>";
        echo"<td> <a href='resource_update.php?re_id=$id'>Edit</a> <a href='resource_delete.php?re_id=$id'onclick='return confirm(\"Are you sure want to delete?\")'> delete</a></td>";
        
       
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
<body><p><a href="resource_insert.php"class='btn btn-primary'>Add new resource</a></p></body></html>


 
