<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Page</title>
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
        <?php include('../model/editRentModel.php');?>
        <div class="col-lg-9 right-part">
                <h2>Update Rent</h2>
                <form action="../controller/update-rent.php" method="post" class="rent-form row">
                    <div class="col-lg-6">
                        <label for="">Name</label>
                        <input type="text" value="<?php echo $bname;?>" name="buyer_name" placeholder="Buyer Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Phone</label>
                        <input type="number" value="<?php echo $bphone;?>" name="buyer_phone" placeholder="Buyer Phone" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="">House No</label>
                        <select name="house" id="" class="form-select">
                            <option value="<?php echo $house;?>">House#<?php echo $house;?></option>
                            <?php include('../Model/houseModel.php');?>
                            <?php while($row= mysqli_fetch_assoc($query)){ ?>
                                <option value="<?php echo $row['id'];?>">House #<?php echo $row['id'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="">Monthly Cost</label>
                        <input type="text" value="<?php echo $cost?>" name="monthly_cost" placeholder="Monthly Cost" class="form-control my-2">
                    </div>
                    <div class="col-lg-12">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <label for="">Paid:</label>
                        <input type="text" value="<?php echo $paid?>" name="paid" placeholder="Paid Amount" class="form-control my-2">
                        <input type="submit" value="Update" class="form-control my-2 btn btn-primary">
                    </div>
                   
                </form>

                <?php if(isset($_GET['msg'])){?>
                    <p class="alert alert-success mt-5"><?php echo $_GET['msg'];?> <i class="fa-solid fa-xmark close-icon" style='cursor:pointer; float:right;font-size:20px;'></i></p>
                    
                <?php }?>
        </div>
       </div>
    </div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/myscripts.js"></script>
</body>
</html>