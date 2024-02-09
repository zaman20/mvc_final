  <?php 
        include('../Model/createSellModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            $query2 = mysqli_query($conn,$sql2);
            header("Location:../view/add-sell.php?msg= Successfully Sold!");
        }
        
    ?>