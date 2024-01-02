  <?php 
        include('../Model/createSellModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
            header("Location:../view/add-sell.php?msg= Successfully Sold!");
        }
        
    ?>