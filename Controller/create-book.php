<?php 
        include('../Model/createBookingModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            header("Location:../view/house.php?msg= Request Sent! Please wait for appointment");
        }
        
    ?>