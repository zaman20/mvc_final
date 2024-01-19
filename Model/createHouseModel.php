<?php 
        include('db.php');
        if(isset($_POST['name'])){

        $name = $_POST['name'];
        $location = $_POST['location'];
        $details = $_POST['details'];
        $price = $_POST['price'];

        $sql = "INSERT INTO `house`(`name`, `location`, `details`,`price`) VALUES ('$name','$location','$details','$price')";
        
        }
    ?>