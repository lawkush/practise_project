<?php
    include('CRUD_operationDB_connection.php');
	if(isset($_POST['submit'])){
		$cid=$_GET['editid'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$query=mysqli_query($con,"update table_customer set first_name='$fname',last_name='$lname',mobile='$mobile',emailid='$email',address='$address' where cid='$cid'");
		if($query){
			echo "<script>alert('You have successfully update the data');</script>";
			echo"<script type='text/javascript'>document.location='myindex.php';</script>";
		}
		else{
			echo"<script>alert('something went wrong please try again');</script>";
		}
}
?>
<html>
	
<head>
		<title>PHP Crud Operation!!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php
		include('./public/header.php');
	?>
</head>
<body>
	<div class="signup-form">
		<form method="POST">
			<?php
				$cid=$_GET['editid'];
				$res=mysqli_query($con,"select * from table_customer where cid='$cid'");
				while ($row=mysqli_fetch_array($res)) {

				?>	
					<h2>Update</h2>
					<p class="hint-text">Update your info.</p>
					<div class="form-group">
					<div class="row">
					    <div class="col"><input type="text" class="form-control" name="fname" value="<?php  echo $row['first_name'];?>" required="true">
					    </div>

						<div class="col">
							<input type="text" class="form-control" name="lname" value="<?php  echo $row['last_name'];?>" required="true">
						</div>
					</div> 
				</div>
					<div class="form-group">
            			<input type="text" class="form-control" name="mobile" value="<?php  echo $row['mobile'];?>" required="true" maxlength="10" pattern="[0-9]+">
       				 </div>   
       				 <div class="form-group">
        				<input type="email" class="form-control" name="email" value="<?php  echo $row['emailid'];?>" required="true">
        			</div>  
        			<div class="form-group">
        				<textarea class="form-control" name="address" required="true"><?php echo $row['address'];?></textarea>
        				
        			</div>
        			<?php

				}
				?>
				<div class="form-group">
            		<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
       			 </div>

		</form>
	</div>
</body>
</html>
<?php
	include('./public/footer.php');
?>