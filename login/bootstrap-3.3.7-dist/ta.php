
	
	<?php
include_once("config.php");
echo "<br>";
$sql="SELECT * FROM `reservation`";

$result=mysqli_query($con,$sql);

echo "<table border=2>";
echo "<tr>
			  <th>reserv_id</th>
			  <th>resource </th>
			  <th>begin</th>
			  <th>end</th>
			  <th>no_of_students</th>
			  <th>subject</th>
			  <th>year</th>
			  <th>module_code</th>
			  <th>Action</th>
			  </tr> ";

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["reserv_id"];
      
        echo "<tr>";
        echo "<td>" .$row["reserv_id"]."</td>";
        echo "<td>" .$row["resource"]."</td>";
		echo "<td>" .$row["begin"]."</td>";
		echo "<td>" .$row["end"]."</td>";
		echo "<td>" .$row["no_of_students"]."</td>";
		echo "<td>" .$row["subject"]."</td>";
		echo "<td>" .$row["year"]."</td>";
		echo "<td>" .$row["module_code"]."</td>";
        echo"<td> <a href='update_boking.php?reserv_id=$id'>Edit</a><a href='delete.php?reserv_id=$id' onclick='return confirm(\"Are you sure want to delete?\")'> delete</a></td>";
        
       
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
<body><p><a href="insert_booking.php"class='btn btn-primary'>Add new Reservation</a></p></body></html>
 
