<?php include('db.php');
                    $sql="SELECT * FROM appointment";
                    $query = mysqli_query($conn,$sql);
                    $result = mysqli_num_rows($query); 
                    $count =0; 