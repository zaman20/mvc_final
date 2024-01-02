<?php if(isset($_POST['buyer_name'])){
        include('db.php');
        $buyer_name = $_POST['buyer_name'];
        $buyer_phone = $_POST['buyer_phone'];
        $buyer_email = $_POST['buyer_email'];
        $apt_date = $_POST['apt_date'];
        $apt_time = $_POST['apt_time'];

        $sql = " INSERT INTO `appointment`(`buyer_name`, `buyer_phone`, `buyer_email`, `apt_date`, `apt_time`) VALUES ('$buyer_name','$buyer_phone','$buyer_email','$apt_date','$apt_time')";

}
?>