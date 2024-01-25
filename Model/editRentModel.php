<?php 
    include('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM rent WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($query);
        $bname = $row['1'];
        $bphone = $row['2'];
        $house = $row['3'];
        $cost = $row['4'];
        $paid = $row['5'];
        $price = $row['6'];

        $due = $price - $paid;
    }


?>