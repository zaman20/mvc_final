<?php include('db.php');
        $sql1="SELECT * FROM rent";
        $query_rent = mysqli_query($conn,$sql1);
        $rent = mysqli_num_rows($query_rent);

        $sql2="SELECT * FROM sell";
        $query_sell = mysqli_query($conn,$sql2);
        $sell = mysqli_num_rows($query_sell);

        $sql3="SELECT * FROM appointment";
        $query_apt = mysqli_query($conn,$sql3);
        $apt = mysqli_num_rows($query_apt);

        $sql4="SELECT * FROM house";
        $query_house = mysqli_query($conn,$sql4);
        $house = mysqli_num_rows($query_house);
?>