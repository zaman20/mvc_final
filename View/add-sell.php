<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Page</title>
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
                <h2>Real State System</h2>
                <?php include('menu.php');?>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-9 right-part">
                <h2>Sell</h2>
                <form action="../controller/create-sell.php" method="post" class="rent-form row">
                    <div class="col-lg-6">
                        <input type="text" name="buyer_name" placeholder="Buyer Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="number" name="buyer_phone" placeholder="Buyer Phone" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <select name="house" id="" class="form-select">
                        <?php include('../Model/houseModel.php');?>
                        <?php while($row= mysqli_fetch_assoc($query)){ ?>
                            <option value="House #<?php echo $row['id'];?>">House #<?php echo $row['id'];?></option>
                        <?php }?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="paid" placeholder="Pay Cost" class="form-control my-2">
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Sell" class="form-control my-2 btn btn-primary">
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