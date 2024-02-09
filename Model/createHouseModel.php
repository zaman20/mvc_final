<?php 
        include('db.php');
        if(isset($_POST['name'])){

        $name = $_POST['name'];
        $location = $_POST['location'];
        $details = $_POST['details'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        

        $sql = "INSERT INTO `house`(`name`, `location`, `details`,`price`,`type`) VALUES ('$name','$location','$details','$price','$type')";
        
        }
    ?>