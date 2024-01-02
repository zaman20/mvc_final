<?php include('db.php');
        $sql="SELECT * FROM rent";
        $query_rent = mysqli_query($conn,$sql);
        $rent = mysqli_num_rows($query_rent);
        $sql="SELECT * FROM sell";
        $query_sell = mysqli_query($conn,$sql);
        $sell = mysqli_num_rows($query_sell);
        $sql="SELECT * FROM appointment";
        $query_apt = mysqli_query($conn,$sql);
        $apt = mysqli_num_rows($query_apt);
?>