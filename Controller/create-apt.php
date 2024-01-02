<?php include('../Model/createAptModel.php');
        $query = mysqli_query($conn,$sql);
        if($query){
        header("Location:../view/add-appointment.php?msg=Appointment Created!");
        }

?>