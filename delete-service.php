<?php 
 include('./config.php');
    if(isset($_GET['st_id'])){
        $st_id=$_GET['st_id'];
        mysqli_query($connection,"DELETE FROM service_type WHERE st_id=$st_id");
        header("location:view-service.php");
    }
?>  