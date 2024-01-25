<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Interest Page</title>
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
            <h2>Buyer are interested for this House</h2>
            <table class="table table-striped mt-3">
            <?php include('../Model/interestModel.php');
                if($result>0){
                ?>
                <tr>
                    <th>#</th>
                    <th>Buyer Name</th>
                    <th>House #</th>
                    <th>Mobile </th>
                    <th>Address</th>
                    <th>Bid Price</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <?php while($row= mysqli_fetch_assoc($query)){ $count++;?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td>House#<?php echo $row['house'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td>
                        <a href="tel:<?php echo $row['phone'];?>" class="btn btn-info">Call</a>
                        <a href="#" data-id="<?php echo $row['id'];?>" class="btn btn-danger dlt-btn">Delete</a>
                     
                    </td>
                </tr>
                <?php } }else{echo "No Interest Available";}?>
            </table>
        </div>
       </div>
    </div>

    <!-- ================================================================= -->
    <form action="../model/dltInterestModel.php" method="post" id="dltForm">
        <input type="hidden" name="id" id="hid">
    </form>
<!-- ===================================================================== -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/myscripts.js"></script>
</body>
</html>