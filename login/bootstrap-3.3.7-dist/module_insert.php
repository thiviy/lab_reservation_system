

<?php


if(isset($_POST["Add"]))

{   
	include_once("config.php");
	
    $code = $_POST['module_code'];
	$name = $_POST['module_name'];
    $seme= $_POST['semester'];
    $dept = $_POST['department'];

	

    $mysql="INSERT INTO `module` (`module_code`,`module_name`,`semester`,`department`) 
	VALUES ('$code', '$name', '$seme', '$dept');";
	
        if(mysqli_query($con,$mysql))
            
        {
            echo'Insert Success';
        }
    
    else
    {
        echo 'please fill all field'.$mysql.mysqli_error($con);
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

<fieldset><legend>Add new module</legend>	

<label for ="module_code">module_code:</label>  <input type="text"name="module_code"><br>
<label for ="module_name">module_name:</label>  <input type="text"name="module_name"> <br>
<label for ="semester">semester : </label>   <input type="text" name="semester"><br>
<label for ="department">department:</label>   <input type="text" name="department" ><br>
 <input type="submit" name="Add" value="Add">        <input type="button" name="cancel" value="cancel" onClick="window.location='module_table.php';" />
        
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>