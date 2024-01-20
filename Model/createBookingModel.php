<?php 
        include('db.php');
        if(isset($_POST['name'])){

        $buyer_name = $_POST['name'];
        $buyer_phone = $_POST['phone'];
        $house = $_POST['hid'];
        $address = $_POST['address'];
        $price = $_POST['price'];

        $sql = "INSERT INTO `interest`(`name`, `phone`, `address`, `house`,`price`) VALUES ('$buyer_name','$buyer_phone','$address','$house','$price')";
        
        }
    ?>