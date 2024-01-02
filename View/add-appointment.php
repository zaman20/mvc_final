
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- font icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h2>Schedule an Appointment</h2>
                <form action="../Controller/create-apt.php" method="post" class="rent-form row">
                    <div class="col-lg-6">
                        <input type="text" name="buyer_name" placeholder="Buyer Name" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <input type="number" name="buyer_phone" placeholder="Buyer Phone" class="form-control my-2">
                    </div>
                    <div class="col-lg-12">
                        <input type="email" name="buyer_email" placeholder="Buyer Email" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Date</label>
                        <input type="date" name="apt_date" class="form-control my-2">
                    </div>
                    <div class="col-lg-6">
                        <label for="">Time</label>
                        <input type="time" name="apt_time" class="form-control my-2">
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" value="Rent" class="form-control my-2 btn btn-primary">
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