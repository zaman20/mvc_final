<?php 
        include('../Model/createRentModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            header("Location:../view/add-rent.php?msg= Successfully Rented!");
        }
    ?>