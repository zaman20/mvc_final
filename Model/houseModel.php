<?php 
    include('db.php');
    $sql="SELECT * FROM house ORDER BY id DESC";
    $sql2="SELECT * FROM house WHERE status = 0";

    $query = mysqli_query($conn,$sql);
    $query2 = mysqli_query($conn,$sql2);

    $result = mysqli_num_rows($query); 
    $result2 = mysqli_num_rows($query2); 
    $count =0; 
?>