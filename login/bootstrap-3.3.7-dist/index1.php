
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="css/datatables.bootstrap.min.css" rel="stylesheet">
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  
	   </head>
  <body>
    
	  <p><br/></p>
	  	<div class="container">
	  <p><a href="http/localhost/insert"class='btn btn-primary'>Add new</a></p>
	  <h1>Data table</h1>
	  <table class="table table-striped table-bordered table-hover" id="mydata">
		  <thead><tr>
			  <th>id</th>
			  <th>resource </th>
			  <th>begin</th>
			  <th>end</th>
			  <th>no of students</th>
			  <th>subject</th>
			  <th>year</th>
			  <th>module</th>
			  </tr> 
		  </thead>
		  <tfoot>
			  <tr>
			  <th>id</th>
			  <th>resource </th>
			  <th>begin</th>
			  <th>end</th>
			  <th>no of students</th>
			  <th>subject</th>
			  <th>year</th>
			  <th>module</th>
			  </tr> 
		  </tfoot>
		  <tbody>
			  <?php
	
			  $mysqli=new mysqli("localhost","root","","database");
			  if(mysqli_connect_errno){
				  echo"failed connect(".$mysqli_connect_errno.")".$mysqli_connect_error;
			
			  }
			  $query=$mysqli_query("select id,resource,begin,end,no of students,subject,year,module from reservation");
			  while($row=$query_fetch_assoc(){
				  ?>
			  <tr>
				  <td><?php echo $row['id']?></td>
				  <td><?php echo $row['resource']?></td>
			      <td><?php echo $row['begin']?></td>
				  <td><?php echo $row['end']?></td>
				  <td><?php echo $row['no of students']?></td>
				  <td><?php echo $row['subject']?></td>
				  <td><?php echo $row['year']?></td>
				  <td><?php echo $row['module']?></td>
				
<td>
	<a href="http://localhost/update/?idx=<?php echo $row['id']?>" class="btn btn-warning">edit</a>
	<td><a onclick="return confirm('are you sure?')" href="?idd=<?php echo $row['id'] ?>" class="btn btn-danger">edit</a>
				  </td>
			  </tr>
			  <?php
			  }
			  if(isset($_GET['idd'])){
				  $idd=$_GET['idd'];
				  $result=$mysqli_query("delete from reservation where id='$idd'");
				  if($result){
					  header("location:index1.php");
				  }else{
					  ?>
			  <script>
				  alert("fail to delete data");
				  window.location.href='index1.php';
			  </script>
			  <?php
				  }
			  }
					
			  
			  ?>
			   
		  </tbody>
	  </table></div>
	  
	  <script src="js/jquery.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.dataTables.min.js"></script>
	  <script src="js/dataTables.bootstrap.min.js"></script>
	  <script>
		  $('#mydata').dataTable();
	  </script>
  </body>
</html>


