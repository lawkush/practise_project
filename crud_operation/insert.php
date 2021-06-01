<?php

	include('CRUD_operationDB_connection.php');
	if(isset($_POST['submit'])){

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		//for data insert
		$query=mysqli_query($con,"insert into table_customer(first_name,last_name,mobile,emailid,address) value('$fname','$lname','$mobile','$email','$address')");
		if($query){
			echo"<script>alert('You have successfully inserted the customer data');</script>";
			//echo"<script> document.location='myindex.php';</script>";
		}
		else
    	{
      		echo "<script>alert('Something Went Wrong. Please try again');</script>";
    	}
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
<div class="signup-form">
	
		<form method="POST" action="insert.php">
			
			<h2 class="hint-text">Customer Data</h2>
			<p class="text-center">Fill the below form</p>
			<div class="form-group">
				<div class="row">
					<div class="col">
						<input type="text" name="fname" class="form-control" placeholder="First Name" required="true"/>
					</div>
					<div class="col">
						<input type="text" name="lname" class="form-control" placeholder="First Name" required="true"/>
					</div>
				</div>	
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="mobile" placeholder="Enter mobile number" required="true" maxlength="10" pattern="[0-9]+">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Enter email id" required="true">
			</div>
			<div class="form-group">
				<textarea class="form-control" name="address" placeholder="Enter Address"  required="true	"></textarea>
			</div>
			<div class="form-group">	
					<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit	</button>
			</div>

		</form>
	</div>
	
		

</body>
</html>
<?php
	include('./public/footer.php');
?>
