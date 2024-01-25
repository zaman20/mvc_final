<?php 
        include('../Model/updateRentModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            header("Location:../view/edit-rent.php?id=$id && msg= Successfully Updated!");
        }
    ?>