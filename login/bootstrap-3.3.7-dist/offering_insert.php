

<?php


if(isset($_POST["Add"]))

{   
	include_once("config.php");
	
    $code = $_POST['module_code'];
	$year = $_POST['year'];
    $coor= $_POST['coordinator'];
    $lect = $_POST['lecture'];
	$inst = $_POST['instructor'];

	

    $mysql="INSERT INTO `offering` (`module_code`,`year`,`coordinator`,`lecture`,`instructor`) 
	VALUES ('$code', '$year', '$coor', '$lect', '$inst');";
	
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

<fieldset><legend>Add new offering</legend>	

<label for ="module_code">module_code:</label>  <input type="text"name="module_code"><br>
<label for ="module_name">year: </label>        <input type="text"name="year"> <br>
<label for ="semester">coordinator:</label>  <input type="text" name="coordinator"><br>
<label for ="department">lecture:</label>      <input type="text" name="lecture" ><br>
<label for ="department">instructor:</label>   <input type="text" name="instructor" ><br>
 <input type="submit" name="Add" value="Add">        <input type="button" name="cancel" value="cancel" onClick="window.location='offering_table.php';" />
        
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>