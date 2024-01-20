<?php 
    include('db.php');
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql="DELETE FROM interest WHERE id = $id LIMIT 1";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('Location:../view/buyer-interest.php?msg= Successfully Deleted');
        }
    }
    
?>