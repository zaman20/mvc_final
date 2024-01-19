<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Page</title>
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
                <?php if(isset($_GET['msg'])){?>
                    <p class="alert alert-success mt-5"><?php echo $_GET['msg'];?> <i class="fa-solid fa-xmark close-icon" style='cursor:pointer; float:right;font-size:20px;'></i></p>
                    
                <?php }?>
            <a href="add-house.php" class="btn btn-dark">Add New </a>
            <table class="table table-striped mt-3">
            <?php include('../Model/houseModel.php');
                if($result>0){
                ?>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>House #</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th> </th>
                    
                </tr>
                <?php while($row= mysqli_fetch_assoc($query)){ $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td>House#<?php echo $row['id'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['details'];?></td>
                        <td>
                            <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-warning add-btn">Book Now</a>
                            <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-danger dlt-btn">Delete</a>
                        </td>
                    </tr>
                

                <?php } }else{echo "No House Available";}?>
            </table>

            <div class="booking-box">
                <h3>House Booking!</h3>
                <form action="../controller/create-book.php" method="post">
                    <input type="hidden" id="getId" name="hid">
                    <input type="text" placeholder="Your Name " name="name" class="form-control my-1">
                    <input type="text" placeholder="Phone Number " name="phone" class="form-control my-1">
                    <input type="text" placeholder="Address " name="address" class="form-control my-1">
                    <input type="submit" value="Send Request For Booking" class="form-control my-1 btn btn-primary">
                    <button class="form-control btn btn-danger close-btn">Close Now</button>
                </form>
            </div>
        </div>
       </div>
    </div>
    
<!-- ================================================================= -->
    <form action="../model/dltHouseModel.php" method="post" id="dltForm">
        <input type="hidden" name="id" id="hid">
    </form>
<!-- ===================================================================== -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/myscripts.js"></script>
</body>
</html>