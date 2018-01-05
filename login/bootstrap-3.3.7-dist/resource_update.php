
<?php

include_once("config.php");

if(isset($_GET["re_id"]))
{  
$id=$_GET["re_id"];
	
$name=$Access=$Des=$Model=$Location=$quantity=null;
$mysql= "SELECT * FROM resource where re_id='$id'";
$result=mysqli_query($con,$mysql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
			
           $name = $row["Name_of_Article"];
           $Access= $row["Accessories"];
		   $Des= $row["Description"];
		   $Model= $row["Model"];
		   $Location= $row["Location"];
		   $quantity= $row["quantity"];
			
		
        }
		
	
    }
    
    else
        {
            echo "0 result".$mysql.mysqli_error($con);
        }
}

if(isset($_POST["update"])){
     

    $name = $_POST['Name_of_Article'];
	$Access = $_POST['Accessories'];
    $Des= $_POST['Description'];
    $Model = $_POST['Model'];
	$Location = $_POST['Location'];
	$quantity = $_POST['quantity'];
    
include_once("config.php");
    
$mysql="UPDATE `resource` SET `Name_of_Article` = '$name',`Accessories` = '$Access',`Description` = '$Des',`Model` = '$Model',`Location`= '$Location',`quantity`= '$quantity'  WHERE `resource`.`re_id`='$id'";

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

<fieldset><legend>update resouce</legend>	

<label for ="name_of_Article">Name_of_Article:</label> <input type="text" name="Name_of_Article"value='<?php echo"$name"?>'><br>
<label for ="Accessories">Accessories:</label>     <input type="text"name="Accessories" value='<?php echo "$Access"?>'> <br>
<label for ="Description">Description : </label>   <input type="text" name="Description" value='<?php echo "$Des"?>'><br>
<label for ="Model">Model:</label>           <input type="text" name="Model" value='<?php echo "$Model"?>' ><br>
<label for ="Location">Location:</label>        <input type="text" name="Location" value='<?php echo "$Location"?>'><br>
<label for ="quantity">quantity:</label>        <input type="number" name="quantity" value='<?php echo "$quantity"?>'><br>
 <input type="submit" name="update" value="update">        <input type="button" name="cancel" value="cancel" onClick="window.location='resource_table.php';" />
        
     </fieldset>   
   </pre>
	
		
		</form>
</body>
</html>

