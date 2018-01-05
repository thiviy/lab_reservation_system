

<?php


if(isset($_POST["Add"]))

{   
	include_once("config.php");
	
    $name = $_POST['Name_of_Article'];
	$Access = $_POST['Accessories'];
    $Des= $_POST['Description'];
    $Model = $_POST['Model'];
	$Location = $_POST['Location'];
	$quantity = $_POST['quantity'];
	

    $mysql="INSERT INTO `resource` (`Name_of_Article`,`Accessories`,`Description`,`Model`, `Location`,`quantity`) 
	VALUES ('$name', '$Access', '$Des', '$Model','$Location','$quantity');";
	
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

<fieldset><legend>Add new resouce</legend>	

<label for ="name_of_Article">name_of_Article:</label> <input type="text"name="Name_of_Article"><br>
<label for ="Accessories">Accessories:</label>     <input type="text"name="Accessories"> <br>
<label for ="Description">Description : </label>   <input type="text" name="Description"><br>
<label for ="Model">Model:</label>           <input type="text" name="Model" ><br>
<label for ="Location">Location:</label>        <input type="text" name="Location" ><br>
<label for ="quantity">quantity:</label>        <input type="number" name="quantity"><br>
 <input type="submit" name="Add" value="Add">        <input type="button" name="cancel" value="cancel" onClick="window.location='resource_table.php';" />
        
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>