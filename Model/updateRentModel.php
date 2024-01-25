<?php 
       include('db.php');
       if(isset($_POST['buyer_name'])){

       $buyer_name = $_POST['buyer_name'];
       $buyer_phone = $_POST['buyer_phone'];
       $house = $_POST['house'];
       $montly_cost = $_POST['monthly_cost'];
       $paid = $_POST['paid'];
       $id = $_POST['id'];

      $sql = "UPDATE `rent` SET `buyer_name`='$buyer_name',`buyer_phone`='$buyer_phone',`house`='$house',`monthly_cost`='$montly_cost',`paid`='$paid' WHERE `id` = $id";

       }
?>