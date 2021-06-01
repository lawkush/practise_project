
<?php
  include('CRUD_operationDB_connection.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title>Customer Details:</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<?php
  include('./public/footer.php');
?>
