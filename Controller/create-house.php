<?php 
        include('../Model/createHouseModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            header("Location:../view/add-house.php?msg= Successfully Added!");
        }
    ?>