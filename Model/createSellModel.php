<?php 
        include('db.php');
        if(isset($_POST['buyer_name'])){

        $buyer_name = $_POST['buyer_name'];
        $buyer_phone = $_POST['buyer_phone'];
        $house = $_POST['house'];
        $paid = $_POST['paid'];

        $sql = "INSERT INTO `sell`(`buyer_name`, `buyer_phone`, `house`, `paid`) VALUES ('$buyer_name','$buyer_phone','$house','$paid')";
        $sql2 = "UPDATE `house` SET `status` = 2 WHERE `id` = '$house'";
        }
    ?>