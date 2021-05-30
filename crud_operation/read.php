
<?php
  include('CRUD_operationDB_connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title>Customer Details:</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="../crud_operation/public/assets/css/style.css">
</head>
<body>
  <div class="container-x1">
      <div class="table-responsive">
          <div class="table-wrapper">
           <div class="table-title">
              <div class="row">
                <div class="col-sm-5">
                  <h2>User <b>Details</b></h2>
                </div>
              </div>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered table-wrapper" id="hidden-table-info">       
                 <tbody>
                    <?php
                    //$vid=$_GET['viewid'];
                    $cid=$_GET['viewid'];
                    $ret=mysqli_query($con,"select * from table_customer where cid ='$cid'");
                    $cnt=1;
                    while ($row=mysqli_fetch_array($ret)) {

                    ?>
                     <tr>
                        <th>First Name</th>
                        <td><?php  echo $row['first_name'];?></td>
                        <th>Last Name</th>
                        <td><?php  echo $row['last_name'];?></td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?php  echo $row['mobile'];?></td>
                        <th>Mobile Number</th>
                        <td><?php  echo $row['emailid'];?></td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td><?php  echo $row['address'];?></td>
                        <th>Current Date</th>
                        <td><?php echo $row['current_date']?></td>
                      </tr>
                        <?php 
                      $cnt=$cnt+1;
                      }?> 
                   </tbody>
                 </table>
              </div>
             </div>
          </div>
        </div>
</body>
</html>
