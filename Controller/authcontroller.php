<?php 
    if($name=="seller" && $pass=="seller"){
        header("Location:dashboard.php");
    }
    else{
        header("Location:index.php?msg='Wrong Details");
    }

?>