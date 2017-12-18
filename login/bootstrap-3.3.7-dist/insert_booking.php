
<?php


if(isset($_POST["create"]))

{   
	include_once("config.php");
	
    $resource = $_POST['resource'];
    $begin = $_POST['begin'];
    $end = $_POST["end"];
    $student= $_POST['no_of_students'];
	$subject =$_POST['subject'];
    $year = $_POST['year'];
	$module = $_POST['module'];
	

    $mysql="INSERT INTO `reservation` (`resource`, `begin`, `end`, `no_of_students`, `subject`, `year`, `module`) 
	VALUES ('$resource', '$begin', '$end', '$student', '$subject', '$year', '$module');";
	
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


<html>
<head>
    <link rel="stylesheet" type="text/css">

</head>
<body >
<form action="#" method="post">
				<pre>
				     


<fieldset><legend>new reservation</legend>	

<label for ="resource">Resource :</label>           <input type="text"name="resource"><br><br>
<label for ="begin"> begin:</label>              <input type="datetime-local"name="begin"> <label for ="resource">end :</label><input type="datetime-local"name="end"> <br>
<label for ="resource">no of students : </label>    <input type="number" name="no_of_students"><br>
<label for ="resource">subject :</label>            <input type="text" name="subject" ><br>
<label for ="resource">year:</label>                 <input type="number" name="year" ><br>
<label for ="resource">module :</label>              <input type="text" name="module" ><br>
 <input type="submit" name="create"  value="create"> <input type="submit" value="cancel">
          
        
             
     </fieldset>   
   </pre>
        </form>
</body>
</html>
