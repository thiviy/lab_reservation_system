
<?php

include_once("config.php");


if(isset($_GET["module_code"]))
{  
$code=$_GET["module_code"];
	
$name=$seme=$Dept=null;
$mysql= "SELECT * FROM module where module_code='$code'";
$result=mysqli_query($con,$mysql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
			
           $code = $row["module_code"];
           $name= $row["module_name"];
		   $seme= $row["semester"];
		   $dept= $row["department"];
		 
			
		
        }
		
	
    }
    
    else
        {
            echo "0 result".$mysql.mysqli_error($con);
        }
}

if(isset($_POST["update"])){
     

    $code = $_POST['module_code'];
	$name = $_POST['module_name'];
    $seme= $_POST['semester'];
    $dept = $_POST['department'];
	
    
include_once("config.php");
    
$mysql="UPDATE `module` SET `module_code` = '$code',`module_name` = '$name',`semester` = '$seme',`department` = '$dept'  WHERE `module`.`module_code`='$code'";

	echo "$mysql";

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

<fieldset><legend>update module</legend>	

<label for ="module_code">module_code:</label>  <input type="text"name="module_code" value='<?php echo "$code"?>'><br>
<label for ="module_name">module_name:</label>  <input type="text"name="module_name" value='<?php echo "$name"?>' > <br>
<label for ="semester">semester : </label>   <input type="text" name="semester" value='<?php echo "$seme"?>'><br>
<label for ="department">department:</label>   <input type="text" name="department" value='<?php echo "$dept"?>'><br>
 <input type="submit" name="update" value="update">       <input type="button" name="cancel" value="cancel" onClick="window.location='module_table.php';" />
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>

<?php
/*if ($_GET['submit'] == "cancel")
{
    header("Location:module_table.php");
}*/
?>