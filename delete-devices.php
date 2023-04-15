<?php 
 include('./config.php');
    if(isset($_GET['d_id'])){
        $d_id=$_GET['d_id'];
        mysqli_query($connection,"DELETE FROM all_devices WHERE d_id=$d_id");
        header("location:view-devices.php");
    }
?>  