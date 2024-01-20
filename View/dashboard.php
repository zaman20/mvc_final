<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
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
            <?php include('../Model/dashboardModel.php');?>
            <div class="box rent">Rent <br> 
                <?php echo $rent?>
            </div>
            <div class="box sell">Sell <br>
                <?php echo $sell?>
            </div>
            <div class="box appnt">Appointment <br>
                <?php echo $apt?>
            </div>

        </div>
       </div>
    </div>
</body>
</html>