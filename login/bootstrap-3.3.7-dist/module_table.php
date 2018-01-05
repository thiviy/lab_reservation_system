
	
	<?php

include_once("config.php");
echo "<br>";
$sql="SELECT * FROM `module`";

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>module_code</th>
			  <th>module_name</th>
			  <th>semester</th>
			  <th>department</th>
			   <th>Action</th>
			  </tr> ";

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $code=$row["module_code"];
      
        echo "<tr>";
     
        echo "<td>" .$row["module_code"]."</td>";
		echo "<td>" .$row["module_name"]."</td>";
		echo "<td>" .$row["semester"]."</td>";
		echo "<td>" .$row["department"]."</td>";
        echo"<td> <a href='module_update.php?module_code=$code'>Edit</a> <a href='module_delete.php?module_code=$code'onclick='return confirm(\"Are you sure want to delete?\")'> delete</a></td>";
        
       
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
<body><p><a href="module_insert.php"class='btn btn-primary'>Add new module</a></p></body></html>
 
