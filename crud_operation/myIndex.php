<?php
	  include('CRUD_operationDB_connection.php');
	  if(isset($_GET['deleteid'])){
	  	$cid=intval($_GET['deleteid']);
	  	$sql=mysqli_query($con,"delete from table_customer where cid=$cid");
	  	echo"<script>alert('Data Deleted');</script>";
	  	echo"<script> window.location.href='myindex.php'</script>";

	  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Details:</title>
	<?php
		include('./public/header.php');
	?>
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

          <a href="myindex.php?deleteid=<?php echo htmlentities ($row['cid']);?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                      
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
<?php
	include('./public/footer.php');
?>
