<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Rent System</title>
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
                <h2>Add New House</h2>
                <form action="../controller/create-house.php" method="post" class="rent-form row">
                    <div class="col-lg-6">
                        <input type="text" name="name" placeholder="House Name " class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="location" placeholder="Location" class="form-control my-2">
                    </div>
                
                    <div class="col-lg-6">
                        <input type="number" name="price" placeholder="form-control my-2">
                    </div>
                    <div class="col-lg-12">
                        <textarea name="details" class="form-control my-2" cols="30" rows="10">Details....</textarea>
                        <input type="submit" value="Add" class="form-control my-2 btn btn-primary">
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