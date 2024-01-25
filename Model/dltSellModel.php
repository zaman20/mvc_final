<?php 
    include('db.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql="DELETE FROM sell WHERE id = $id LIMIT 1";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('Location:../view/sell.php?msg= Successfully Deleted');
        }
    }
    
?>