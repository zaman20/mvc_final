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
            <a href="add-house.php" class="btn btn-primary">Add New </a>
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
                    <th>For</th>
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
                        <td>
                            <?php if($row['status']==0){?>
                                <span class='btn btn-success'>Available</span>
                            <?php }else if($row['status']==1){?>
                                <span class='btn btn-info'>Booked</span>
                            <?php }else if($row['status']==2){?>
                                <span class='btn btn-warning'>Sold</span>
                            <?php }?>
                        </td>
                        <td>
                            <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-danger dlt-btn">Delete</a>
                        </td>
                    </tr>
                

                <?php } }else{echo "No House Available";}?>
            </table>
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