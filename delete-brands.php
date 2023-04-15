<?php 
 include('./config.php');
    if(isset($_GET['br_id'])){
        $br_id=$_GET['br_id'];
        mysqli_query($connection,"DELETE FROM all_brands WHERE br_id=$br_id");
        header("location:view-brands.php");
    }
?>  