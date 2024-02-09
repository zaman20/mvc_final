<?php 
        include('../Model/createRentModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            $query2 = mysqli_query($conn,$sql2);
            header("Location:../view/add-rent.php?msg= Successfully Rented!");
        }
    ?>