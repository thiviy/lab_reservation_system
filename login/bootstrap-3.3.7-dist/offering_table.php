
	
	<?php

include_once("config.php");
echo "<br>";
$sql="SELECT * FROM `offering`";

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>module_code</th>
			  <th>year</th>
			  <th>coordinator</th>
			  <th>lecture</th>
			   <th>instructor</th>
			   <th>Action</th>
			  </tr> ";

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["id"];
      
        echo "<tr>";
     
        echo "<td>" .$row["module_code"]."</td>";
		echo "<td>" .$row["year"]."</td>";
		echo "<td>" .$row["coordinator"]."</td>";
		echo "<td>" .$row["lecture"]."</td>";
		echo "<td>" .$row["instructor"]."</td>";
        echo"<td> <a href='offering_update.php?id=$id'>Edit</a> <a href='offering_delete.php?id=$id'onclick='return confirm(\"Are you sure want to delete?\")'> delete</a></td>";
        
       
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
<body><p><a href="offering_insert.php"class='btn btn-primary'>Add new offering</a></p></body></html>
 
