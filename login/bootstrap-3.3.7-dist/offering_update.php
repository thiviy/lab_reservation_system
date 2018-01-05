
<?php

include_once("config.php");

if(isset($_GET["id"]))
{  
$id=$_GET["id"];
	
$code=$year=$coor=$lect=$inst=null;
$mysql= "SELECT * FROM offering where id='$id'";
$result=mysqli_query($con,$mysql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
			
           $code = $row["module_code"];
           $year= $row["year"];
			$coor=$row["coordinator"];
			$lect=$row["lecture"];
			$inst=$row["instructor"];
		
        }
		
		
    }
    
    else
        {
            echo "0 result".$mysql.mysqli_error($con);
        }
}

if(isset($_POST["update"])){
     
    $code = $_POST['module_code'];
	$year = $_POST['year'];
    $coor= $_POST['coordinator'];
    $lect = $_POST['lecture'];
	$inst = $_POST['instructor'];
   
    
include_once("config.php");
    
$mysql="UPDATE `offering` SET `module_code` = '$code',`year` = '$year',`coordinator` = '$coor',`lecture` = '$lect',`instructor` = '$inst'  WHERE `offering`.`id`='$id'";

	/*echo "$mysql";*/

if(mysqli_query($con,$mysql)){
    echo "table value update successfully";
}
else{
    echo "error update value:".$mysql.mysqli_error($con);
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
	 <link rel="stylesheet" type="text/css"></head>

<body>
	
<form method="post" action="#">
	
		<pre>

<fieldset><legend>update offering</legend>	

<label for ="module_code">module_code:</label>  <input type="text"name="module_code" value='<?php echo"$code"?>'><br>
<label for ="module_name">year: </label>        <input type="text"name="year" value='<?php echo"$year"?>'> <br>
<label for ="semester">coordinator:</label>  <input type="text" name="coordinator" value='<?php echo"$coor"?>'><br>
<label for ="department">lecture:</label>      <input type="text" name="lecture" value='<?php echo"$lect"?>'><br>
<label for ="department">instructor:</label>   <input type="text" name="instructor" value='<?php echo"$inst"?>'><br>
 <input type="submit" name="update" value="update">        <input type="button" name="cancel" value="cancel" onClick="window.location='offering_table.php';" />
        
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>