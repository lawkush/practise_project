<?php
	  include('CRUD_operationDB_connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Details:</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../crud_operation/public/assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<div class="container-x1">
		
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
                    	<div class="col-sm-5">
                        	<h2 style="text-align: center;">User <b>Management</b></h2>
                    	</div>
                       		<div class="col-sm-7" align="right">
                        		<a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                        
                    		</div>
                	</div>
				</div>
				<table class="table table-striped table hover">
					<thead>
						<tr>
							<th>Srno.</th>
							<th>Name</th>
							<th>Contact number</th>
							<th>Email</th>
							<th>Address</th>
                        	<th>Action</th>

						</tr>
					</thead>
					<tbody>
						<?php
							$res=mysqli_query($con,"select * from table_customer");
							//print_r($res);
							$cnt=1;
							$row=mysqli_num_rows($res);
							//print_r($row);
							if($row>0){
								while (	$row=mysqli_fetch_array($res)) {
									# code...
									?>

                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php  echo $row['first_name'];?> <?php  echo $row['last_name'];?></td>
                        <td><?php  echo $row['mobile'];?></td>                        
                        <td><?php  echo $row['emailid'];?></td>
                        <td> <?php  echo $row['address'];?></td>
                        <td>

  <a href="read.php? viewid=<?php echo ($row['cid']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons" naria-hidden="true">&#xE417;</i></a> 

        <a href="edit.php?editid=<?php echo htmlentities ($row['cid']);?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

          <a href="delete.php?editid=<?php echo htmlentities ($row['cid']);?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                      
                        </td>
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?> 
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	

</body>
</html>