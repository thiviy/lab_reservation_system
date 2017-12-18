


<?php

include_once("config.php");

if(isset($_GET["id"]))
{  
$id=$_GET["id"];
	
 $id=$resource=$begin=$end=$student=$subject=$year=$module=null;
$mysql= "SELECT * FROM reservation where id='$id'";
$result=mysqli_query($con,$mysql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
			
            $resource = $row["resource"];
            $begin =$row["begin"];
            $end= $row["end"];
			$student=$row["no_of_students"];
			$subject=$row["subject"];
			$year=$row["year"];
			$module=$row["module"];
			
            
        }
		
		
    }
    
    else
        {
            echo "0 result".$mysql.mysqli_error($con);
        }
}

if(isset($_POST["update"])){
     
    $resource = $_POST['resource'];
    $begin = $_POST['begin'];
    $end = $_POST["end"];
    $student= $_POST['no_of_students'];
	$subject =$_POST['subject'];
    $year = $_POST['year'];
	$module = $_POST['module'];
   
    
include_once("config.php");
    
$mysql="UPDATE `reservation` SET `resource` = '$resource',`begin` = '$begin',`end` = '$end',`no_of_students` = '$student',`subject` = '$subject',`year` = '$year',`module` = '$module' WHERE `reservation`.`resource`='$resource'";


if(mysqli_query($con,$mysql)){
    echo "table value update successfully";
}
else{
    echo "error update value:".$mysql.mysqli_error($con);
}
}
?>

<html>
<head>
    <link rel="stylesheet" type="text/css">

</head>
<body >
<form action="#" method="post">
				<pre>
				     


<fieldset><legend> update reservation</legend>	

<label for ="resource">Resource :</label>           <input type="text"name="resource"><br><br>
<label for ="begin"> begin:</label>              <input type="datetime-local"name="begin"> <label for ="resource">end :</label><input type="datetime-local"name="end"> <br>
<label for ="resource">no of students : </label>    <input type="number" name="no_of_students"><br>
<label for ="resource">subject :</label>            <input type="text" name="subject" ><br>
<label for ="resource">year:</label>                 <input type="number" name="year" ><br>
<label for ="resource">module :</label>              <input type="text" name="module" ><br>
 <input type="submit" name="update"  value="update"> <input type="submit" value="cancel">
          
        
             
     </fieldset>   
   </pre>
        </form>
</body>
</html>

