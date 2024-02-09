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
        <div class="col-lg-1 "></div>
        <div class="col-lg-10 p-3 mt-3 border border-warning">
                <?php if(isset($_GET['msg'])){?>
                    <p class="alert alert-success mt-5"><?php echo $_GET['msg'];?> <i class="fa-solid fa-xmark close-icon" style='cursor:pointer; float:right;font-size:20px;'></i></p>
                    
                <?php }?>

                <h2 style="text-align:center">House Are Available For BOOKING!</h2>
            <table class="table table-striped mt-3">
             <?php include('../Model/houseModel.php');
                if($result>0){
                ?>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>House #</th>
                    <th>Location</th>
                    <th>Asking Price TK</th>
                    <th>For...</th>
                    <th>Details</th>
                    <th>Status</th>
                    <th> </th>
                    
                </tr>
                <?php while($row= mysqli_fetch_assoc($query)){ $count++;?>
                    <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td>House#<?php echo $row['id'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['type'];?></td>
                        <td><?php echo $row['details'];?></td>
                        
                        <?php if($row['status']==0){?>
                            <td>
                                <span class='btn btn-success'>Available</span>
                            </td>
                            <td>
                                <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-secondary add-btn">Book Now</a>
                            </td>
                        <?php }else if($row['status']==1){?>
                            <td>
                                <span class='btn btn-info'>Booked</span>
                            </td>
                            <td> </td>
                        <?php }else if($row['status']==2){?>
                            <td>
                                <span class='btn btn-warning'>Sold</span>
                            </td>
                            <td> </td>
                        <?php }?>
                        
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
                    <input type="number" placeholder="Bidding Price " name="price" class="form-control my-1">
                    <input type="submit" value="Send Request For Booking" class="form-control my-1 btn btn-primary">
                </form>

                <button class="form-control btn btn-danger close-btn">Close Now</button>
            </div>
        </div>
       </div>
    </div>
    

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/myscripts.js"></script>
</body>
</html>