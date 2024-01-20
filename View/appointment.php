<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Page</title>
    <!-- bootstrap  css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-fluid">
       <div class="row">
        <div class="col-lg-2 left-part">
            <div class="left-part-content">
        
                <?php include('menu.php');?>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-9 right-part">
            <a href="add-appointment.php" class="btn btn-dark">New Appointment</a>
            
            <table class="table table-striped mt-3">
                <?php include('../Model/appointmentModel.php');            
                    if($result>0){
                ?>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Buyer Phone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                <?php while($row= mysqli_fetch_assoc($query)){ $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['buyer_name'];?></td>
                        <td><?php echo $row['buyer_phone'];?></td>
                        <td><?php echo $row['buyer_email'];?></td>
                        <td><?php echo $row['apt_date'];?></td>
                        <td><?php echo $row['apt_time'];?></td>
                        <td>
                            <a href="tel:<?php echo $row['buyer_phone'];?>" class="btn btn-warning">Call</a>
                            <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-danger dlt-btn">Delete</a>
                        </td>
                    </tr>
                

                <?php } }else{echo "No Appointment";}?>
            </table>
        </div>
       </div>
    </div>

     <!-- ================================================================= -->
     <form action="../model/dltAptModel.php" method="post" id="dltForm">
        <input type="hidden" name="id" id="hid">
    </form>
<!-- ===================================================================== -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/myscripts.js"></script>
</body>
</html>