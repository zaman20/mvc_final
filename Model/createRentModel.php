<?php 
       include('db.php');
       if(isset($_POST['buyer_name'])){

       $buyer_name = $_POST['buyer_name'];
       $buyer_phone = $_POST['buyer_phone'];
       $house = $_POST['house'];
       $montly_cost = $_POST['monthly_cost'];

       $sql = "INSERT INTO `rent`(`buyer_name`, `buyer_phone`, `house`, `monthly_cost`) VALUES ('$buyer_name','$buyer_phone','$house','$montly_cost')";

       }
?>